
<html>
<head></head>
<body>
<option>Select Location111</option>
<?php 
//$id=$_POST['cityid'];
  //echo $id;die;
if(isset($_POST['c_id']))
echo $id=$_POST['c_id'];

$sql="select * from sub_tutorial where parent_tut='$id'";
$result=mysql_query($sql) or die(error);

while($row=mysql_fetch_array($result))
{
?>

<option value="<?php echo $row['s_name']?>"><?php echo $row['s_name'];?></option>
<?php 
}
?>

</body>
</html>