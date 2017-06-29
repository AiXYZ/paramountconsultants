<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
        CKEDITOR.replace( 'editor' );
 </script>

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
									  	
					</ol>
				</div>
			</div>
			

			<div class="container">
    <div class="well well-sm">
        <a href="updateheader.php" class="btn btn-warning">Update Header</a>
    </div>
</div>
<?php
if(isset($_POST['submit']))
{
	
	//echo "htfy";die;
	
	$title=$_POST['title'];
	$parent=$_POST['name'];
	$content=$_POST['editor'];
	$date = date('Y-m-d H:i:s');
	$image=$_FILES['image']['name'];
	$temp=$_FILES['image']['tmp_name'];
	$upload="images/".$_FILES['image']['tmp_name'];
	move_uploaded_file($upload,$temp);
	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
	//echo $slug;die;
	$query="insert into pages(title,parent,content,image,slug,created_date)values('$title','$parent','$content','$image','$slug',$date')";
	//echo $query;die;
	$run=mysql_query($query);
	//echo"<script>window.location='updatecontent.php'</script>";
}
?>


	<div class="col-md-12">
<div class="well well-sm">
    <div class="panel panel-default">
 
  
   <form role="form"  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="username"><b>ROOT</b> </label>
   <select class="form-control"  name="name" id="category">
     <option value="0">ROOT</option>
                        <?php
                          $sql= "select * from pages";
                          $row = mysql_query($sql);
                          while ($result = mysql_fetch_array($row)) {?>

                          <option value="<?php echo $result['id']?>"><?php echo $result['title']?></option>
                            
                         <?php

                          }
                        ?>
                        
  </select>
  
</div>

						<div class="form-group">
								<label for="username"><b>Title</b> </label>
                          <input id="name" class="form-control" name="title"  type="text">
                        </div>

						<textarea class="ckeditor" name="editor"></textarea> 

<br/> 
					             <div class="form-group">
										<label for="username"><b>upload image</b> </label>
										<input id="name" class="image" name="image"  type="file">
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
	  
	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="js/developer.js"></script>











