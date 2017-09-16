<!DOCTYPE html>
<head>
  <title>UPDATE PostgreSQL data with PHP</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>li {list-style: none;}</style>
</head>
<body>
  <h2>Supply item id and enter</h2>
  <ul>
    <form name="display" action="index.php" method="POST" >
      <li>Item ID:</li>
      <li><input type="text" name="itemid" /></li>
      <li><input type="submit" name="submit" /></li>
    </form>
  </ul>
  <?php
    include 'DbConnection.php';
  	// Connect to the database. Please change the password in the following line accordingly
    $db     = pg_connect("host=localhost port=5432 dbname=group19 user=postgres password=group19");
    // $db = DbConnection::getInstance();
    $result = pg_query($db, "SELECT * FROM item WHERE item_id = '$_POST[itemid]'");		// Query template
    $row    = pg_fetch_assoc($result);		// To store the result row
    if (isset($_POST['submit'])) {
        echo "<ul><form name='update' action='index.php' method='POST' >
    	<li>Item ID:</li>
    	<li><input type='text' name='itemid_updated' value='$row[item_id]' /></li>
    	<li>Type:</li>
    	<li><input type='text' name='item_type_updated' value='$row[type]' /></li>
      <li>Name:</li>
      <li><input type='text' name='item_name_updated' value='$row[name]' /></li>
    	<li>Price (USD):</li>
      <li><input type='text' name='item_price_updated' value='$row[price]' /></li>
      <li>Availability:</li>
      <li><input type='text' name='item_availability_updated' value='$row[availability]' /></li>
    	<li>Date posted:</li>
    	<li><input type='text' name='item_date_posted_updated' value='$row[date_posted]' /></li>
    	<li><input type='submit' name='new' /></li>
    	</form>
    	</ul>";
    }
    if (isset($_POST['new'])) {	// Submit the update SQL command
        $result = pg_query($db, "UPDATE item SET item_id = '$_POST[itemid_updated]', type = '$_POST[item_type_updated]', name = '$_POST[item_name_updated]', price = '$_POST[item_price_updated]', availability = '$_POST[item_availability_updated]', date_posted = '$_POST[item_date_posted_updated]'");
        if (!$result) {
            echo "Update failed!!";
        } else {
            echo "Update successful!";
        }
    }
    ?>
</body>
</html>
