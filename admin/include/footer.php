</section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.1.0/jquery.form.min.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <!-- <script src="js/jquery-1.8.3.min.js"></script> -->
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/scripts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });

         $('#list').click(function(event){
          event.preventDefault();
          $('#products .item').addClass('list-group-item');
        });
        $('#grid').click(function(event){
          event.preventDefault();
          $('#products .item').removeClass('list-group-item');
          $('#products .item').addClass('grid-group-item');
        });  

      });
  </script>
  <script>
    
        (function() {

    var bar = $('.bar');
    var percent = $('.percent');
    var status = $('#status');

    $('#form_upload').ajaxForm({
        beforeSend: function() {
            status.empty();
            var percentVal = '0%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        complete: function(xhr) {
            status.html(xhr.responseText);
        }
    });
})();
  </script>

  </body>
</html>