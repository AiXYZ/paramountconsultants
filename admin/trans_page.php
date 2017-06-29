<?php 
include('include/connection.php');
include('http.php');
if (isset($_REQUEST['action'])) 
{ 
	switch ($_REQUEST['action'])
	{
		case 'active':
		$start1=$_REQUEST['start'];
		if(isset($_REQUEST['id']))
		{
			$query1= "update user_suggestion SET publish='1' where id='".$_REQUEST['id']."'";
			$result1=mysql_query($query1) or die ('Could not Update Page; ' . mysql_error());
			$us1=1;
			
		}
			redirect("usr_suggestion.php?start=$start1");
		break;
	
		case 'deactive':
		$start=$_REQUEST['start'];
		if(isset($_REQUEST['id']))
		{
			$query = "UPDATE user_suggestion SET publish='0' WHERE id='" . $_REQUEST['id'] . "'" ;
			$result = mysql_query($query) or die('Could not UPDATE page; ' . mysql_error());
			$us1=1;	     
		}
		redirect("usr_suggestion.php?start=$start1");
			
		}
	
	}
	
	
	if (isset($_REQUEST['action1'])) 
{ 
	switch ($_REQUEST['action1'])
	{
		case 'active':
		$start1=$_REQUEST['id'];
		//echo $start1;die;
		if(isset($_REQUEST['id']))
		{
			$query3= "update tutorial SET  popular='1' where c_id='".$_REQUEST['id']."'";
			//echo $query3;die;
			$result1=mysql_query($query3) or die ('Could not Update Page; ' . mysql_error());
			$us1=1;
			
		}
			redirect("categorylist.php?start=$start1");
		break;
	
		case 'deactive':
		$start=$_REQUEST['id'];
		if(isset($_REQUEST['id']))
		{
			$query4 = "UPDATE tutorial SET  popular='0' WHERE c_id='" . $_REQUEST['id'] . "'" ;
			$result = mysql_query($query4) or die('Could not UPDATE page; ' . mysql_error());
			$us1=1;	     
		}
		redirect("categorylist.php?start=$start1");
			
		}
		
		
		
		
		
	
	
	}
	
	
	
	if (isset($_REQUEST['action2'])) 
{
	//echo 'uuuu';
	switch ($_REQUEST['action2'])
	{
		case 'active':
		$start1=$_REQUEST['id'];
		//echo $start1;die;
		if(isset($_REQUEST['id']))
		{
			$query5= "update tutorial SET latest5='1' where c_id='".$_REQUEST['id']."'";
			$result1=mysql_query($query5) or die ('Could not Update Page; ' . mysql_error());
			$us1=1;
			
		}
			redirect("categorylist.php?start=$start1");
		break;
	
		case 'deactive':
		$start=$_REQUEST['id'];
		if(isset($_REQUEST['id']))
		{
			$query6 = "UPDATE tutorial SET latest5='0' WHERE c_id='" . $_REQUEST['id'] . "'" ;
			$result = mysql_query($query6) or die('Could not UPDATE page; ' . mysql_error());
			$us1=1;	     
		}
		redirect("categorylist.php?start=$start1");
			
		}
		
		
		
		
		
	
	
	}
	
	
	
		
	if (isset($_REQUEST['action3'])) 
{ 
	switch ($_REQUEST['action3'])
	{
		case 'active':
		$start1=$_REQUEST['id'];
		if(isset($_REQUEST['id']))
		{
			$query7= "update tutorial SET miscellaneous='1' where c_id='".$_REQUEST['id']."'";
			$result1=mysql_query($query7) or die ('Could not Update Page; ' . mysql_error());
			$us1=1;
			
		}
			redirect("categorylist.php?start=$start1");
		break;
	
		case 'deactive':
		$start=$_REQUEST['id'];
		if(isset($_REQUEST['id']))
		{
			$query8 = "UPDATE tutorial SET miscellaneous='0' WHERE c_id='" . $_REQUEST['id'] . "'" ;
			$result = mysql_query($query8) or die('Could not UPDATE page; ' . mysql_error());
			$us1=1;	     
		}
		redirect("categorylist.php?start=$start1");
			
		}
		
		
		
		
		
	
	
	}
	
	?>