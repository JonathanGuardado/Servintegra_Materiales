jQuery(document).ready(function() {

    jQuery(".numeros").keypress(function(event) {
        if (event.which) {
            return (event.which > 47 && event.which < 58 || event.which == 8);
        } else if (event.charCode) {
            return (event.charCode > 47 && event.charCode < 58 || event.charCode == 8);
        } else if (window.event.keyCode) {
            return (window.event.keyCode > 47 && window.event.keyCode < 58 || window.event.keyCode == 8);
        }
    });
    jQuery(".alfanumerico").keypress(function(event) {
        if (event.which) {
            if (event.which > 64 && event.which < 91 || event.which == 8 || event.which == 32) {
                return true;
            } else
            if (event.which > 96 && event.which < 123 || event.which == 8 || event.which == 32) {
                return true;
            } else
            if (event.which > 47 && event.which < 58 || event.which == 8 || event.which == 32) {
                return true;
            } else {
                return false;
            }
        }
        if (event.charCode) {
            if (event.charCode > 64 && event.charCode < 91 || event.charCode == 8 || event.charCode == 32) {
                return true;
            } else
            if (event.charCode > 96 && event.charCode < 123 || event.charCode == 8 || event.charCode == 32) {
                return true;
            } else
            if (event.charCode > 47 && event.charCode < 58 || event.charCode == 8 || event.charCode == 32) {
                return true;
            } else {
                return false;
            }
        }
        if (window.event.keyCode) {
            if (window.event.keyCode > 64 && window.event.keyCode < 91 || window.event.keyCode == 8 || window.event.keyCode == 32) {
                return true;
            } else
            if (window.event.keyCode > 96 && window.event.keyCode < 123 || window.event.keyCode == 8 || window.event.keyCode == 32) {
                return true;
            } else
            if (window.event.keyCode > 47 && window.event.keyCode < 58 || window.event.keyCode == 8 || window.event.keyCode == 32) {
                return true;
            } else {
                return false;
            }
        }
    });
    jQuery(".alfa_mayus").keypress(function(event) {
        if (event.which) {
            if (event.which > 64 && event.which < 91 || event.which == 8 || event.which == 32) {
                return true;
            } else
            if (event.which > 47 && event.which < 58 || event.which == 8 || event.which == 32) {
                return true;
            } else {
                return false;
            }
        }
        if (event.charCode) {
            if (event.charCode > 64 && event.charCode < 91 || event.charCode == 8 || event.charCode == 32) {
                return true;
            } else
            if (event.charCode > 47 && event.charCode < 58 || event.charCode == 8 || event.charCode == 32) {
                return true;
            } else {
                return false;
            }
        }
        if (window.event.keyCode) {
            if (window.event.keyCode > 64 && window.event.keyCode < 91 || window.event.keyCode == 8 || window.event.keyCode == 32) {
                return true;
            } else
            if (window.event.keyCode > 47 && window.event.keyCode < 58 || window.event.keyCode == 8 || window.event.keyCode == 32) {
                return true;
            } else {
                return false;
            }
        }
    });
    jQuery(".letras").keypress(function(event) {
        if (event.which) {
            if (event.which > 64 && event.which < 91 || event.which == 8 || event.which == 32) {
                return true;
            } else
            if (event.which > 96 && event.which < 123 || event.which == 8 || event.which == 32) {
                return true;
            } else {
                return false;
            }
        }
        if (event.charCode) {
            if (event.charCode > 64 && event.charCode < 91 || event.charCode == 8 || event.charCode == 32) {
                return true;
            } else
            if (event.charCode > 96 && event.charCode < 123 || event.charCode == 8 || event.charCode == 32) {
                return true;
            } else {
                return false;
            }
        }
        if (window.event.keyCode) {
            if (window.event.keyCode > 64 && window.event.keyCode < 91 || window.event.keyCode == 8 || window.event.keyCode == 32) {
                return true;
            } else
            if (window.event.keyCode > 96 && window.event.keyCode < 123 || window.event.keyCode == 8 || window.event.keyCode == 32) {
                return true;
            } else {
                return false;
            }
        }
    });
    jQuery(".numero_decimal").keypress(function(event) {
        if (event.which) {
            if ((jQuery('.numero_decimal').val().indexOf(".") > -1) || (jQuery('.numero_decimal').val() == "")) {
                return (event.which > 47 && event.which < 58 || event.which == 8);
            } else {
                return (event.which > 47 && event.which < 58 || event.which == 8 || event.which == 46);
            }
        } else if (event.charCode) {
            if ((jQuery('.numero_decimal').val().indexOf(".") > -1) || (jQuery('.numero_decimal').val() == "")) {
                return (event.charCode > 47 && event.charCode < 58 || event.charCode == 8);
            } else {
                return (event.charCode > 47 && event.charCode < 58 || event.charCode == 8 || event.charCode == 46);
            }
        } else if (window.event.keyCode) {
            if ((jQuery('.numero_decimal').val().indexOf(".") > -1) || (jQuery('.numero_decimal').val() == "")) {
                return (window.event.keyCode > 47 && window.event.keyCode < 58 || window.event.keyCode == 8);
            } else {
                return (window.event.keyCode > 47 && window.event.keyCode < 58 || window.event.keyCode == 8 || window.event.keyCode == 46);
            }
        }
    });

    jQuery('.num_dui').mask('00000000-0');
    jQuery('.fecha').mask('00/00/0000');
    jQuery('.num_telefono').mask('0000-0000');


});

