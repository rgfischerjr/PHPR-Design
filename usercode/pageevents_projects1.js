
Runner.pages.PageSettings.addPageEvent( 
	"projects view", 
	"list", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		(function(){
  // --- Read state from hidden spans (set in Before display) or URL ---
  var params = new URL(location.href).searchParams;
  var roleEl  = document.getElementById('dash-role');
  var scopeEl = document.getElementById('dash-scope');
  var selEl   = document.getElementById('dash-designer');

  var role  = (roleEl  && roleEl.textContent)  ? roleEl.textContent.trim()  : '';
  var scope = params.get('scope') || (scopeEl && scopeEl.textContent ? scopeEl.textContent.trim() : '');
  var selId = params.get('designer_id') || (selEl && selEl.textContent ? selEl.textContent.trim() : '');

  // --- Helpers ---
  function nav(next){
    var url = new URL(location.href);
    Object.keys(next).forEach(function(k){
      if (next[k] === null || next[k] === '') url.searchParams.delete(k);
      else url.searchParams.set(k, next[k]);
    });
    location.href = url.toString();
  }

  function makeLink(label, val, active){
    var a = document.createElement('a');
    a.href = 'javascript:void(0)';
    a.textContent = label;
    a.style.marginRight = '8px';
    if (active){ a.style.fontWeight = '700'; a.style.textDecoration = 'underline'; }
    a.addEventListener('click', function(){
      // mine clears designer filter; all keeps current selection
      nav({ scope: val, designer_id: (val === 'mine' ? null : selId) });
    });
    return a;
  }

  // --- Find a good container above the grid ---
  var above = document.querySelector('[data-location="above-grid"]')
          || document.querySelector('.rnr-b-above-grid')
          || document.querySelector('.panel-heading')
          || document.body;

  // --- Insert scope toggles ---
  var isMine = (scope === 'mine') || (!scope && role === 'designer');
  var toggleWrap = document.createElement('div');
  toggleWrap.style.margin = '8px 0 10px 0';
  toggleWrap.appendChild(makeLink('Show Only Mine', 'mine', isMine));
  if (role !== 'designer') toggleWrap.appendChild(makeLink('Show All', 'all', !isMine));
  above.insertBefore(toggleWrap, above.firstChild);

  // --- Move legend to top (if present) ---
  (function(){
    var legend = document.getElementById('dash-legend');
    if (!legend) return;
    // Ensure legend is the first element above the grid
    above.insertBefore(legend, above.firstChild);
  })();

  // --- Admin-only designer dropdown: move & wire ---
  (function(){
    if (role !== 'admin') return;
    var src = document.getElementById('designer-filter-container');
    if (!src) return;
    src.style.display = '';
    var wrap = document.createElement('div');
    wrap.style.margin = '0 0 12px 0';
    wrap.appendChild(src);
    // Place after the toggles but before the grid
    if (toggleWrap.nextSibling) {
      above.insertBefore(wrap, toggleWrap.nextSibling);
    } else {
      above.appendChild(wrap);
    }

    var sel = document.getElementById('designer-filter');
    if (sel) {
      // Disable in "mine" scope
      if (isMine) {
        sel.disabled = true;
        sel.title = "Switch to 'Show All' to choose a specific designer";
      }
      // Ensure selected option matches current filter
      if (selId) sel.value = selId;
      sel.addEventListener('change', function(){
        // Selecting a designer forces scope=all
        nav({ scope: 'all', designer_id: sel.value });
      });
    }
  })();

  // --- Compact rows: add class to the grid table (no !important in CSS) ---
  (function(){
    var t = document.querySelector('table.rnr-gridtable');
    if (t && !t.classList.contains('ds-compact')) t.classList.add('ds-compact');
  })();
})();

(function() {
  var W = 800; // <-- set your compact width once

  var css = [
    '@media (min-width:768px){',
      /* Standard/small layout */
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

      /* Topbar layout */
      '.r-topbar-page .r-body .r-content .r-data-block[data-body-width="compact"]{',
        'width:' + W + 'px;',
        'max-width:' + W + 'px;',
        'flex:0 0 ' + W + 'px;',
        'margin-left:auto;',
        'margin-right:auto;',
      '}',

      /* Ensure grid fills your fixed container */
      '.r-topbar-page .r-body .r-content .r-data-block[data-body-width="compact"] > .r-grid,',
      '.r-small-page[data-body-width="compact"] .r-grid{',
        'width:100%;',
        'max-width:100%;',
      '}',
    '}'
  ].join('');

  var style = document.createElement('style');
  style.type = 'text/css';
  style.appendChild(document.createTextNode(css));
  document.head.appendChild(style);

  // Optional: quick visual confirmation (remove after verifying)
  // document.body.matches('.r-small-page[data-body-width="compact"], .r-topbar-page *[data-body-width="compact"]')
  //   && document.body.insertAdjacentHTML('beforeend','<div style="position:fixed;inset:auto 10px 10px auto;padding:4px 8px;background:#000;color:#fff;font:12px system-ui;border-radius:4px;opacity:.7;z-index:99999">Compact=' + W + 'px</div>');
})();


});






