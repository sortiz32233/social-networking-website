<html>
<body>

<?php
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("irkut", $con);
$username= $_SESSION['username'];
$reqname= $_GET['reqname'];
mysql_query("DELETE FROM friendreq WHERE reqname='".$reqname."' AND username='".$username."'");
mysql_close($con);
header ("Location: loginsuccessful.php");
?>
<script type="text/javascript">
alert("Friend request rejected!");
</script>
</body>
</html>