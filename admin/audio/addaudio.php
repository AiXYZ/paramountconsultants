
<?php include('include/config.php'); ?>
<?php include_once('include/header.php'); ?>
<?php include_once('include/sidemenu.php'); ?>

<section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Audio</li>						  	
					</ol>
				</div>
			</div>

			<div class="container">
    <div class="well well-sm">
        <a href="" class="btn btn-warning">Audio List</a>
    </div>
</div>

<form action="" method="post" id="form_upload" enctype="multipart/form-data">
    <input type="file" name="myfile[]" multiple><br>
    <input type="submit" value="Upload File to Server">
</form>

<div class="progress">
    <div class="bar progress-bar" role="progressbar"></div >
    <div class="percent">0%</div >
</div>

<div id="status"></div>


          </section>
          <div class="text-right">
          <div class="credits">
          </div>
        </div>
      </section>

<?php include_once('include/footer.php'); ?>