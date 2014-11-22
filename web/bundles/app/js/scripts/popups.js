
jQuery(document).ready(function(jQuery) {

    jQuery('.popup').click(function() {
        var popupid = jQuery(this).attr('rel');
        jQuery('#' + popupid).fadeIn();
        jQuery('.contact_mail1').css("display", "none");
        jQuery('body').css({'overflow-y': 'hidden'});
        jQuery('body').append('<div id="fade"></div>');
        jQuery('#fade').css({'filter': 'alpha(opacity=80)'}).fadeIn();
        var popuptopmargin = (jQuery('#' + popupid).height() + 10) / 2;
        var popupleftmargin = (jQuery('#' + popupid).width() + 10) / 2;
        jQuery('#' + popupid).css({
            'margin-top': -popuptopmargin,
            'margin-left': -popupleftmargin
        });
        var paisid = jQuery(this).attr('id');
        jQuery(".idpais").val(paisid);
    });

    jQuery('.popup_cerrar').click(function() {
        jQuery('.contacto').each(function() {
            this.reset();
        });
        jQuery('.formpopup').each(function() {
            this.reset();
        });
        jQuery('.error').fadeOut();
        jQuery('body').css({'overflow-y': 'inherit'});
        jQuery('#fade, #popuprel, .formdivpopup').fadeOut();
        return false;
    });

    jQuery('#fade ').click(function() {
        jQuery('.contacto').each(function() {
            this.reset();
        });
        jQuery('.formpopup').each(function() {
            this.reset();
        });
        jQuery('.error').fadeOut();
        jQuery('body').css({'overflow-y': 'inherit'});
        jQuery('#fade, #popuprel, .formdivpopup').fadeOut();
        return false;
    });

});
