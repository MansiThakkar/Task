<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Admin Panel</h2>
</div>
<div class="divB">
<div class="divD">


<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("clg_fest", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did'];
$name = $_GET['dname'];
$time = $_GET['dtime'];
$date = $_GET['ddate'];
$venue = $_GET['dvenue'];
$query = mysql_query("update event set
Event_name='$name', Event_time='$time', Event_date='$date',
Venue='$venue' where Event_id='$id'", $connection);
}
$query = mysql_query("select * from event", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='Admin panel.php?update={$row['Event_id']}'>{$row['Event_name']}</a></b>";
echo "<br />";
}
?>
</div>

<?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from event where Event_id=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='did' value='{$row1['Event_id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dname' value='{$row1['Event_name']}' />";
echo "<br />";
echo "<label>" . "Time:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dtime' value='{$row1['Event_time']}' />";
echo "<br />";
echo "<label>" . "Date:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='ddate' value='{$row1['Event_date']}' />";
echo "<br />";
echo "<label>" . "Venue:" . "</label>" . "<br />";
echo "<input  class='input' type='text' name='dvenue' value='{$row1['Venue']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>

</body>
</html>