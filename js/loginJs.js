 $( document ).ready(function() {

    $('input#login').click( function() {
        var dataString =  $('form#loginForm').serialize();

        $.ajax({
 
            // The URL for the request
            url: "logic/processlogin.php",
         
            // The data to send (will be converted to a query string)
            data: dataString,
         
            // Whether this is a POST or GET request
            type: "POST",
         
            // The type of data we expect back
            dataType : 'text'
        })
          // Code to run if the request succeeds (is done);
          // The response is passed to the function
          .done(function( data ) {
             if (data === 'true') {
                $(location).attr('href', 'index.php');
             } else {
                $('div#incorrectDetails').show();
             }
          });
  });
});
