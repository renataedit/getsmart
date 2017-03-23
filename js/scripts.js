var j = jQuery.noConflict();

/* Smooth scrolling when clicking on an anchor */
j('a').on('click', function(event){
    //event.preventDefault();
    j('html,body').animate({scrollTop:j(this.hash).offset().top - 150},500);
 });
