<?php
session_start();
include('include/connection.php');

  $catname = $_POST['catname'];
  
  $sql = "select * from sub_tutorial where parent_tut='$catname'";

  $row  = mysql_query($sql);
//$result = mysql_fetch_array($row);
//print_r($result);die;
  while($result = mysql_fetch_array($row)) {?>

  	<option value="<?php echo $result['s_name'];?>"><?php echo $result['s_name'];?></option>
  <?php
}

?>