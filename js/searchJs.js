$( document ).ready(function() {
    $('button.view').click (function() {
        $(this).parent().submit();
    })
});
