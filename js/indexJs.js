
$( document ).ready(function() {

    $('tr.lentoutrow').click (function() {
        $('form#listedView').append( "<input type='hidden' name='itemid' value='" + $(this).data('id') + "'>");
        $('form#listedView').submit();
    })

});
