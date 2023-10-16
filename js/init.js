function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 2500);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

    onReady(function() {
      setVisible('.page', true);
      setVisible('#loading', false);
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space
