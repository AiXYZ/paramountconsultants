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
						<li><i class="fa fa-laptop"></i>Add banner</li>						  	
					</ol>
				</div>
			</div>
			

			<div class="container">
    <div class="well well-sm">
        <a href="bannerlist.php" class="btn btn-warning">Banner list</a>
    </div>
</div>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$content=$_POST['content'];
	
	$image=$_FILES['image']['name'];
	$temp=$_FILES['image']['tmp_name'];
	$upload="images/".$_FILES['image']['tmp_name'];
	move_uploaded_file($upload,$temp);
	$query="insert into banner(name,content,image)values('$name','$content','$image')";
	//echo $query;die;
	$run=mysql_query($query);
	//echo"<script>window.location='bannerlist.php'</script>";
	
}
?>


<div class="col-md-12">
<div class="well well-sm">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Add category </strong></h3></div>
  <div class="panel-body">
   <form role="form"  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="username"><b>Title</b> </label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter the banner name">
  </div>
  <label for="username"><b>Short Content</b> </label>
  <div class="form-group">
    
    <textarea rows="4" cols="50" name="content" id="name" placeholder="Enter the short content about title"></textarea>
	
  </div>
  <div class="form-group">
    <label for="uploadimage"><b>image</b> </label>
    <input type="file" class="form-control" name="image" id="image" placeholder="uploadimage">
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















</body>