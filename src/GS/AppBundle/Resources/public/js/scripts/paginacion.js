jQuery(document).ready(function() {
    var show_per_page = 10;
    var number_of_items = jQuery('.divpage').size();
    var number_of_pages = Math.ceil(number_of_items / show_per_page);

    jQuery("<input>").attr({
        "type": "hidden",
        "id": "current_page"
    }).appendTo("#contentpage");
    jQuery("<input>").attr({
        "type": "hidden",
        "id": "show_per_page"
    }).appendTo("#contentpage");
    jQuery('#current_page').val(0);
    jQuery('#show_per_page').val(show_per_page);

    var navigation_html = '<a class="previous_link" href="javascript:previous();">Anterior</a>';
    var current_link = 0;
    while (number_of_pages > current_link) {
        navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link + ')" longdesc="' + current_link + '">' + (current_link + 1) + '</a>';
        current_link++;
    }
    navigation_html += '<a class="next_link" href="javascript:next();">Siguiente</a>';
    jQuery('.page_navigation').html(navigation_html);
    jQuery('.page_navigation .page_link:first').addClass('active_page');
    jQuery('#contentpage').children().css('display', 'none');
    jQuery('#contentpage').children().slice(0, show_per_page).css('display', 'block');
});
function previous() {
    new_page = parseInt(jQuery('#current_page').val()) - 1;
    if (jQuery('.active_page').prev('.page_link').length == true) {
        go_to_page(new_page);
    }
}
function next() {
    new_page = parseInt(jQuery('#current_page').val()) + 1;
    if (jQuery('.active_page').next('.page_link').length == true) {
        go_to_page(new_page);
    }
}
function go_to_page(page_num) {
    var show_per_page = parseInt(jQuery('#show_per_page').val());
    start_from = page_num * show_per_page;
    end_on = start_from + show_per_page;
    jQuery('#contentpage').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
    jQuery('.page_link[longdesc=' + page_num + ']').addClass('active_page').siblings('.active_page').removeClass('active_page');
    jQuery('#current_page').val(page_num);
}
