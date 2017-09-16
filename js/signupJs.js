function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

 $( document ).ready(function() {

    if (getParameterByName("success", window.location.href) != null) {
      $('form').hide();
      $('#success').show();
    }

    $('#signup').submit( function(event) {
      var form = document.getElementById("signup");

      if (form.checkValidity() == false || $('.is-invalid').length > 0) {
        event.preventDefault();
      }

      $('form').addClass("was-validated");

      $('input.form-control').each(function () {
        if($(this).is(":valid")) {
          $(this).parent().children('.invalid-feedback').hide();
        }
        if ($(this).hasClass('is-invalid')) {
          $(this).addClass('error');
          $(this).parent().children('.invalid-feedback').show();
        }
      });
    });

    $('#passwordagain').change ( function () {
      if ( $('#passwordagain').val() == '' || $('#password').val() == '') {
        return;
      }

      if ($('#passwordagain').val() != $('#password').val()) {
        $('#passdontmatch').show();
        $('#passwordagain').addClass('is-invalid');
      } else {
        $('#passdontmatch').hide();
        $('#passwordagain').removeClass('is-invalid');
      }

    });

    $('#userid').change( function() {
      
      if ( $('#userid').val() == '') {
        $('#userid').parent().children('.invalid-feedback').text("Please provide a valid user id.");
        return;
      }

      $.ajax({
 
            // The URL for the request
            url: "logic/processSignUp.php",
         
            // The data to send (will be converted to a query string)
            data: {userid:$('#userid').val()},
         
            // Whether this is a POST or GET request
            type: "GET",
         
            // The type of data we expect back
            dataType : 'text'
        })
          // Code to run if the request succeeds (is done);
          // The response is passed to the function
          .done(function( data ) {
             if (data === 'true') {
               $('#userinuse').show();
               $('#userid').addClass('is-invalid');
             } else {
              $('#userid').removeClass('is-invalid');
              $(this).removeClass('error');
              $('#userinuse').hide();
             }
          });
    });
});
