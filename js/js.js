// Set the date we're counting down to
var countDownDate = new Date("Aug 11, 2018 19:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
   
    document.getElementById("days").innerHTML= +days+ "";
    document.getElementById("hours").innerHTML= +hours+ "";
    document.getElementById("minutes").innerHTML= +minutes+ "";
    document.getElementById("seconds").innerHTML= +seconds+ "";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

// Back to top

if($('#back-to-top').length) {
    var scrollTrigger=100, 
        backToTop = function() {
            var scrollTop = $(window).scrollTop();
            if(scrollTop>scrollTrigger) {
                $('#back-to-top').addClass('show');
            }
                else
                {
                $('#back-to-top').removeClass('show'); 
            }
        };

        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        $('#back-to-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate( {
                scrollTop:0
            }, 700);
        });
}




