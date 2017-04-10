var j = jQuery.noConflict();

/* Smooth scrolling when clicking on an anchor */
j('.anchor a').on('click', function(event){
    if( j( 'body' ).hasClass( 'home' ) ){
        event.preventDefault();
    }
    j('html,body').animate({scrollTop:j(this.hash).offset().top - 150},500);
 });
