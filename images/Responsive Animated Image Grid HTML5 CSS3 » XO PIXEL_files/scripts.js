(function($) {
    $('figure.wp-caption.aligncenter').removeAttr('style');
    $('img.aligncenter').wrap('<figure class="centered-image" />');
}) (jQuery);

$(".search-icon").click(function(){
    $(".search-drawer").addClass("active");
});

$(".search-close").click(function(){
    $(".search-drawer").removeClass("active");
});

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// Find all YouTube and Vimeo videos
var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $("body");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});

// When the window is resized
$(window).resize(function() {

  var newWidth = $fluidEl.width();

  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {

    var $el = $(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));

  });
  
// Kick off one resize to fix all videos on page load
}).resize();

var invocation = new XMLHttpRequest();
var url = 'https://www.youtube.com/watch?v=';
   
function callOtherDomain() {
  if(invocation) {    
    invocation.open('GET', url, true);
    invocation.onreadystatechange = handler;
    invocation.send(); 
  }
}
