function findAllSubTypes() {
    $.ajax({
    
          // The URL for the request
          url: "logic/ItemAddController.php",
       
          // The data to send (will be converted to a query string)
          data: {request:'subtypes', supertype:$( "#itemsupertype" ).val()},
       
          // Whether this is a POST or GET request
          type: "POST",
       
          // The type of data we expect back
          dataType : 'text'
      })
        // Code to run if the request succeeds (is done);
        // The response is passed to the function
        .done(function( data ) {
           if (data != 'false') {
             $( "#itemtype" ).html(data);

             $("div#itemtypegroup").show();
            $("#itemtype").val("");
           }
        });
}

$( document ).ready(function() {

    $('form#additem').submit (function() {
        var form = document.getElementById("additem");

          if (form.checkValidity() == false || $('.is-invalid').length > 0) {
            event.preventDefault();
            $('form').addClass("was-validated");
          } else {
            $('#itemprice').removeAttr('readonly');
          }
    });

    $('button.address').click ( function () {

        var input = $(this).closest('div').children("input");
        $.ajax({
        
              // The URL for the request
              url: "logic/ItemAddController.php",
           
              // The data to send (will be converted to a query string)
              data: {request:'address'},
           
              // Whether this is a POST or GET request
              type: "POST",
           
              // The type of data we expect back
              dataType : 'text'
          })
            // Code to run if the request succeeds (is done);
            // The response is passed to the function
            .done(function( data ) {
               input.val(data); 
            });
    })

    $('select#itemsupertype').change( function() {
        if ($( "#itemsupertype" ).val() != "") {
            findAllSubTypes();
        } else {
            $("div#itemtypegroup").hide();
            $("#itemtype").val("");
        }
    });

    $('button#forfree').click( function() {
        if ($('#forfree').hasClass("btn-secondary")) {
            $('#forfree').removeClass("btn-secondary");
            $('#forfree').addClass("btn-success");

            $('#itemprice').attr('readonly', 'true');
            $('#itemprice').val (0)
        } else {
            $('#forfree').addClass("btn-secondary");
            $('#forfree').removeClass("btn-success");

            $('#itemprice').removeAttr('readonly');
            $('#itemprice').val(null);
        }
    })
});
