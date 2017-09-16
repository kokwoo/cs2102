<!DOCTYPE html>
<head>
  <title>UPDATE PostgreSQL data with PHP</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>li {list-style: none;}</style>
</head>
<body>
  <h2>Insert New user to Database</h2>
  <ul>
    <form name="display" action="signup.php" method="POST" >
      <li>User Details:</li>
      <li><input type="text" name="name" value = "name"/></li>
      <li><input type="text" name="userid" value = "userid" /></li>
      <li><input type="text" name="password" value = "password" /></li>
      <li><input type="text" name="address" value = "address" /></li>
      <li><input type="submit" name="submit" /></li>
    </form>
  </ul>
  <?php

  	// Connect to the database. Please change the password in the following line accordingly
    // $db = DbConnection::getInstance();
    $db     = pg_connect("host=localhost port=5432 dbname=group19 user=postgres password=group19");
    $result = pg_query($db, "SELECT * FROM users");		// Query template
    $row    = pg_fetch_assoc($result);		// To store the result row
    // if (isset($_POST['submit'])) {
    //     echo "<li><input type='text' name='bookid_updated' value='$row[userid]' /></li>
    //     <li><input type='text' name='bookid_updated' value='$row[name]' /></li>
    //     <li><input type='text' name='bookid_updated' value='$row[password]' /></li>
    //     <li><input type='text' name='bookid_updated' value='$row[address]' /></li>
    //     <li><input type='text' name='bookid_updated' value='$row[role]' /></li>"";
    //     // <li><input type='text' name='bookid_updated' value='$row[lastlogin]' /></li>";
    // }
    // if (isset($_POST['new'])) {	// Submit the update SQL command
    //     $result = pg_query($db, "UPDATE book SET name = '$_POST[bookid_updated]',
    // name = '$_POST[book_name_updated]',price = '$_POST[price_updated]',
    // date_of_publication = '$_POST[dop_updated]'");
    //     if (!$result) {
    //         echo "Update failed!!";
    //     } else {
    //         echo "Update successful!";
    //     }
    // }
    ?>
</body>
</html>
