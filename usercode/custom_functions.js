// Place event code here.
// Use "Add Action" button to add code snippets.

// custom_functions.js
(function () {
  // Set one width for all compact list pages
  var W = 600;

  function injectCompactWidthOnce(id, widthPx) {
    if (document.getElementById(id)) return; // avoid duplicates
    var css = [
      '@media (min-width:768px){',
        /* Standard/small layout */
        '.r-small-page[data-body-width="compact"] > .container,',
        '.r-small-page[data-body-width="compact"] > .r-body,',
        '.r-small-page[data-body-width="compact"] > .r-content,',
        '.r-small-page[data-body-width="compact"] > .r-data-block,',
        '.r-small-page[data-body-width="compact"] .container{',
          'max-width:' + widthPx + 'px;',
          'width:' + widthPx + 'px;',
          'margin-left:auto;',
          'margin-right:auto;',
        '}',

        /* Topbar layout */
        '.r-topbar-page .r-body .r-content .r-data-block[data-body-width="compact"]{',
          'width:' + widthPx + 'px;',
          'max-width:' + widthPx + 'px;',
          'flex:0 0 ' + widthPx + 'px;',
          'margin-left:auto;',
          'margin-right:auto;',
        '}',

        /* Ensure grid fills the fixed container */
        '.r-topbar-page .r-body .r-content .r-data-block[data-body-width="compact"] > .r-grid,',
        '.r-small-page[data-body-width="compact"] .r-grid{',
          'width:100%;',
          'max-width:100%;',
        '}',
      '}'
    ].join('');

    var style = document.createElement('style');
    style.id = id;
    style.type = 'text/css';
    style.appendChild(document.createTextNode(css));
    document.head.appendChild(style);
  }

  function applyIfCompactListPage() {
    var b = document.body;
    var isList = b.classList.contains('list-page');
    var isCompact = (b.getAttribute('data-body-width') === 'compact');
    if (isList && isCompact) {
      injectCompactWidthOnce('compact-width-global', W);
    }
  }

  // Run on initial load
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', applyIfCompactListPage);
  } else {
    applyIfCompactListPage();
  }
})();


/* === Row color styler for PHPRunner inline grids ==================
   Turns a row light green when "start" is checked, darker green when
   "completed" is checked. Works for inline Add + Edit.

   Wire-up example (on a page JS OnLoad):
     PhprRowStateStyler.bind('start_checked','completed_checked');

   You can reuse this on any table; just pass the checkbox field names.
   ================================================================ */
(function(global){
  if (global.PhprRowStateStyler) return; // avoid double-load

  function injectRowStylesOnce(){
    if (document.getElementById('phpr-rowstate-styles')) return;
    var css = [
      /* Make sure the entire row paints, not just a single cell */
      "tr.phpr-row-started td{ background-color:#e8f5e9 !important; }",  /* light green */
      "tr.phpr-row-completed td{ background-color:#c8e6c9 !important; }" /* darker green */
    ].join("\n");
    var style = document.createElement('style');
    style.id = 'phpr-rowstate-styles';
    style.type = 'text/css';
    style.appendChild(document.createTextNode(css));
    document.head.appendChild(style);
  }

  function getRowFrom(el){
    var $tr = $(el).closest('tr');
    if ($tr.length) return $tr;
    return $(); // empty
  }

  function isCheckedInRow($tr, field){
    // Works for inline add/edit: look for the checkbox inside the row & field cell
    var $cb = $tr.find("td[data-field='"+field+"'] input[type=checkbox], input[id^='value_"+field+"_']");
    if (!$cb.length) return false;
    // Prefer DOM property
    for (var i=0;i<$cb.length;i++){ if ($cb[i].checked) return true; }
    // Fallback to value
    var v = $cb.first().val();
    return (v===1 || v==='1' || v===true || v==='on' || v==='ON');
  }

  function paintRow($tr, started, completed){
    // precedence: completed (dark) > started (light) > none
    $tr.removeClass('phpr-row-started phpr-row-completed');
    if (completed)      $tr.addClass('phpr-row-completed');
    else if (started)   $tr.addClass('phpr-row-started');
  }

  function updateRowFor(el, startField, completedField){
    var $tr = getRowFrom(el);
    if (!$tr.length) return;
    var started   = isCheckedInRow($tr, startField);
    var completed = isCheckedInRow($tr, completedField);
    paintRow($tr, started, completed);
  }

  function initialSweep(startField, completedField){
    // Any inline rows already on screen
    $("td[data-field='"+startField+"'] input[type=checkbox], input[id^='value_"+startField+"_']").each(function(){
      updateRowFor(this, startField, completedField);
    });
    $("td[data-field='"+completedField+"'] input[type=checkbox], input[id^='value_"+completedField+"_']").each(function(){
      updateRowFor(this, startField, completedField);
    });
  }

  global.PhprRowStateStyler = {
    bind: function(startField, completedField){
      injectRowStylesOnce();

      // Delegate so it works for rows created later (inline add/edit)
      $(document).on('change',
        "td[data-field='"+startField+"'] input[type=checkbox], input[id^='value_"+startField+"_'], " +
        "td[data-field='"+completedField+"'] input[type=checkbox], input[id^='value_"+completedField+"_']",
        function(){ updateRowFor(this, startField, completedField); }
      );

      // First pass now…
      initialSweep(startField, completedField);

      // …and whenever inline rows are created/removed/toggled
      $(document).on('click', '.rnr-inlinestart, .rnr-inlineedit, .rnr-inlineadd, .rnr-inlinecancel', function(){
        setTimeout(function(){ initialSweep(startField, completedField); }, 60);
      });
    }
  };
})(window);
