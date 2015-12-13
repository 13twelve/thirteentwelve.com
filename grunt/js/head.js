/* to be included compressed, inline, in the head of the document */

var A17 = window.A17 || {};

A17.svgSupport = document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1");

A17.browserSpec = (typeof document.querySelectorAll && 'addEventListener' in window && A17.svgSupport) ? "html5" : "html4";

A17.touch = (('ontouchstart' in window) || window.documentTouch && document instanceof DocumentTouch) ? true : false;

A17.loadCSS = function(href,before,media){
  "use strict";
  var ss = document.createElement("link");
  var ref;
  if(before){
    ref = before;
  } else if( document.querySelectorAll ){
    var refs = document.querySelectorAll("style,link[rel=stylesheet],script");
    ref = refs[ refs.length - 1];
  } else {
    ref = document.getElementsByTagName("script")[ 0 ];
  }
  var sheets = document.styleSheets;
  ss.rel = "stylesheet";
  ss.href = href;
  ss.media = "only x";
  ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
  ss.onloadcssdefined = function( cb ){
    var defined;
    for( var i = 0; i < sheets.length; i++ ){
      if( sheets[ i ].href && sheets[ i ].href === ss.href ){
        defined = true;
      }
    }
    if( defined ){
      cb();
    } else {
      setTimeout(function() {
        ss.onloadcssdefined( cb );
      });
    }
  };
  ss.onloadcssdefined(function() {
    ss.media = media || "all";
  });
  return ss;
};

var d = document,
    de = d.documentElement,
    loadCSSbefore = d.getElementById("icons_ss"),
    str = " js "+A17.browserSpec+(A17.touch ? " touch" : " no-touch")+(A17.svgSupport ? " svg" : " no-svg")+(('objectFit' in de.style) ? " objectFit" : " no-objectFit");

de.className = de.className.replace(/\bno-js\b/,str);

A17.loadCSS("/stylesheets/icons.css",loadCSSbefore);
