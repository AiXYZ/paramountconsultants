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
       
    </div>
</div>


<div class="col-md-12">
<div class="well well-sm">
 
  	<table class="table" id="myTable">
    <thead class="tblhead">
	<tr>
<th>name</th>
<th>Email</th>
<th>action</th>
 
 </tr>
</thead>
<tbody>
<?php
$query="select * from subsribe_user";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{

	$name=$row['name'];
	$email=$row['email'];
	?>
	<tr>
	<td><?php echo $name;?></td>
	<td><?php echo $email;?></td>
	<td><a href="subsc_delete.php?id=<?php echo $row['s_id'];?>">Delete</a></td>
	</tr>
<?php }?>
</tbody>
</table>




</div>

</div>


<div id="status"></div>


          </section>
          <div class="text-right">
          <div class="credits">
          </div>
        </div>
      </section>
