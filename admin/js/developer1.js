


$(document).ready(function(){
	$('#category').on('change',function(){
		//alert('gg');
		var catname = this.value;
	
		
		$.ajax({
			url:'get_subcategory.php',
			data:{catname:catname},
			type:'post',
			success:function(data){
				
				alert('data');
				$('#sub_category').html(data);


			}
	});
	
	});
});