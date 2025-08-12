
Runner.pages.PageSettings.addPageEvent( 
	"projects", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		(function(){
  // Hide Created fields (optional)
  ["created_by","created_at"].forEach(function(f){
    var row = document.querySelector('[data-field="'+f+'"]');
    if (row) row.style.display = "none";
  });

  // Insert just above the Save/Back buttons
  var below = document.getElementById('form_below-grid_1');
  var parent = below ? below.parentNode : null;
  if (!parent) parent = document.getElementById('form_grid_1') || document.body;

  // Width-constrained wrapper to kill extra whitespace
  var outer = document.createElement('div');
  outer.style.maxWidth = "900px";
  outer.style.margin = "12px auto";

  // Cerulean-styled panel
  var wrap = document.createElement('div');
  wrap.id = 'phase-durations';
  wrap.className = 'panel panel-info';
  wrap.innerHTML =
    '<div class="panel-heading">' +
      '<span class="glyphicon glyphicon-time" aria-hidden="true"></span> ' +
      '<strong>Phase durations</strong> ' +
      '<small class="text-muted">(business days; used for due dates)</small>' +
      '<a href="#" id="pd-reset" class="btn btn-link btn-xs pull-right" style="padding-top:0">Reset to defaults</a>' +
    '</div>' +
    '<div class="panel-body">' +
      '<div id="pd-status" class="text-muted">Loading…</div>' +
      '<div id="pd-grid" class="row" style="margin-top:6px"></div>' +
    '</div>';

  outer.appendChild(wrap);
  parent.insertBefore(outer, below || null);

  // Build one compact cell (Bootstrap form-group + input-group)
  function makeCell(labelText, code, value){
    var col = document.createElement('div');
    col.className = 'col-xs-6 col-sm-4 col-md-2'; // compact
    col.style.marginBottom = '8px';

    var fg = document.createElement('div');
    fg.className = 'form-group';
    fg.style.marginBottom = '6px';

    var label = document.createElement('label');
    label.className = 'control-label';
    label.textContent = labelText;

    var ig = document.createElement('div');
    ig.className = 'input-group input-group-sm';

    var input = document.createElement('input');
    input.type = 'number';
    input.min = '1';
    input.step = '1';
    input.required = true;
    input.name = 'phase_long[' + code + ']';
    input.value = value;
    input.className = 'form-control';

    var addon = document.createElement('span');
    addon.className = 'input-group-addon';
    addon.textContent = 'days';

    input.addEventListener('input', function(){
      var v = parseInt(this.value, 10);
      if (!isFinite(v) || v < 1) this.value = 1;
    });

    ig.appendChild(input);
    ig.appendChild(addon);
    fg.appendChild(label);
    fg.appendChild(ig);
    col.appendChild(fg);
    return col;
  }

  // Fetch defaults from server
  fetch('phase_defaults.php', { credentials: 'same-origin' })
    .then(function(r){ return r.json(); })
    .then(function(rows){
      var status = document.getElementById('pd-status');
      var grid   = document.getElementById('pd-grid');

      if (!Array.isArray(rows) || !rows.length) {
        status.className = 'text-danger';
        status.textContent = 'No phase defaults found.';
        return;
      }
      status.parentNode.removeChild(status);

      // Keep defaults for Reset
      var defaultsByCode = {};
      rows.forEach(function(r){ defaultsByCode[r.phase_code] = r.l; });

      rows.forEach(function(r){
        grid.appendChild( makeCell(r.label, r.phase_code, r.l) );
      });

      document.getElementById('pd-reset').addEventListener('click', function(e){
        e.preventDefault();
        Object.keys(defaultsByCode).forEach(function(code){
          var el = document.querySelector('input[name="phase_long['+code+']"]');
          if (el) el.value = defaultsByCode[code];
        });
      });
    })
    .catch(function(err){
      var status = document.getElementById('pd-status');
      status.className = 'text-danger';
      status.textContent = 'Error loading durations.';
      if (window.console) console.error('phase_defaults error', err);
    });
})();

});


Runner.pages.PageSettings.addPageEvent( 
	"projects", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

//Per Page override for Compact body width
(function () {
  var W = 1000; // page-specific width

  var css = [
    '@media (min-width:768px){',
      '.r-small-page[data-body-width="compact"] > .container,',
      '.r-small-page[data-body-width="compact"] > .r-body,',
      '.r-small-page[data-body-width="compact"] > .r-content,',
      '.r-small-page[data-body-width="compact"] > .r-data-block,',
      '.r-small-page[data-body-width="compact"] .container{',
        'max-width:' + W + 'px;',
        'width:' + W + 'px;',
        'margin-left:auto;',
        'margin-right:auto;',
      '}',

      '.r-topbar-page .r-body .r-content .r-data-block[data-body-width="compact"]{',
        'width:' + W + 'px;',
        'max-width:' + W + 'px;',
        'flex:0 0 ' + W + 'px;',
        'margin-left:auto;',
        'margin-right:auto;',
      '}',

      '.r-topbar-page .r-body .r-content .r-data-block[data-body-width="compact"] > .r-grid,',
      '.r-small-page[data-body-width="compact"] .r-grid{',
        'width:100%;',
        'max-width:100%;',
      '}',
    '}'
  ].join('');

  var style = document.createElement('style');
  style.type = 'text/css';
  style.id = 'compact-width-thispage';
  if (!document.getElementById(style.id)) {
    style.appendChild(document.createTextNode(css));
    document.head.appendChild(style);
  }
})();

});






