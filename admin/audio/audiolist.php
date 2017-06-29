
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
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list"></span>List</a> 
            <a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span>Grid
            </a>
        </div>
        <a href="addaudio.php" class="btn btn-warning" style="float: right;">Add Audio</a>
    </div>
    <div id="products" class="row list-group">
    <?php
           $sql = "select * from audio";
           $row = mysqli_query($conn,$sql);
       
       while ($result = mysqli_fetch_array($row)) {?>
        <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="./img/audio.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Title</h4>
                    <p class="group inner list-group-item-text" style="text-align: justify;text-justify: inter-word;">
                        <?php echo $result['a_name']; ?></p>
                    <!-- <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="lead">
                                <?php echo $result['a_size']; ?></p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    <?php
       }
    ?>
    </div>
</div>


          </section>
          <div class="text-right">
          <div class="credits">
          </div>
        </div>
      </section>

<?php include_once('include/footer.php'); ?>