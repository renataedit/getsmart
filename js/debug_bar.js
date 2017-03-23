jQuery(document).ready(function(){


    //jQuery(".debug_bar_in").debugTabs();

    jQuery(document).on('click', '#ln_debug_bar > h3', function(){
        jQuery('#ln_debug_bar .debug_bar_in').slideToggle('fast');
        jQuery('#ln_debug_bar').toggleClass('debugbar_open');
    });

    var debugTabs = jQuery('#ln_debug_bar .debug_bar_tabs');

    var tabNav = '<ul class="tabnav">';
        jQuery(".tab", debugTabs).each(function(){
            var tabTitle = jQuery(this).attr('alt');
            tabNav += "<li>"+tabTitle+"</li>";
        });
    tabNav += '</ul>';
    debugTabs.before(tabNav);
    jQuery('.tab:first', debugTabs).show();
    jQuery('.debug_bar_in .tabnav li:first').addClass('active');

    jQuery('.debug_bar_in .tabnav li').on('click', function(){
        jQuery('.tab', debugTabs).hide();
        jQuery('.debug_bar_in .tabnav li.active').removeClass('active');
        jQuery(this).addClass('active');
        var index = jQuery(this).index()+1;

        jQuery('.tab:nth-child('+index+')', debugTabs).show();
    });

    if(jQuery("#ln_debug_bar").length > 0){
        jQuery('html').css('margin-bottom', '25px');
    }

});
