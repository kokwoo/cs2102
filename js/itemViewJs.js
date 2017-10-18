 function getCurrentBidAmt() {

   $.ajax({
 
            // The URL for the request
            url: "logic/itemViewController.php",
         
            // The data to send (will be converted to a query string)
            data: {type:'currentbid', itemid:$("input#itemid").val()},
         
            // Whether this is a POST or GET request
            type: "POST",
         
            // The type of data we expect back
            dataType : 'text'
        })
       .done(function( data ) {
        if ($("input#currentBidAmount").val() != "For free!") {
          $('#currentBidAmount').val(data);
        }
      });

   $.ajax({
 
            // The URL for the request
            url: "logic/itemViewController.php",
         
            // The data to send (will be converted to a query string)
            data: {type:'refreshallbids', itemid:$("input#itemid").val()},
         
            // Whether this is a POST or GET request
            type: "POST",
         
            // The type of data we expect back
            dataType : 'text'
        })
   .done(function( data ) {
        $('#bidhistory').html(data);
        $("#bidhistory").hide();
        $("#bidhistory").fadeIn( "slow" );
      });
 }


 $( document ).ready(function() {

    if ($("input#currentBidAmount").val() == 0) {
      $("input#currentBidAmount").attr('value', 'For Free!');
      $("input#amount").attr('value', '0');
      $("input#amount").attr("disabled", "true");
    }

    $('#submitbid').click( function() {

        $.ajax({
 
            // The URL for the request
            url: "logic/itemViewController.php",
         
            // The data to send (will be converted to a query string)
            data: $('#bidform').serialize(),
         
            // Whether this is a POST or GET request
            type: "POST",
         
            // The type of data we expect back
            dataType : 'text'
        })
          // Code to run if the request succeeds (is done);
          // The response is passed to the function
          .done(function( data ) {
             if (data === '1') {
              $('#bidresults').removeClass('alert-success');
              $('#bidresults').addClass('alert-danger');
              $('#bidresults').text("You cannot bid on a item you posted yourself!");
              $('#bidresults').show();
             } 

            else if (data === '2') {
              $('#bidresults').removeClass('alert-success');
              $('#bidresults').addClass('alert-danger');
              $('#bidresults').text("Please enter a valid bid amount that is higher than the current bid amount!");
              $('#bidresults').show();
             }

             else if (data === '3') {
              $('#bidresults').removeClass('alert-success');
              $('#bidresults').addClass('alert-danger');
              $('#bidresults').text("You don't really need to outbid yourself!");
              $('#bidresults').show();
             }

             else if (data == 'true') {
              $('#bidresults').addClass('alert-success');
              $('#bidresults').removeClass('alert-danger');
              $('#bidresults').text("Your bid is successful.");
              $('#bidresults').show();

              getCurrentBidAmt();
             }
          });
    });

    $("button.acceptbid").click( function() {
      var confirmPlusChop = confirm("Are you sure you want to accept this bid?");

      if (!confirmPlusChop) {
        return;
      }

      var tr = $(this).closest('tr');

      var uid = tr.data('uid');
      var iid = tr.data('iid');
      var amt = tr.data('amt');
      console.log("hi");

      $.ajax({
 
            // The URL for the request
            url: "logic/itemViewController.php",
         
            // The data to send (will be converted to a query string)
            data: {type:'acceptbid', uid: uid, iid: iid, amt: amt},
         
            // Whether this is a POST or GET request
            type: "POST",
         
            // The type of data we expect back
            dataType : 'text'
        })
      .done(function( data ) {

        if (data == 'true') {

          $.ajax({
          
                   // The URL for the request
                   url: "logic/itemViewController.php",
                
                   // The data to send (will be converted to a query string)
                   data: {type:'refreshallbids', itemid:$("input#itemid").val()},
                
                   // Whether this is a POST or GET request
                   type: "POST",
                
                   // The type of data we expect back
                   dataType : 'text'
               })
          .done(function( data ) {
               $('#bidhistory').html(data);
               $("#bidhistory").hide();
               $("#bidhistory").fadeIn( "slow" );
             });
        }

      });

    });

    $('a#adminButton').click ( function () {
      $('#adminBody').show();
      $('#bidBody').hide();

      $('#bidButton').removeClass("active");
      $('#adminButton').addClass("active");
    });

    $('a#bidButton').click ( function () {
      $('#adminBody').hide();
      $('#bidBody').show();

      $('#bidButton').addClass("active");
      $('#adminButton').removeClass("active");
    });

    $('a#adminDelete').click( function() {

      var confirmPlusChop = confirm("Are you sure you want to delete this item?");

      if (!confirmPlusChop) {
        return;
      }

      $.ajax({
 
            // The URL for the request
            url: "logic/itemViewController.php",
         
            // The data to send (will be converted to a query string)
            data: {type:'delete', itemid:$("input#itemid").val()},
         
            // Whether this is a POST or GET request
            type: "POST",
         
            // The type of data we expect back
            dataType : 'text'
        })

       .done(function( data ) {
        if (data == "true") {
          alert("Item has been deleted.");
          window.location.replace("index.php");
        }
      });

    });

    $("button.cancelbid").click( function() {
      var confirmPlusChop = confirm("Are you sure you want to cancel this bid?");

      if (!confirmPlusChop) {
        return;
      }

      var tr = $(this).closest('tr');

      var uid = tr.data('uid');
      var iid = tr.data('iid');
      var amt = tr.data('amt');
      console.log("hi");

      $.ajax({
 
            // The URL for the request
            url: "logic/itemViewController.php",
         
            // The data to send (will be converted to a query string)
            data: {type:'cancelbid', uid: uid, iid: iid, amt: amt},
         
            // Whether this is a POST or GET request
            type: "POST",
         
            // The type of data we expect back
            dataType : 'text'
        })
      .done(function( data ) {

        if (data == 'true') {
          $.ajax({
          
                   // The URL for the request
                   url: "logic/itemViewController.php",
                
                   // The data to send (will be converted to a query string)
                   data: {type:'refreshallbids', itemid:$("input#itemid").val()},
                
                   // Whether this is a POST or GET request
                   type: "POST",
                
                   // The type of data we expect back
                   dataType : 'text'
               })
          .done(function( data ) {
               $('#bidhistory').html(data);
               $("#bidhistory").hide();
               $("#bidhistory").fadeIn( "slow" );
             });
        }

      });

    });
 });
