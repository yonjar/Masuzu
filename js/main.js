/**/
$(function(){	
    var mama = $(document).scrollTop();
    var papa = $('.nav').outerHeight();

    $(window).scroll(function() {
        var baba = $(document).scrollTop();

        if (baba > papa){$('.nav').addClass('xiaoshi');} 
        else {$('.nav').removeClass('xiaoshi');}

        if (baba > mama){$('.nav').removeClass('chuxian');} 
        else {$('.nav').addClass('chuxian');}				

        mama = $(document).scrollTop();	
     });
});

(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

    var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: true,
    live: true
});
    wow.init();

    $(document).ready(function(){
        $(".card-content p img").addClass("ImageBox");
        $(".card-content p img").attr("width","300");
        $(".pagination li").addClass("waves-effect");
        $(".collection-item.avatar a").attr("target","_blank")
});

$(document).ready(function () {
    $("#switch").click(function () {
        $("#article").toggleClass("m8");
        $("#sidebar").toggleClass("hide");
        $("#switch").toggleClass("active");
    });
});

    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'cytrs';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());




