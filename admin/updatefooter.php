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
						<li><i class="fa fa-laptop"></i>category list</li>						  	
					</ol>
				</div>
			</div>
			

			<div class="container">
    <div class="well well-sm">
        <a href="adm_footer.php" class="btn btn-warning">Add Footer</a>
    </div>
</div>


<div class="col-md-12">
<div class="well well-sm">
 
  	<table class="table" id="myTable">
    <thead class="tblhead">
	<tr>
<th>title</th>
<th>action</th>
 
 </tr>
</thead>
<tbody>
<?php
$query="select * from pages";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
	//$_SESSION['id']=$row['c_id'];
	//echo $_SESSION['id'];die;
	$title =$row['title'];
	
	?>
	<tr>
	<td><?php echo $title;?></td>
	
	<td><a href="footer_view.php?id=<?php echo $row['id'];?>">View|</a> <a href="footer_edit.php?id=<?php echo $row['id'];?>">edit|</a> <a href="footer_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
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
