/*

  A17

*/

// --------------------------------------------------------------------------------------------------------------

// set up a master object
var A17 = window.A17 || {};

// set up some objects within the master one, to hold my Helpers and behaviors
A17.Behaviors = {};
A17.Helpers = {};
A17.media_query_in_use = "large";

A17.client_id = "60249325a5084696aba63248421d9145";
A17.access_token = localStorage.access_token || false;
A17.user = localStorage.user || false;

// look through the document (or ajax'd in content if "context" is defined) to look for "data-behavior" attributes.
// Initialize a new instance of the method if found, passing through the element that had the attribute
// So in this example it will find 'data-behavior="show_articles"' and run the show_articles method.
A17.LoadBehavior = function(context){
  if(context === undefined){
    context = document;
  }
  var all = context.querySelectorAll("[data-behavior]");
  var i = -1;
  while (all[++i]) {
    var currentElement = all[i];
    var behaviors = currentElement.getAttribute("data-behavior");
    var splitted_behaviors = behaviors.split(" ");
    for (var j = 0, k = splitted_behaviors.length; j < k; j++) {
      var thisBehavior = A17.Behaviors[splitted_behaviors[j]];
      if(typeof thisBehavior !== "undefined") {
        thisBehavior.call(currentElement,currentElement);
      }
    }
  }
};

// set up and trigger looking for the behaviors on DOM ready
A17.onReady = function(){
  window.$ = min$;
  // sort out which media query we're using
  A17.media_query_in_use = A17.Helpers.get_media_query_in_use();
  // track history
  A17.Helpers.history();
  // go go go
  A17.LoadBehavior();
  // on resize, check
  var resize_timer;
  $(window).on('resize', function(){
    clearTimeout(resize_timer);
    resize_timer = setTimeout(function(){
      A17.Helpers.resized();
    },250);
  });
};

document.addEventListener('DOMContentLoaded', function(){
  A17.onReady();
});

// make console.log safe
if (typeof console === "undefined") {
  window.console = {
    log: function () {
      return;
    }
  };
}
