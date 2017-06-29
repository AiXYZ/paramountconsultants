/* get subcategory*/
$(document).ready(function(){

	$('#category').on('change', function() {
       var catname = this.value;

       $.ajax({
                   url:'getsubcatname.php',
                   data:{catname:catname},
                   type:'post',
                   success:function(data){
                   	
                     $('#sub_category').html(data);
					
                   }

        });
});

  $('#sel1').on('change', function() {
       var catname = this.value;

       
       $.ajax({
                   url:'getsubcatnamechild.php',
                   data:{catname:catname},
                   type:'post',
                   success:function(data){
                    
                     $('#sel2').html(data);
          
                   }

        });
});

  

});


/*end*/