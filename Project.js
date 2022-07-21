var $slider = document.getElementById('slider');
var $toggle = document.getElementById('toggle');

$toggle.addEventListener('click', function() {
    var isOpen = $slider.classList.contains('slide-in');

    $slider.setAttribute('class', isOpen ? 'slide-out' : 'slide-in');
});

$(document).ready(function(){
    $("").click(function(){
          $("#div1").fadeIn(3000);
        //   $("#div2").fadeIn(1000);
        //   $("#div3").fadeIn(3000);
        //   $("#div4").fadeIn(5000);
});
    });