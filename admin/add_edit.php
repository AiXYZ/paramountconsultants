<?php
session_start();



//echo $id;die;
include('include/connection.php');

?>
<?php include("include/header.php");?>
<?php include("include/sidemenu.php");?>
<?php
if(isset($_POST['submit']))
{
	$id=$_GET['id'];
	$name=$_POST['name'];
	$image=$_FILES['image']['name'];
	$temp=$_FILES['image']['tmp_name'];
	$upload="images/".$_FILES['image']['tmp_name'];
	move_uploaded_file($upload,$temp);
	 $query="update advertisement set url='$name',image='$image' where id='$id'";
	//echo $query;die;
	$run=mysql_query($query) ;
	//header("location:categorylist.php");
	echo"<script>window.location='advertiselist.php'</script>";
}
?>

	
	
	


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
        <a href="advertise.php" class="btn btn-warning">Add Advertise</a>
    </div>
</div>



<div class="col-md-12">
<div class="well well-sm">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Add category </strong></h3></div>
  <div class="panel-body">
   <form role="form"  method="post" enctype="multipart/form-data">
   
   <?php
$id=$_GET['id'];

$query="select * from advertisement where id='$id'";
 //echo $query;die;
 $run=mysql_query($query)or die(mysql_error());
 $row=mysql_fetch_array($run);
 ?>
   
  <div class="form-group">
    <label for="username"><b>Name</b> </label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['url'];?>">
  </div>
  <div class="form-group">
    <label for="uploadimage"><b>image</b> </label>
    <input type="file" class="form-control" name="image" id="image" value="<?php echo $row['image'];?>">
  </div>
  
 
  
  
 <input type="submit" name="submit" value="submit">
</form>
  </div>
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
