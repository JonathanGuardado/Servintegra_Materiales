jQuery(document).ready(function() {
    
    var items = jQuery('ul.menu_we>li');
    items.addClass('fontsize');
    items.click(function() {
        items.removeClass('selected');
        jQuery(this).addClass('selected');
        var index = items.index(jQuery(this));
        jQuery('.conten_nosotros').hide().eq(index).show();
    }).eq(0).click();
    
    jQuery('#desde , .date').datepicker({
        dateFormat: 'dd/mm/yy',
        //showOn: "button",
        //buttonImage: "../../bundles/app/images/ico-calendario.png",
        //buttonImageOnly: true,
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi&eacute;', 'Jue', 'Vie', 'Sab'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S']

    });
    jQuery('#desde').click(function() {
        jQuery('#desde').datepicker("show");
    });

// funciones inicializadas al cargar sitio
    detallefile();
    tablepaginate();
});
var detallefile = function() {
    jQuery(".uploadbtn").change(function() {
        jQuery(".uploadFile").val(jQuery(this).val());
    });
};
var tablepaginate = function() {
    jQuery("table.tablepaginate").each(function() {
        configuraciontablepaginate(this);
    });
};
var configuraciontablepaginate = function(table) {
    jQuery(table).dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bAutoWidth": true,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "sScrollX": "200px",
        "sScrollY": "500px",
        "bScrollCollapse": true,
////        
//        "sPaginationType": "full_numbers",
//        "bPaginate": true,
//        "bLengthChange": true,
//        "bInfo": false,
//        "bAutoWidth": true,
////        "sScrollY": "250px",
//////        "bScrollInfinite": true,
//        "bSort": false,
        "oLanguage": {
            "sSearch": "Buscar:&nbsp;&nbsp;&nbsp;",
            "sZeroRecords": "No se encontraron registros",
            "sInfo": "Mostrando registros del <b>_START_</b> al <b>_END_</b> de un total de <b>_TOTAL_</b>",
            "sInfoEmpty": "Mostrando de 0 a 0 de 0 registros",
            "sInfoFiltered": "(se ha filtrado de un total de _MAX_ registros)",
            "sEmptyTable": "Tabla vac&iacute;a",
          "oPaginate": {
                "sFirst": "<img src='"+prefix+"/bundles/app/images/btn_inicio.png'>",
                "sLast": "<img  src='"+prefix+"/bundles/app/images/btn_final.png'>",
                "sNext": "<img  src='"+prefix+"/bundles/app/images/btn_adelante.png'>",
                "sPrevious": "<img  src='"+prefix+"/bundles/app/images/btn_atras.png'>"
            },
		
        }
    });
};
// Funciones Ajax
var elimdatostabla = function(data, url, url_redirec) {
    var dato = {
        "dataval": data
    };
    jQuery.ajax({
        type: "POST",
        url: url,
        data: dato,
        success: function(resp, error) {
            resp = resp.split(",");
            if (resp[0] == "01") {
                jQuery('.success p').html(resp[1]);
                jQuery('.success').animate({top: "0"}, 400);
                setTimeout(function() {
                    jQuery('.success').animate({top: -$(this).outerHeight()}, 400);
                }, 5000);
            } else
            if (resp[0] == "00") {
                jQuery('.errors p').html(resp[1]);
                jQuery('.errors').animate({top: "0"}, 400);
                setTimeout(function() {
                    jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
                }, 5000);
            }
            setTimeout(function() {
                window.location = url_redirec;
            }, 5001);
        },
        error: function(resp, error) {
            jQuery('.errors p').html(error);
            jQuery('.errors').animate({top: "0"}, 400);
            setTimeout(function() {
                jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
            }, 5000);
        }
    });
};

var popupmodificar = function(iddata, url, popupclass, url_redirec, accionform) {
    var datopost = {
        "datapost": iddata
    };
    jQuery.ajax({
        type: "POST",
        url: url,
        data: datopost,
        success: function(resp, error) {
            resp = resp.split(",");
            if (resp[0] == "01") {
                jQuery(popupclass).html(resp[1]);

                jQuery(popupclass).fadeIn();
                jQuery('body').css({'overflow-y': 'hidden'});
                jQuery('body').append('<div id="fade"></div>');
                jQuery('#fade').css({'filter': 'alpha(opacity=80)'}).fadeIn();
                var popuptopmargin = (jQuery(popupclass).height() + 10) / 2;
                var popupleftmargin = (jQuery(popupclass).width() + 10) / 2;
                jQuery(popupclass).css({
                    'margin-top': -popuptopmargin,
                    'margin-left': -popupleftmargin
                });
                jQuery("form.formpopup").validate({
                    submitHandler: function() {
                        jQuery.ajax({
                            type: "POST",
                            url: accionform,
                            data: jQuery("form.formpopup").serialize(),
                            success: function(resp, quepaso) {
                                resp = resp.split(",");
                                if (resp[0] == "01") {
                                    jQuery('.success p').html(resp[1]);
                                    jQuery('.success').animate({top: "0"}, 400);
                                    setTimeout(function() {
                                        jQuery('.success').animate({top: -$(this).outerHeight()}, 400);
                                    }, 5000);
                                } else
                                if (resp[0] == "00") {
                                    jQuery('.errors p').html(resp[1]);
                                    jQuery('.errors').animate({top: "0"}, 400);
                                    setTimeout(function() {
                                        jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
                                    }, 5000);
                                }
                                setTimeout(function() {
                                    window.location = url_redirec;
                                }, 5001);
                            },
                            error: function(resp, quepaso) {
                                jQuery('.errors p').html(quepaso);
                                jQuery('.errors').animate({top: "0"}, 400);
                                setTimeout(function() {
                                    jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
                                }, 5000);
                            }
                        });
                        return false;
                    }

                });

                jQuery(".restaurardata").click(function() {
                    iddata = jQuery(this).attr("id");
                    accionform = jQuery(this).attr("name") + ".php";
                    popuprestaurar(iddata, url, popupclass, url_redirec, accionform);
                });

            } else
            if (resp[0] == "00") {
                jQuery('.errors p').html(resp[1]);
                jQuery('.errors').animate({top: "0"}, 400);
                setTimeout(function() {
                    jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
                }, 5000);
            }

        },
        error: function(resp, error) {
            jQuery('.errors p').html(error);
            jQuery('.errors').animate({top: "0"}, 400);
            setTimeout(function() {
                jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
            }, 5000);
        }
    });


};

var popuprestaurar = function(iddata, url, popupclass, url_redirec, accionform) {
    var datopost = {
        "datapost": iddata
    };
    jQuery.ajax({
        type: "POST",
        url: url,
        data: datopost,
        success: function(resp, error) {
            resp = resp.split(",");
            if (resp[0] == "01") {
                jQuery(popupclass).html(resp[1]);

                jQuery(popupclass).fadeIn();
                jQuery('body').css({'overflow-y': 'hidden'});
                jQuery('body').append('<div id="fade"></div>');
                jQuery('#fade').css({'filter': 'alpha(opacity=80)'}).fadeIn();
                var popuptopmargin = (jQuery(popupclass).height() + 10) / 2;
                var popupleftmargin = (jQuery(popupclass).width() + 10) / 2;
                jQuery(popupclass).css({
                    'margin-top': -popuptopmargin,
                    'margin-left': -popupleftmargin
                });
                jQuery("form.formpopup").validate({
                    submitHandler: function() {
                        jQuery.ajax({
                            type: "POST",
                            url: accionform,
                            data: jQuery("form.formpopup").serialize(),
                            success: function(resp, quepaso) {
                                resp = resp.split(",");
                                if (resp[0] == "01") {
                                    jQuery('.success p').html(resp[1]);
                                    jQuery('.success').animate({top: "0"}, 400);
                                    setTimeout(function() {
                                        jQuery('.success').animate({top: -$(this).outerHeight()}, 400);
                                    }, 5000);
                                } else
                                if (resp[0] == "00") {
                                    jQuery('.errors p').html(resp[1]);
                                    jQuery('.errors').animate({top: "0"}, 400);
                                    setTimeout(function() {
                                        jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
                                    }, 5000);
                                }
                                setTimeout(function() {
                                    window.location = url_redirec;
                                }, 5001);
                            },
                            error: function(resp, quepaso) {
                                jQuery('.errors p').html(quepaso);
                                jQuery('.errors').animate({top: "0"}, 400);
                                setTimeout(function() {
                                    jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
                                }, 5000);
                            }
                        });
                        return false;
                    }

                });
                jQuery(".restaurardata").click(function() {
                    iddata = jQuery(this).attr("id");
                    accionform = jQuery(this).attr("name") + ".php";
                    popuprestaurar(iddata, url, popupclass, url_redirec, accionform);
                });
            } else
            if (resp[0] == "00") {
                jQuery('.errors p').html(resp[1]);
                jQuery('.errors').animate({top: "0"}, 400);
                setTimeout(function() {
                    jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
                }, 5000);
            }

        },
        error: function(resp, error) {
            jQuery('.errors p').html(error);
            jQuery('.errors').animate({top: "0"}, 400);
            setTimeout(function() {
                jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
            }, 5000);
        }
    });


};

function aplicaroferta(idoferta, idcv) {
    var datosoferta = "";
    datosoferta = {
        "idoferta": idoferta,
        "idcv": idcv
    };
    jQuery.ajax({
        type: "POST",
        url: "aplicaroferta.php",
        data: datosoferta,
        success: function(resp, quepaso) {
            resp = resp.split(",");
            if (resp[0] == "01") {
                jQuery('.success p').html(resp[1]);
                jQuery('.success').animate({top: "0"}, 400);
                setTimeout(function() {
                    jQuery('.success').animate({top: -$(this).outerHeight()}, 400);
                }, 5000);
            } else
            if (resp[0] == "00") {
                jQuery('.info p').html(resp[1]);
                jQuery('.info').animate({top: "0"}, 400);
                setTimeout(function() {
                    jQuery('.info').animate({top: -$(this).outerHeight()}, 400);
                }, 5000);
            }
        },
        error: function(resp, quepaso) {
            jQuery('.errors p').html(quepaso);
            jQuery('.errors').animate({top: "0"}, 400);
            setTimeout(function() {
                jQuery('.errors').animate({top: -$(this).outerHeight()}, 400);
            }, 5000);
        }
    });
}