<?php
session_start();
include('include/connection.php');

?>
<?php include("include/header.php");?>
<?php include("include/sidemenu.php");?>


<script>
function active(Id)
{
	if (confirm('Are Yuo sure to Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action1=active&id=' + Id;
	}
}
function deactive(Id)
{
	if (confirm('Are Yuo sure to Un Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action1=deactive&id=' + Id;
	}
}
function del(Id)
{
	if (confirm('Are Yuo sure to Delete this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action1=del&id=' + Id;
	}
}
</script>

<script>
function active1(Id)
{
	if (confirm('Are Yuo sure to Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action2=active&id=' + Id;
	}
}
function deactive1(Id)
{
	if (confirm('Are Yuo sure to Un Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action2=deactive&id=' + Id;
	}
}
function del(Id)
{
	if (confirm('Are Yuo sure to Delete this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action2=del&id=' + Id;
	}
}
</script>

<script>
function active2(Id)
{
	if (confirm('Are Yuo sure to Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action3=active&id=' + Id;
	}
}
function deactive2(Id)
{
	if (confirm('Are Yuo sure to Un Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action3=deactive&id=' + Id;
	}
}
function del(Id)
{
	if (confirm('Are Yuo sure to Delete this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action3=del&id=' + Id;
	}
}
</script>
   


<section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>category list</li>						  	
					</ol>
				</div>
			</div>
			

			<div class="container">
    <div class="well well-sm">
        <a href="addcategory.php" class="btn btn-warning">Add category</a>
    </div>
</div>


<div class="col-md-12">
<div class="well well-sm">
 
  	<table class="table" id="myTable">
    <thead class="tblhead">
	<tr>
<th>category name</th>
<th>category image</th>
<th>Popular</th>
<th>Latest5</th>
<th>miscellaneous</th>
<th>action</th>
 
 </tr>
</thead>
<tbody>
<?php
$query="select * from tutorial";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
	//$_SESSION['id']=$row['c_id'];
	//echo $_SESSION['id'];die;
	$name=$row['c_name'];
	$image=$row['c_image'];
	?>
	<tr>
	<td><?php echo $name;?></td>
	<td><?php echo $image;?></td>
	
	<td><?php if($row['popular'] == 1){?><a href="javascript:deactive(<?php echo $row['c_id']; ?>);"><img src="images/tick.png" border="0" /></a><?php } if($row['popular'] == 0){?><a href="javascript:active(<?php echo $row['c_id']; ?>);"><img src="images/delete_on.gif" border="0" /></a><?php } ?></td>
	
	<td><?php if($row['latest5'] == 1){?><a href="javascript:deactive1(<?php echo $row['c_id']; ?>);"><img src="images/tick.png" border="0" /></a><?php } if($row['latest5'] == 0){?><a href="javascript:active1(<?php echo $row['c_id']; ?>);"><img src="images/delete_on.gif" border="0" /></a><?php } ?></td>
	
	<td><?php if($row['miscellaneous'] == 1){?><a href="javascript:deactive2(<?php echo $row['c_id']; ?>);"><img src="images/tick.png" border="0" /></a><?php } if($row['miscellaneous'] == 0){?><a href="javascript:active2(<?php echo $row['c_id']; ?>);"><img src="images/delete_on.gif" border="0" /></a><?php } ?></td>
	
	
	<td><a href="c_view.php?id=<?php echo $row['c_id'];?>">View|</a> <a href="c_edit.php?id=<?php echo $row['c_id'];?>">edit|</a> <a href="c_delete.php?id=<?php echo$row['c_id'];?>">Delete</a></td>
	</tr>
<?php }?>
</tbody>
</table>




</div>

</div>

<!--<div class="progress">
    <div class="bar progress-bar" role="progressbar"></div >
    <div class="percent">0%</div >
</div>-->

<div id="status"></div>


          </section>
          <div class="text-right">
          <div class="credits">
          </div>
        </div>
      </section>
