<?php
session_start();

include("include/connection.php");

$catname=$_POST['$catname'];
$query = "select * from sub_tutorial where parent_tut='$catname'";
echo $query;die;
$run=mysql_query($query);
print_r($run);die;
while($row=mysql_fetch_array($run))
{?>
<option value="<?php echo $row['s_name'];?>"><?php echo $row['s_name'];?></option>
<?php
}
?>
	
	



