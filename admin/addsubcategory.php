





<?php
session_start();
include('include/connection.php');

?>
<?php include("include/header.php");?>
<?php include("include/sidemenu.php");?>



<section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Add SubCategory</li>						  	
					</ol>
				</div>
			</div>
			

			<div class="container">
    <div class="well well-sm">
        <a href="subcategorylist.php" class="btn btn-warning">SubCategory List</a> <a href="content.php" class="btn btn-warning">Content</a>
    </div>
</div>
<?php
if(isset($_POST['submit']))
{
	$sname=$_POST['s_name'];
	$parent_tut=$_POST['name'];
	$query="insert into sub_tutorial(s_name,parent_tut)values('$sname','$parent_tut')";
	$run=mysql_query($query);
}
?>


	<div class="col-md-12">
<div class="well well-sm">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Add category </strong></h3></div>
  
   <form role="form"  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="username"><b>Category</b> </label>
   <select class="form-control" id="sel1" name="name">
    <option>choose your parent category</option>
	<?php
$query="select * from tutorial";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$name=$row['c_name'];
	?>
    <option value="<?php echo $name;?>">
	<?php echo $name;?>
	</option>
    <?php } ?>
  </select>
  
</div>

  
  <div class="form-group">
    <label for="username"><b>SubCategory</b> </label>
    <input type="text" class="form-control" name="s_name" id="s_name" placeholder="Enter name">
  </div>
  
  
 
  
  
 <input type="submit" name="submit" value="submit">
 
</form>
  </div>
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
	  
	  






