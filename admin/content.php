<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
        <a href="updatecontent.php" class="btn btn-warning">Update Content</a>
    </div>
</div>
<?php
if(isset($_POST['submit']))
{
	
	$parent_tut=$_POST['name'];
	$sname=$_POST['s_name'];
	$cont=$_POST['editor'];
	$query="insert into content(parent_contid,subparent_contid,m_content)values('$parent_tut','$sname','$cont')";
	$run=mysql_query($query);
	echo"<script>window.location='updatecontent.php'</script>";
}
?>


	<div class="col-md-12">
<div class="well well-sm">
    <div class="panel panel-default">
 
  
   <form role="form"  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="username"><b>Category</b> </label>
   <select class="form-control"  name="name" id="category">
    <option>choose your parent category</option>
	<?php
$query="select * from tutorial";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
?>	
    <option value="<?php echo $row['c_name'];?>">
	<?php echo $row['c_name'];?>
	</option>
    <?php } ?>
  </select>
  
</div>

  
  	
   <div class="form-group">
    <label for="username"><b>sub Category</b> </label>
   <select class="form-control" id="sub_category" name="s_name">
    <option value="">Select sub category</option>
	
  
  </select>
  
</div>
  
  
  
  <html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<textarea class="ckeditor" name="editor"></textarea> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
        CKEDITOR.replace( 'editor' );
 </script>
</body>
</html>

  
  
  
  
 
  
  
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
	  
	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="js/developer.js"></script>











