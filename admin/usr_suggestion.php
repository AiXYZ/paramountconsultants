<?php
session_start();
include('include/connection.php');

?>

 <script>
function active(Id)
{
	if (confirm('Are Yuo sure to Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action=active&id=' + Id;
	}
}
function deactive(Id)
{
	if (confirm('Are Yuo sure to Un Publish this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action=deactive&id=' + Id;
	}
}
function del(Id)
{
	if (confirm('Are Yuo sure to Delete this page.\nContinue anyway?')) {
		window.location.href = 'trans_page.php?action=del&id=' + Id;
	}
}
</script>
   




<?php include("include/header.php");?>
<?php include("include/sidemenu.php");?>



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
			

			<!--<div class="container">
    <div class="well well-sm">
        <a href="addcategory.php" class="btn btn-warning">Add category</a>
    </div>
</div>-->


<div class="col-md-12">
<div class="well well-sm">
 
  	<table class="table" id="myTable">
    <thead class="tblhead">
	<tr>
<th>name</th>
<th>usr_id</th>
<th>email</th>
<th>category name</th>
<th>subcategory name</th>
<th>answer</th>
<th>Suggestion</th>
<th>Status</th>
<th>Action</th>
 
 </tr>
</thead>
<tbody>
<?php
$query="select * from user_suggestion";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
	//$_SESSION['id']=$row['c_id'];
	//echo $_SESSION['id'];die;
	$name=$row['name'];
	$id=$row['usr_id'];
	$email=$row['email'];
	$cat=$row['category'];
	$sub_cat=$row['sub_category'];
	$answer=$row['answer'];
	$suggestion=$row['suggestion'];
	
	?>
	<tr>
	<td><?php echo $name;?></td>
	<td><?php echo $id;?></td>
	<td><?php echo $email;?></td>
	<td><?php echo $cat;?></td>
	<td><?php echo $sub_cat;?></td>
	<td><?php echo $answer;?></td>
	<td><?php echo $suggestion;?></td>
	<td><?php if($row['publish'] == 1){?><a href="javascript:deactive(<?php echo $row['id']; ?>);"><img src="images/tick.png" border="0" /></a><?php } if($row['publish'] == 0){?><a href="javascript:active(<?php echo $row['id']; ?>);"><img src="images/delete_on.gif" border="0" /></a><?php } ?></td>
	<td><a href="st_delete.php?id=<?php echo $row['id'];?>">Delete</a>
	
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
