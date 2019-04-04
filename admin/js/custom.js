$(document).ready(function () {
    /*
     * Generate canonical name for service title
     */
    $('#services-service_title').keyup(function () {
        $('#services-canonical_name').val(slug($(this).val()));
    });

    /*
     * Generate canonical name for blog title
     */
    $('#blogs-title').keyup(function () {
        $('#blogs-canonical_name').val(slug($(this).val()));
    });

});
var slug = function (str) {
    var $slug = '';
    var trimmed = $.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
            replace(/-+/g, '-').
            replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}


