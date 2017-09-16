 $( document ).ready(function() {

    $('#signup').submit( function(event) {
      var form = document.getElementById("signup");

      if (form.checkValidity() == false) {
        event.preventDefault();
      }
      
      $('form').addClass("was-validated");
      $('input.form-control').each(function () {
        if($(this).is(":valid")) {
          $(this).parent().children('.invalid-feedback').hide();
        }
      });
    });
});
