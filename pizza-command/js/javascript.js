$(document).ready(function(){

/*start header costume*/

$(".header").height($(window).height());

/*start typed plugin*/
 Typed.new("#typed", {
            stringsElement: document.getElementById('typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to null for infinite loop
            loopCount: null,
            
            resetCallback: function() { newTyped(); }
        });
/*End typed plugin*/



/*start form validation*/
$(".form form #name").keyup(function(){
 if ($(this).val().length()<4) {
      $(this).after().text("sorry this can be empty").fadeIn();
 }

});

$("html").niceScroll({

  cursorcolor:"#f7b123",
  bordercolor:"#f7b123"

});


/*End form validation*/
});