function sendAjaxRequestForTransaction(tr, request, iid) {
   $.ajax({
    
      // The URL for the request
      url: "logic/AccountOverviewController.php",
   
      // The data to send (will be converted to a query string)
      data: {request:request, iid:iid},
   
      // Whether this is a POST or GET request
      type: "POST",
   
      // The type of data we expect back
      dataType : 'text'
      })
    // Code to run if the request succeeds (is done);
    // The response is passed to the function
    .done(function( data ) {
       if (data == 'true') {
          tr.fadeOut(1000);
       }
    });
}

function findAllSubTypes() {
    $.ajax({
    
          // The URL for the request
          url: "logic/ItemAddController.php",
       
          // The data to send (will be converted to a query string)
          data: {request:'subtypes', supertype:$( "#item_super" ).val()},
       
          // Whether this is a POST or GET request
          type: "POST",
       
          // The type of data we expect back
          dataType : 'text'
      })
        // Code to run if the request succeeds (is done);
        // The response is passed to the function
        .done(function( data ) {
           if (data != 'false') {
             $( "#item_type" ).html(data);
             $("#item_type").val("");
           }
        });
}

$( document ).ready(function() {

    $('tr.lentoutrow').click (function() {
        $('form#listedView').append( "<input type='hidden' name='itemid' value='" + $(this).data('id') + "'>");
        $('form#listedView').submit();
    });

    $('button.hidden').hide();

    $('button.confirmaction').click( function () {
        $(this).fadeOut(500, function() {
            $(this).parent().children('button.hidden').show();
        });
    });

    $('button.loanout').click (function () {
        var tr = $(this).closest('tr');
        var iid = tr.data('id');

       sendAjaxRequestForTransaction(tr, 'loan', iid);
    });

    $('button.returned').click (function () {
        var tr = $(this).closest('tr');
        var iid = tr.data('id');

       sendAjaxRequestForTransaction(tr, 'return', iid); 
    });

    $('.free').click (function() {
      var div = $(this).closest('div');
      var input = div.children('input').first();

      input.attr('value', '0');
    });

    $( "#searchbyuser" ).autocomplete({
      source: "logic/AccountOverviewController.php",
      minLength: 2
    });


    $('select#item_super').change( function() {
        if ($( "#item_super" ).val() != "") {
            findAllSubTypes();
        } else {
            $("#item_type").val("");
        }
    });

});
