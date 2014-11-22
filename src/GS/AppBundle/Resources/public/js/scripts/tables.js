
jQuery(document).ready(function(jQuery) {

    jQuery('#table_page').dataTable({
        "sPaginationType": "full_numbers",
        "iDisplayLength": "100"
    });
    jQuery('#table_page2').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "aoColumns": [
            {"sWidth": "30%"},
            {"sWidth": "35%"},
            {"sWidth": "35%"},
            {"sWidth": "35%"},
            {"sWidth": "35%"},
            {"sWidth": "105%"}
        ]
    });
    jQuery('#table_configuracion').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "sScrollX": "78%",
        "bScrollCollapse": true,
        "aoColumnDefs": [
            {"sWidth": "100%", "aTargets": [2]}
        ]
    });
    jQuery('#table_configuracion_index').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "sScrollX": "78%",
        "bScrollCollapse": true,
        "aoColumns": [
            {"sWidth": "10%"},
            {"sWidth": "10%"},
            {"sWidth": "101%"}
        ]
    });
    jQuery('#table_reglas').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "sScrollX": "78%",
        "bScrollCollapse": true,
        "aoColumnDefs": [
            {"sWidth": "10%", "aTargets": [2]},
            {"sWidth": "60%", "aTargets": [3]}
        ]
    });
    jQuery('#table_page3').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": true,
        "bSort": false
    });
    jQuery('#table_page4').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "bScrollCollapse": true
    });
    jQuery('#table_page5').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "sScrollX": "40%",
        "bScrollCollapse": true
    });
    // se modifico esta tabla para Consulta de Resoluciones de Contribuyente: Imprenta
    jQuery('#table_page6').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "sScrollX": "100%",
        "bScrollCollapse": true
    });
    jQuery('#table_page006').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "sScrollX": "100%",
        "bScrollCollapse": true
    });
    jQuery('#table_page7').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false
    });
    jQuery('#table_page8').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false
    });
    jQuery('#table_consulta_declaraciones').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false
    }).on('draw', function() {
        configureReportButtons();
    });
    jQuery('#table_page9').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "50%"},
            {"sWidth": "30%"},
            {"sWidth": "20%"},
            {"sWidth": "20%"},
            {"sWidth": "5%"},
            {"sWidth": "100%"}
        ]
    });
    jQuery('#table_page10').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false
    });
    jQuery('#table_page11').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "sScrollX": "40%",
        "bScrollCollapse": true
    });
    jQuery('#table_page12').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": false,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "aoColumns": [
            {"sWidth": "5%"},
            {"sWidth": "20%"},
            {"sWidth": "20%"},
            {"sWidth": "20%"},
            {"sWidth": "16%"},
            {"sWidth": "100%"}
        ]
    });
    jQuery('#table_info').dataTable({
        "bAutoWidth": true,
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": false,
        "bPaginate": false,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "20%"},
            {"sWidth": "20%"},
            {"sWidth": "22%"},
            {"sWidth": "20%"},
            {"sWidth": "100%"}
        ]
    });
    jQuery('#table_info001').dataTable({
        "bAutoWidth": true,
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": false,
        "bPaginate": false,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "25%"},
            {"sWidth": "20%"},
            {"sWidth": "20%"},
            {"sWidth": "17%"},
            {"sWidth": "16%"},
            {"sWidth": "100%"},
            {"sWidth": "100%"}
        ]
    });
    jQuery('#table_info3').dataTable({
        "sPaginationType": "full_numbers",
        "bAutoWidth": false,
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "sScrollX": "40%",
        "bScrollCollapse": true
    });
    jQuery('#table_info4').dataTable({
        "sPaginationType": "full_numbers",
        "bAutoWidth": false,
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": false,
        "bPaginate": true,
        "sScrollX": "40%",
        "bScrollCollapse": true
    });
    jQuery('#table_info6').dataTable({
        "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true
    });
    jQuery('#table_info7').dataTable({
        "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "aaSorting": [[0, 'desc']]
    });
    jQuery('#table_info8').dataTable({
        "sPaginationType": "full_numbers",
        "bAutoWidth": true,
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true
    });
    jQuery('#table_search').dataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": false,
        "bInfo": false,
        "bAutoWidth": false

    });
//    jQuery('#table_config_form1').dataTable({
//        "bPaginate": false,
//        "iDisplayLength": "500",
//        "bLengthChange": false,
//        "bAutoWidth": true,
//        "bInfo": false,
//        "bFilter": true,
//        "bSort": false,
//        "sScrollX": "30%",
//        "bScrollCollapse": true
//    });
    jQuery('#table_config_form2').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": false,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "sScrollX": "30%",
        "bScrollCollapse": true
    });
    jQuery('#table_config_form3').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bScrollCollapse": true,
        "aoColumns": [
            {"sWidth": "15%"},
            {"sWidth": "60%"},
            {"sWidth": "160%"},
            {"sWidth": "85%"}
        ]
    });
    jQuery('#table_config_form4').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": false,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "sScrollX": "30%",
        "bScrollCollapse": true
    });
    jQuery('.table_ruc').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": false,
//        "sScrollX": "80%",
//        "bScrollCollapse": true,
        "aoColumnDefs": [
            {"sWidth": "60%", "aTargets": [1]}
        ]
    });
    jQuery('.table_ruc03').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "sScrollX": "40%",
        "bScrollCollapse": true,
        "aoColumnDefs": [
            {"sWidth": "80%", "aTargets": [3]}
        ]
    });
    jQuery('.table_ruc04').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "aoColumnDefs": [
            {"sWidth": "30%", "aTargets": [1]},
            {"sWidth": "20%", "aTargets": [2]}
        ]
    });
    jQuery('.table_ruc05').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "aoColumnDefs": [
            {"sWidth": "35%", "aTargets": [1]}
        ]
    });
    jQuery('#table_importadorconfig').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true
    });
    jQuery('#table_importadorseccion').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "sScrollX": "40%",
        "bScrollCollapse": true,
        "aoColumnDefs": [
            {"sWidth": "65%", "aTargets": [2]}
        ]
    });
    jQuery('#table_page_cerrarruc').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bAutoWidth": true,
        "bFilter": true,
        "bSort": false,
        "bPaginate": true,
        "sScrollY": "1800",
        "sScrollX": "38%",
        "bScrollCollapse": true,
        "aoColumns": [
            {"sWidth": "1%"},
            {"sWidth": "1%"},
            {"sWidth": "15%"},
            {"sWidth": "50%"},
            {"sWidth": "40%"},
            {"sWidth": "15%"},
            {"sWidth": "60%"},
            {"sWidth": "100%"},
            {"sWidth": "70%"}
        ]
    });
    jQuery('#table_page61').dataTable({
        "bAutoWidth": true,
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": false,
        "bPaginate": false,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "10%"},
            {"sWidth": "10%"},
            {"sWidth": "40%"},
            {"sWidth": "40%"}
        ]
    });
    jQuery('#table_gestion_form').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "10%"},
            {"sWidth": "18%"},
            {"sWidth": "17%"},
            {"sWidth": "20%"},
            {"sWidth": "23%"}
        ]
    });
    jQuery('#tabla_secciones_admin').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bAutoWidth": true,
        "bFilter": true,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "20%"},
            {"sWidth": "60%"},
            {"sWidth": "5%"},
            {"sWidth": "5%"}
        ]
    });
    jQuery('#table_page_contribuyente_imp').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": true,
        "bAutoWidth": true,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "2%"},
            {"sWidth": "34%"},
            {"sWidth": "29%"},
            {"sWidth": "10%"},
            {"sWidth": "10%"},
            {"sWidth": "1%"},
            {"sWidth": "1%"},
            {"sWidth": "1%"}
        ]
    });
    jQuery('#table_page_ter_1').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": true,
        "bInfo": false,
        "bFilter": true,
        "bSort": false,
        "bScrollCollapse": true,
        "aoColumns": [
            {"sWidth": "55%"},
            {"sWidth": "25%"},
            {"sWidth": "20%"}
        ]
    });
    jQuery('#table_wizard_1').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "30%"},
            {"sWidth": "10%"},
            {"sWidth": "5%"},
            {"sWidth": "30%"},
            {"sWidth": "5%"}
        ]
    });
    jQuery('#table_wizard_2').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": true,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "30%"},
            {"sWidth": "30%"},
            {"sWidth": "5%"},
            {"sWidth": "5%"},
            {"sWidth": "5%"}
        ]
    });
    jQuery('#table_declaracion_form').dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bAutoWidth": false,
        "bInfo": false,
        "bFilter": true,
        "bPaginate": true,
        "bSort": false,
        "aoColumns": [
            {"sWidth": "5%"},
            {"sWidth": "48%"},
            {"sWidth": "5%"},
            {"sWidth": "5%"}
        ]
    });
    tablepaginate();
    tableNopaginate();
    tablepaginateScroll();
    tablepaginateScrollNopaginate();
    tableNoElement();
    updateDisplayTables();

    editable_col2();
    table_edit_all();
});
/*------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------------------------------------------*/

var editable_col2 = function() {
    jQuery("table.editable_simple").each(function() {
        conf_col_2(this, 1);
    });
    jQuery("table.editable_paginado").each(function() {
        conf_col_2(this, 2);
    });
    jQuery("table.editable_filtro").each(function() {
        conf_col_2(this, 3);
    });
    jQuery("table.editable_scroll").each(function() {
        conf_col_2(this, 4);
    });
    jQuery("table.editable_paginado_scroll").each(function() {
        conf_col_2(this, 5);
    });
    
    jQuery("table.editable_paginado_sello").each(function() {
        conf_selloHule(this);
    });
    
    
    
};


var table_edit_all = function() {
    jQuery("table.table_editing_all").each(function() {
        config_editing_all(this);
    });
};

var tableNoElement = function() {
    jQuery("table.tableNoElement").each(function() {
        configuraciontableNoElement(this);
    });
};
var tablepaginate = function() {
    jQuery("table.tablapaginacion").each(function() {
        configuraciontablepaginate(this);
    });
};
var tableNopaginate = function() {
    jQuery("table.tablaNopaginate").each(function() {
        configuraciontableNopaginate(this);
    });
};
var updateDisplayTables = function() {
    jQuery("table.displaytable").each(function() {
        updateDisplayTable(this);
    });
};
var tablepaginateScroll = function() {
    jQuery("table.tablepaginateScroll").each(function() {
        configuraciontablePaginateScroll(this);
    });
};
var tablepaginateScrollNopaginate = function() {
    jQuery("table.tablepaginateScrollNopaginate").each(function() {
        configuraciontablePaginateScrollNopaginate(this);
    });
};

/*------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*
 * TIPOS :  
 * 1. Nada
 * 2. Paginado
 * 3. filtro
 * 4. Scroll
 * 5. Paginado con scroll
 */

var conf_selloHule = function ( table ){
    add_editing_last_2_v2( table );  
    jQuery(table).dataTable({
        "sPaginationType": "full_numbers",
        "bPaginate": true,
        "bLengthChange": false,
        "bInfo": false,
        "bAutoWidth": false,
        "bFilter": false,
        "bSort": false,
        "sScrollX": "900px",
        "bScrollCollapse": false,
    });
};


var conf_col_2 = function(table, tipo) {
    console.log("conf_col_2");
    console.log(tipo);
    add_editing_last_2(table);

    switch (tipo) {
        case 1:
            jQuery(table).dataTable({
                "sPaginationType": "full_numbers",
                "bPaginate": false,
                "bLengthChange": false,
                "bInfo": false,
                "bFilter": false,
                "bSort": false,
                "sScrollX": "false",
                "bScrollCollapse": false
            });
            break;
        case 2:
            jQuery(table).dataTable({
                "sPaginationType": "full_numbers",
                "bPaginate": true,
                "bLengthChange": false,
                "bInfo": false,
                "bAutoWidth": false,
                "bFilter": false,
                "bSort": false,
                "sScrollX": "810px",
                "bScrollCollapse": false,
            });
            break;
        case 3:
            jQuery(table).dataTable({
                "sPaginationType": "full_numbers",
                "bPaginate": true,
                "bLengthChange": false,
                "bInfo": false,
                "bAutoWidth": false,
                "bFilter": true,
                "bSort": false,
                "bScrollCollapse": false,
            });
            break;
        case 4:
            jQuery(table).dataTable({
                "scrollCollapse": true,
                "bPaginate": true,
                "bAutoWidth": false,
                "bInfo": false,
                "sScrollX": "1000px",
                "bFilter": false,
            });
            break;
        case 5:
            jQuery(table).dataTable({
                "sPaginationType": "full_numbers",
                "bPaginate": true,
                "bLengthChange": false,
                "bInfo": false,
                "bAutoWidth": false,
                "bFilter": false,
                "bSort": false,
                "sScrollY": "false",
                "sScrollX": "1000px",
                "scrollCollapse": true,
            });
            break;
    }
    //updateDisplayTable(table);
};











var configuraciontablePaginateScroll = function(table) {
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
        "bScrollCollapse": true
    });
    updateDisplayTable(table);
};
var configuraciontablePaginateScrollNopaginate = function(table) {
    jQuery(table).dataTable({
        "sPaginationType": "full_numbers",
        "bLengthChange": true,
        "bInfo": false,
        "bAutoWidth": true,
        "bFilter": false,
        "bSort": false,
        "bPaginate": false,
        "sScrollX": "200px",
        "sScrollY": "500px",
        "bScrollCollapse": true
    });
    updateDisplayTable(table);
};
var configuraciontableNoElement = function(table) {
    jQuery(table).dataTable({
        "sPaginationType": "full_numbers",
        "bPaginate": false,
        "bLengthChange": true,
        "bInfo": false,
        "bFilter": false,
        "bSort": false,
        "sScrollX": "true",
        "bScrollCollapse": true
    });
    updateDisplayTable(table);
};
var configuraciontableNopaginate = function(table) {
    jQuery(table).dataTable({
        "sPaginationType": "full_numbers",
        "bPaginate": false,
        "bLengthChange": true,
        "bInfo": false,
        "bAutoWidth": true,
        "bFilter": false,
//        "sScrollY": "250px",
//        "bScrollInfinite": true,
        "bSort": false
    });
    updateDisplayTable(table);
};
var configuraciontablepaginate = function(table) {
    configure_editable_table_button(table);
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
        "bScrollCollapse": true
    });
    updateDisplayTable(table);
};


var config_editing_all = function(table) {
    editing_all_table(table);
    jQuery(table).dataTable({
        "sPaginationType": "full_numbers",
        "bPaginate": true,
        "bLengthChange": true,
        "bInfo": false,
        "bAutoWidth": true,
//        "sScrollY": "250px",
//        "bScrollInfinite": true,
        "bSort": false
    });
    updateDisplayTable(table);
};



/*------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------------------------------------------*/
var VTR = "";
var URL = "";
var DIVREFRESH = "";
var FNAFTER = "";

var setDatas = function(vtr, url, div, fn) {
    VTR = vtr;
    URL = url;
    DIVREFRESH = div;
    FNAFTER = fn;
}

var getDatas = function() {
    return [VTR, URL, DIVREFRESH, FNAFTER];
}


var add_editing_last_2_v2 = function ( vtable ) {
    vtable = jQuery(vtable);
    var editable_columns = jQuery.makeArray();
    var i = 0;
    var url = vtable.data('url');
    var div = vtable.data('div');
    var v0 = "";
    var fnAfter = vtable.data('func-after');
    var thadd = jQuery("#thShow");
    vtable.find('thead th').each(function(index ,value ) {
        var editor = jQuery(this).data('editor');
        if (!isUndefinedOrNull(editor)) {
            editable_columns[editable_columns.length ] = [(i-4), editor, jQuery(this).attr('id'), jQuery(this).data('editorSource')];
        }
        i++;
        
    });
    vtable.find('tbody tr').each(function() {
        var vtr = jQuery(this);
        vtr.find('td').each(function(index, value) {
            for (i = 0; i < editable_columns.length; i++) {
                var cnt = "";
                var vtd = jQuery(this);
                if (index == 0 && i == 0) {
                    cnt = '<div id="v0" class="L w50 T_1" >' + vtd.html();
                    +'</div>';
                    var check_input = '<input type="checkbox" class="check_editing">';
                    var check_input2 = '<div class="L wAuto"><input type="checkbox" class="check_editing"></div>';
                    if (isUndefinedOrNull(cnt)) {
                        vtd.html(check_input);
                    }
                    else {
                        vtd.html(check_input2 + "" + cnt);
                    }
                    var texto = vtd.find("#v0");
                    var chek_edit = vtd.find('.check_editing');
                    chek_edit.on('change', function(event) {
                        var fila = vtr;
                        event.preventDefault();
                        if (jQuery(this).is(':checked')) {
                            setDatas(vtr, url, div, fnAfter);
                            var tdBtn = fila.find("#tdShow");
                            var voutput = fila.find('td span.editable-output');
                            var vinput = fila.find('td span.editable-input');
                            var einput = fila.find(':input:not([type=button])').first();
                            var tdBtn = fila.find("#tdShow");
                            
                            
                            var primerInput = fila.find("td input");
                            var primer1Input = fila.find("td > img");
                            var img = fila.find("img");
                            tdBtn.show();
                            thadd.show();
                            jQuery("#btnEditingRow").show();
                            if (voutput.is(':visible')) {
                                voutput.hide();
                                vinput.show();
                            }
                            primerInput.eq(1).focus();
                        } else {
                            var tdBtn = fila.find("#tdShow");
                            var voutput = fila.find('td span.editable-output');
                            var vinput = fila.find('td span.editable-input');
                            voutput.show();
                            vinput.hide();
                            tdBtn.hide();
                            thadd.hide();
                        }
                    });
                }
                else {                   
                    if (index === editable_columns[i][0]) {
                        var editor = editable_columns[i][1];
                        var vid = editable_columns[i][2];
                        var datasource = editable_columns[i][3];
                        if (!isUndefinedOrNull(editor) && (editor === true || editor === 'true' || editor === 'input' || editor === 'select')) {
                            var voutput = vtd.find('span.editable-output');
                            if (isUndefinedOrNull(voutput.html())) {
                                var contenidoCelda = vtd.html();
                                var contenido = "&nbsp;";
                                if (isUndefinedOrNull(contenidoCelda)) {   
                                    vtd.html('<span class="editable-output">' + contenido + '</span>');
                                }
                                else {
                                    vtd.html('<span class="editable-output">' + vtd.html() + contenido + '</span>');
                                }
                                voutput = vtd.find('span.editable-output');
                            }
                            voutput.show();
                            var eval = jQuery(voutput).html().trim();
                            var vinput = vtd.find('span.editable-input');
                            if (isUndefinedOrNull(vinput.html())) {
                                var einput;
                                if (isUndefinedOrNull(datasource)) {
                                    einput = '<input type="text" value="' + eval + '"  maxlength="6" size="5" style="width:50px;" />';
                                }
                                else {
                                    einput = '<select class="w100">' + jQuery('#' + datasource).html() + '</select>';
                                }
                                vtd.append('<center><span class="editable-input text-center">' + einput + '</span></center>');
                                vinput = vtd.find('span.editable-input');
                            }
                            var einput = vtd.find(':input:not([type=button])').first();
                            einput.attr('itemid', vtr.data('rowId'));
                            einput.attr('id', vid);
                            einput.attr('name', vid);
                            einput.show();
                            vinput.hide();
                        }
                    }
                }
            }
        });
    });
};


var add_editing_last_2 = function(vtable) {
    vtable = jQuery(vtable);
    var editable_columns = jQuery.makeArray();
    var i = 0;
    var url = vtable.data('url');
    var div = vtable.data('div');
    var v0 = "";
    var fnAfter = vtable.data('func-after');
    vtable.find('thead th').each(function() {
        var editor = jQuery(this).data('editor');
        if (!isUndefinedOrNull(editor)) {
            editable_columns[editable_columns.length ] = [i, editor, jQuery(this).attr('id'), jQuery(this).data('editorSource')];
        }
        i++;
    });
    vtable.find('tbody tr').each(function() {
        var vtr = jQuery(this);

        vtr.find('td').each(function(index, value) {

            for (i = 0; i < editable_columns.length; i++) {
                var cnt = "";
                var vtd = jQuery(this);
                if (index == 0 && i == 0) {

                    cnt = '<div id="v0" class="L w50 T_1" >' + vtd.html();
                    +'</div>';
                    var check_input = '<input type="checkbox" class="check_editing">';
                    var check_input2 = '<div class="L wAuto"><input type="checkbox" class="check_editing"></div>';
                    if (isUndefinedOrNull(cnt)) {
                        vtd.html(check_input);
                    }
                    else {
                        vtd.html(check_input2 + "" + cnt);
                    }
                    var texto = vtd.find("#v0");
                    var chek_edit = vtd.find('.check_editing');
                    chek_edit.on('change', function(event) {
                        var fila = vtr;

                        event.preventDefault();

                        if (jQuery(this).is(':checked')) {
                            setDatas(vtr, url, div, fnAfter);
                            var tdBtn = fila.find("#tdShow");
                            var voutput = fila.find('td span.editable-output');
                            var vinput = fila.find('td span.editable-input');
                            var einput = fila.find(':input:not([type=button])').first();
                            var tdBtn = fila.find("#tdShow");
                            var foo = fila.find("#foo");

                            var primerInput = fila.find("td input");
                            var primer1Input = fila.find("td > img");



                            var img = fila.find("img");
                            tdBtn.show();
                            jQuery("#btnEditingRow").show();
                            if (voutput.is(':visible')) {
                                voutput.hide();
                                vinput.show();
                                foo.focus();
                            }
                            primerInput.eq(1).focus();
                        } else {
                            var tdBtn = fila.find("#tdShow");
                            var voutput = fila.find('td span.editable-output');
                            var vinput = fila.find('td span.editable-input');
                            voutput.show();
                            vinput.hide();
                            tdBtn.hide();
                        }
                    });
                }
                else {

                    /*if (index == 10 ) {
                     vtd.html('<img src="/ssc-web/images/img_plantilla/BtnAgregar.png" width="23" height="23" id="btnEditingRow" onclick="preSending();">');
                     } */

                    if (index === editable_columns[i][0]) {
                        var editor = editable_columns[i][1];
                        var vid = editable_columns[i][2];
                        var datasource = editable_columns[i][3];
                        if (!isUndefinedOrNull(editor) && (editor === true || editor === 'true' || editor === 'input' || editor === 'select')) {
                            var voutput = vtd.find('span.editable-output');
                            if (isUndefinedOrNull(voutput.html())) {
                                var contenidoCelda = vtd.html();
                                if (isUndefinedOrNull(contenidoCelda)) {
                                    var contenido = "&nbsp;";
                                    vtd.html('<span class="editable-output">' + contenido + '</span>');
                                }
                                else {
                                    vtd.html('<span class="editable-output">' + vtd.html() + '</span>');
                                }

                                voutput = vtd.find('span.editable-output');
                            }
                            voutput.show();
                            var eval = jQuery(voutput).html().trim();
                            var vinput = vtd.find('span.editable-input');
                            if (isUndefinedOrNull(vinput.html())) {
                                var einput;
                                if (isUndefinedOrNull(datasource)) {
                                    einput = '<input type="text" value="' + eval + '"  maxlength="6" size="5" style="width:50px;" />';
                                }
                                else {
                                    einput = '<select class="w100">' + jQuery('#' + datasource).html() + '</select>';
                                }
                                vtd.append('<center><span class="editable-input text-center">' + einput + '</span></center>');
                                vinput = vtd.find('span.editable-input');
                            }
                            var einput = vtd.find(':input:not([type=button])').first();
                            einput.attr('itemid', vtr.data('rowId'));
                            einput.attr('id', vid);
                            einput.attr('name', vid);
                            einput.show();
                            vinput.hide();
                        }
                    }
                }
            }
        });
    });
};
var editing_all_table = function(vtable) {
    vtable = jQuery(vtable);
    var idtable = "";
    var url = vtable.data('url');
    var div = vtable.data('div');

    idtable = vtable.attr("id");
    jQuery("<input>")
            .attr({"type": "button"})
            .attr({"value": "Guardar Cambios"})
            .attr({"class": idtable + "_button button small radius primary"})
            .css({"float": "right", "margin": "1% 1% 0% 1%", "width": "auto"})
            .click(function() {
        guardarTodo(vtable, url, div, idtable);
    })
            .insertBefore("#" + idtable);
    if (vtable.hasClass('editable-button')) {
        var editable_columns = jQuery.makeArray();
        var i = 0;
        var indice = 0;
        vtable.find('thead th').each(function() {
            var editor = true;
            editable_columns[editable_columns.length ] = [i, editor, jQuery(this).attr('id'), jQuery(this).data('editorSource')];
            i++;
        });

        vtable.find('tbody tr').each(function() {
            var vtr = jQuery(this);
            vtr.find('td').each(function(index, value) {
                for (i = 0; i < editable_columns.length; i++) {
                    if (index === editable_columns[i][0]) {
                        var vtd = jQuery(this);
                        var editor = editable_columns[i][1];
                        var vid = "fila" + indice + "-" + editable_columns[i][2];
                        var datasource = editable_columns[i][3];
                        if (!isUndefinedOrNull(editor) && (editor === true || editor === 'true' || editor === 'input' || editor === 'select')) {
                            var voutput = vtd.find('span.editable-output');
                            if (isUndefinedOrNull(voutput.html())) {
                                vtd.html('<span class="editable-output">' + vtd.html().trim() + '</span>');
                                voutput = vtd.find('span.editable-output');
                            }
                            voutput.show();
                            var eval = jQuery(voutput).html();

                            var vinput = vtd.find('span.editable-input');
                            if (isUndefinedOrNull(vinput.html())) {
                                var einput;
                                if (isUndefinedOrNull(datasource)) {
                                    einput = '<input type="text" value="' + eval + '" size="' + (isUndefinedOrNull(eval) ? '5' : vtd.size) + '"  />';
                                } else {
                                    einput = '<select class="w100">' + jQuery('#' + datasource).html() + '</select>';
                                }
                                vtd.append('<span class="editable-input">' + einput + '</span>');
                                vinput = vtd.find('span.editable-input');

                            }

                            var einput = vtd.find(':input:not([type=button])').first();
                            einput.attr('itemid', vtr.data('rowId'));
                            einput.attr('id', vid);
                            einput.attr('name', vid);
                            einput.show();

                            einput.on('blur', function() {
                                var vtd = jQuery(this).closest('td');
                                var voutput = vtd.find('span.editable-output');
                                var vinput = vtd.find('span.editable-input');
                                var valinput = vtd.find(':input:not([type=button])').first();
                                var contenido = [];

                                vtr.find('td span.editable-input input:not([type=button])').each(function(index, value) {
                                    contenido[index] = value.value;
                                });
                                vtr.find('td span.editable-output').each(function(index, value) {
                                    value.innerHTML = contenido[index];
                                });

                                voutput.show();
                                vinput.hide();
                            });

                            vinput.hide();
                            vtd.on('click', function(event) {
                                event.preventDefault();
                                var vtd = jQuery(this);
                                var voutput = vtd.find('span.editable-output');
                                var vinput = vtd.find('span.editable-input');
                                var einput = vtd.find(':input:not([type=button])').first();
                                if (voutput.is(':visible')) {
                                    voutput.hide();
                                    vinput.show();
                                    einput.focus();
                                }
                            });

                        }
                    }
                }
            });
            indice++;
        });
    }
};
var configure_editable_table = function(vtable) {
    vtable = jQuery(vtable);
    if (vtable.hasClass('editable-table')) {
        var editable_columns = jQuery.makeArray();
        var i = 0;
        vtable.find('thead th').each(function() {
            var editor = jQuery(this).data('editor');
            if (!isUndefinedOrNull(editor)) {
                editable_columns[editable_columns.length ] = [i, editor, jQuery(this).attr('id'), jQuery(this).data('editorSource')];
            }
            i++;
        });
        vtable.find('tbody tr').each(function() {
            var vtr = jQuery(this);
            vtr.find('td').each(function(index, value) {
                for (i = 0; i < editable_columns.length; i++) {
                    if (index === editable_columns[i][0]) {
                        var vtd = jQuery(this);
                        var editor = editable_columns[i][1];
                        var vid = editable_columns[i][2];
                        var datasource = editable_columns[i][3];
                        if (!isUndefinedOrNull(editor) && (editor === true || editor === 'true' || editor === 'input' || editor === 'select')) {
                            var voutput = vtd.find('span.editable-output');
                            if (isUndefinedOrNull(voutput.html())) {
                                vtd.html('<span class="editable-output">' + vtd.html().trim() + '</span>');
                                voutput = vtd.find('span.editable-output');
                            }
                            voutput.show();
                            var eval = jQuery(voutput).html();

                            var vinput = vtd.find('span.editable-input');
                            if (isUndefinedOrNull(vinput.html())) {
                                var einput;
                                if (isUndefinedOrNull(datasource)) {
                                    einput = '<input type="text" value="' + eval + '" size="' + (isUndefinedOrNull(eval) ? '5' : vtd.size) + '"  />';
                                } else {
                                    einput = '<select class="w100">' + jQuery('#' + datasource).html() + '</select>';
                                }
                                vtd.append('<span class="editable-input">' + einput + '</span>');
                                vinput = vtd.find('span.editable-input');

                            }
                            var einput = vtd.find(':input:not([type=button])').first();
                            einput.attr('itemid', vtr.data('rowId'));
                            einput.attr('id', vid);
                            einput.attr('name', vid);
                            einput.on('change', function() {
                                refresh_editable_cell(vtable, this);
                            });
                            einput.show();
                            einput.on('blur', function() {
                                var vtd = jQuery(this).closest('td');
                                var voutput = vtd.find('span.editable-output');
                                var vinput = vtd.find('span.editable-input');
                                voutput.show();
                                vinput.hide();
                            });
                            vinput.hide();
                            vtd.on('click', function(event) {
                                event.preventDefault();
                                var vtd = jQuery(this);
                                var voutput = vtd.find('span.editable-output');
                                var vinput = vtd.find('span.editable-input');
                                var einput = vtd.find(':input:not([type=button])').first();
                                if (voutput.is(':visible')) {
                                    voutput.hide();
                                    vinput.show();
                                    einput.focus();
                                }
                            });
                        }
                    }
                }
            });
        });
    }
};
var configure_editable_table_button = function(vtable) {
    vtable = jQuery(vtable);
    if (vtable.hasClass('editable-table-button')) {
        var editable_columns = jQuery.makeArray();
        var i = 0;

        vtable.find('thead th').each(function() {
            var editor = jQuery(this).data('editor');
            if (!isUndefinedOrNull(editor)) {
                editable_columns[editable_columns.length ] = [i, editor, jQuery(this).attr('id'), jQuery(this).data('editorSource')];
            }
            i++;
        });

        vtable.find('tbody tr').each(function() {
            var vtr = jQuery(this);
            vtr.find('td').each(function(index, value) {
                for (i = 0; i < editable_columns.length; i++) {
                    if (index === editable_columns[i][0]) {
                        var vtd = jQuery(this);
                        var editor = editable_columns[i][1];
                        var vid = editable_columns[i][2];
                        var datasource = editable_columns[i][3];
                        if (!isUndefinedOrNull(editor) && (editor === true || editor === 'true' || editor === 'input' || editor === 'select')) {
                            var voutput = vtd.find('span.editable-output');
                            if (isUndefinedOrNull(voutput.html())) {
                                vtd.html('<span class="editable-output">' + vtd.html().trim() + '</span>');
                                voutput = vtd.find('span.editable-output');
                            }
                            voutput.show();
                            var eval = jQuery(voutput).html();

                            var vinput = vtd.find('span.editable-input');
                            if (isUndefinedOrNull(vinput.html())) {
                                var einput;
                                if (isUndefinedOrNull(datasource)) {
                                    einput = '<input type="text" value="' + eval + '" size="' + (isUndefinedOrNull(eval) ? '5' : vtd.size) + '"  />';
                                } else {
                                    einput = '<select class="w100">' + jQuery('#' + datasource).html() + '</select>';
                                }
                                vtd.append('<span class="editable-input">' + einput + '</span>');
                                vinput = vtd.find('span.editable-input');

                            }

                            var einput = vtd.find(':input:not([type=button])').first();
                            einput.attr('itemid', vtr.data('rowId'));
                            einput.attr('id', vid);
                            einput.attr('name', vid);
                            einput.on('change', function() {
                                refresh_editable_cell(vtable, this);

                            });
                            einput.show();

                            einput.on('blur', function() {
                                var vtd = jQuery(this).closest('td');
                                var voutput = vtd.find('span.editable-output');
                                var vinput = vtd.find('span.editable-input');
                                voutput.show();
                                vinput.hide();

                            });

                            vinput.hide();
                            vtd.on('click', function(event) {
                                event.preventDefault();
                                var vtd = jQuery(this);
                                var voutput = vtd.find('span.editable-output');
                                var vinput = vtd.find('span.editable-input');
                                var einput = vtd.find(':input:not([type=button])').first();
                                if (voutput.is(':visible')) {
                                    voutput.hide();
                                    vinput.show();
                                    einput.focus();
                                }
                            });

                        }
                    }
                }
            });
        });
    }
};
var refresh_editable_cell = function(vtable, einput) {
    var params = "";
    var paramsadicio = "";
    paramsadicio = addparameter();
    if (!isUndefinedOrNull(jQuery(einput))) {
        var vname = jQuery(einput).attr('id');
        var val = jQuery(einput).val();
        if (!isUndefinedOrNull(val)) {
            params += vname + ":" + escape(val);
            if (!isUndefinedOrNull(paramsadicio)) {
                params += "," + paramsadicio;
            }
        }
    }
    var url = jQuery(vtable).data('urlPrefix') + jQuery(vtable).data('editableRequestmapping');
    params += ", recid:" + jQuery(einput).attr('itemid');
    url = isUndefinedOrNull(url) ? '' : url;
    var afterfunction = jQuery(vtable).data('afterEditfunction');
    afterfunction = isUndefinedOrNull(afterfunction) ? 'afterefreshcell' : afterfunction;
    var refreshobj = jQuery(vtable).data('refreshObj');
    refreshobj = isUndefinedOrNull(refreshobj) ? 'body' : refreshobj;
    LoadObject(null, url, params, refreshobj, afterfunction);
};
var addparameter = function(valuesform) {
    var valores = "";
    valores = valuesform;
    return valores;
};
var updateDisplayTable = function(table) {
    var title = '';
    try {
        jQuery(table).parents().find('.dataTables_scroll').first().find('.dataTables_scrollHead').first().find('.dataTables_scrollHeadInner').first().removeAttr('style').find('.dataTable').first().removeAttr('style');
        jQuery(table).parents().find('.dataTables_scroll').first().find('.dataTables_scrollHead').first().find('.dataTables_scrollHeadInner').first().removeAttr('style').find('.dataTable').first().width('100%');
    } catch (e) {
    }
    jQuery(table).find("tr").each(function() {
        var tr = jQuery(this);
        var td1 = tr.find("td:first");

        if (jQuery.trim(title) === '') {
            title = jQuery.trim(td1.html());
        }
        if (jQuery.trim(td1.html()) === '') {
            tr.attr('title', title);
        } else {
            title = jQuery.trim(td1.html());
        }
    });

    var idtable = "";
    idtable = jQuery(table).attr("id");
    if (jQuery("#" + idtable).hasClass('editable-table-button')) {
        jQuery("." + idtable + "_button").remove();
        jQuery("<button>").attr({
            "class": idtable + "_button button small radius primary"
        }).text("Guardar").css({
            "float": "right",
            "margin": "1% 1% 0% 1%",
            "width": "auto"
        }).insertAfter("#" + idtable);
    }
};
var Loadsimple = function(url, div, func) {
    espere('#' + div);
    jQuery('#' + div).load(url + ' #' + div, function(responseTxt, statusTxt, xhr) {
        if (statusTxt === 'success') {
            var f = func + '(responseTxt, statusTxt, xhr)';
            try {
                eval(f);
                messagesAlert(responseTxt);
            } catch (e) {
            }
        } else {

            var divname = isUndefinedOrNull(div) ? 'waitDiv' : div + 'waitDiv';
            var msg = "Ha ocurrido un error inesperado: ";
            jQuery('#' + divname).hide();
            jQuery('#' + divname).remove();
            uialert('ERROR: ' + msg + xhr.status + " " + xhr.statusText, '¡Error Inesperado!');
        }
    });
};
var LoadsimpleDF = function(obj, url, div, func) {
    espere('#' + div);
    jQuery('#' + div).load(url + ' #' + div, function(responseTxt, statusTxt, xhr) {
        if (statusTxt === 'success') {
            var f = func + '(jQuery(obj), responseTxt, statusTxt, xhr)';
            try {
                eval(f);
                messagesAlert(responseTxt);
            } catch (e) {
            }
        } else {

            var divname = isUndefinedOrNull(div) ? 'waitDiv' : div + 'waitDiv';
            var msg = "Ha ocurrido un error inesperado: ";
            jQuery('#' + divname).hide();
            jQuery('#' + divname).remove();
            uialert('ERROR: ' + msg + xhr.status + " " + xhr.statusText, '¡Error Inesperado!');
        }
    });
};
var Loadtable = function(url, params, div, func) {
    espere('#' + div);
//    console.log(url + ' #' + div);
    jQuery('#' + div).load(url + ' #' + div, params, function(responseTxt, statusTxt, xhr) {
        if (statusTxt === 'success') {
            var f = func + '(responseTxt, statusTxt, xhr)';
            try {
                eval(f);
                messagesAlert(responseTxt);
            } catch (e) {
            }
        } else {

            var divname = isUndefinedOrNull(div) ? 'waitDiv' : div + 'waitDiv';
            var msg = "Ha ocurrido un error inesperado: ";
            jQuery('#' + divname).hide();
            jQuery('#' + divname).remove();
            uialert('ERROR: ' + msg + xhr.status + " " + xhr.statusText, '¡Error Inesperado!');
        }
    });
};
var Loadtable2 = function(url, params, div, func) {
    espere('#' + div);
    jQuery('#' + div).parent().load(url + ' #' + div, params, function(responseTxt, statusTxt, xhr) {
        if (statusTxt === 'success') {
            var f = func + '(responseTxt, statusTxt, xhr)';
            try {
                eval(f);
                messagesAlert(responseTxt);
            } catch (e) {
            }
        } else {

            var divname = isUndefinedOrNull(div) ? 'waitDiv' : div + 'waitDiv';
            var msg = "Ha ocurrido un error inesperado: ";
            jQuery('#' + divname).hide();
            jQuery('#' + divname).remove();
            uialert('ERROR: ' + msg + xhr.status + " " + xhr.statusText, '¡Error Inesperado!');
        }
    });
};
var LoadObject = function(btn, url, params, div, func) {
    espere('#' + div);
    var ismultipart = jQuery(btn).hasClass('multipart');
    if (isUndefinedOrNull(ismultipart) || (ismultipart !== 'true' && ismultipart !== true && ismultipart !== 1 && ismultipart !== '1' && ismultipart !== 'yes' && ismultipart !== 'si' && ismultipart !== 'on')) {
        jQuery('#' + div).load(url + ' #' + div, params, function(responseTxt, statusTxt, xhr) {
            if (statusTxt === 'success') {
                var f = func + '(responseTxt, statusTxt, xhr)';
                try {
                    eval(f);
                    messagesAlert(responseTxt);
                } catch (e) {
                }
            } else {

                var divname = isUndefinedOrNull(div) ? 'waitDiv' : div + 'waitDiv';
                var msg = "Ha ocurrido un error inesperado: ";
                jQuery('#' + divname).hide();
                jQuery('#' + divname).remove();
                uialert('ERROR: ' + msg + xhr.status + " " + xhr.statusText, '¡Error Inesperado!');
            }
        });
    } else {
        var data = new FormData();
        jQuery("input[type=file]").each(function() {
            var files = jQuery(this)[0].files;
            if (!isUndefinedOrNull(files)) {
                var filenameseparator = jQuery(files).length > 1 ? '_' : '';
                jQuery.each(jQuery(this)[0].files, function(i, file) {
                    var filename = jQuery(this).attr('id');
                    filename = (isUndefinedOrNull(filename) ? 'archivo' : filename)
                            + ((!isUndefinedOrNull(filenameseparator) && filenameseparator !== '') ? (filenameseparator + i) : '');
                    data.append(filename, file);
                    console.log('search for(' + filename + ')');
                });
            }
        });

        jQuery.ajax({
            url: url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            sync: false,
            type: 'POST'
        }).always(
                function(responseTxt, statusTxt, xhr) {
                    if (statusTxt === 'success') {
                        var divname = isUndefinedOrNull(div) ? 'waitDiv' : div + 'waitDiv';
                        jQuery('#' + divname).hide();
                        jQuery('#' + div).html(jQuery(responseTxt).find('#' + div).html() + '<div id="#errorMessages">' + jQuery(responseTxt).find('#errorMessages').html() + '</div>');
                        jQuery('#errorMessages').hide();
                        var f = func + '(responseTxt, statusTxt, xhr)';
                        try {
                            eval(f);
                        } catch (e) {
                        }
                    }
                }
        );
    }

};
var afterefresh = function(responseTxt, statusTxt, xhr) {
//    console.log("llego");
    tablepaginate();
//    jQuery("#" + div).show();
};
var refreshtableNoElement = function(responseTxt, statusTxt, xhr) {
    tableNoElement();
};
var afterefreshcell = function(responseTxt, statusTxt, xhr) {
    console.log('Actualizada la tabla.');
    tablepaginate();
};
var afteralert = function(responseTxt, statusTxt, xhr) {
};
function guardarTodo(table, nrul, ndiv, id) {
    console.log("Recopilando y Enviando Todo");
    var url = "";
    var JSONr = {};
    var divrefresh = "";
    var funcafter = "";
    var i = 0;
    var j;

    url = nrul;
    divrefresh = ndiv;

    var table = jQuery('#' + id).DataTable();
    var data = table.jQuery('input, select').serializeArray();
    JSONr["contenido"] = data;

    console.log(url);
    console.log(JSONr);
    console.log(divrefresh);
    console.log(funcafter);

    //Loadtable(url, JSONr, divrefresh, funcafter);
}

function probando() {

    console.log(data);
}


function enviandoFilaCnt(vtr, url, div, fnAfter) {
    var fila = vtr;
    var url2 = url;
    var divrefresh2 = div;
    var funcafter = fnAfter;
    var contenido = [];
    var JSONr = {};
    var vtd = vtr.find('td');
    var lon1 = vtd.length;
    vtd.each(function(index, value) {
        if (!(index == (lon1 - 1) || index == (lon1 - 2) || index == (lon1 - 3))) {
            if (index == 0) {
                var v0 = vtd.find("#v0").html();
                console.log(v0);
                JSONr["v" + index] = v0;
            }
            else {
                if (index == 7) {
                    JSONr["contador"] = value.innerHTML;
                }
                else {
                    JSONr["v" + index] = value.innerHTML;
                }
            }

        }
    });
    vtr.find('td span.editable-input input:not([type=button])').each(function(index, value) {
        contenido[index] = value.value;
        var noSpace = value.value;
        JSONr[value.id] = noSpace.trim();

    });
    vtr.find('td span.editable-output').each(function(index, value) {
        value.innerHTML = contenido[index];
    });
    var voutput = vtr.find('td span.editable-output');
    var vinput = vtr.find('td span.editable-input');
    voutput.show();
    vinput.hide();
    console.log(JSONr);
    Loadtable(url2, JSONr, divrefresh2, funcafter);

}


var preSending = function() {
    var datas = getDatas();
    var tdBtn = datas[0].find("#tdShow");
    enviandoFilaCnt(datas[0], datas[1], datas[2], datas[3]);
    tdBtn.hide();
    
}


/*
 * 
 *                     vtd.on('click', function() {
 enviandoFilaCnt( vtr, url, div, fnAfter )
 });
 * 
 */