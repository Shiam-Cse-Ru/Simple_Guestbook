<!DOCTYPE html>
<html>
<!DOCTYPE html><html lang="en">  
<head>    
	<meta charset="utf-8">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<title>Create a simple guestbook using ajax</title>    
	<!-- Bootstrap -->    
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->    
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->   
	<!--[if lt IE 9]>      
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]--> 
<style >
	.padding{

		padding-top: 25px;
	}

</style>
 </head>  
 
<body>


<?php 

if (isset($_POST['search_text'])) {
	 $search_text=$_POST['search_text'];
}

	
if (!empty($search_text)) {
	if (mysql_connect('localhost','root','')) {
	if (mysql_select_db('guest_book')) {
		
$query="SELECT * FROM  guestbook WHERE  name LIKE '%$search_text%' OR id LIKE '%$search_text%'";


$query_run=mysql_query($query);


echo "<div class='container'>		

		<div class='row'>	
		<div class='padding'>
  <form method='post' action='search_guest_book.php'>
	        <input type='text' name='search_text'>&nbsp
	        <button class='btn btn-primary'>search</button>
	        </form><br>
	        </div>
			<div class='span12'>					
				<table class='table table-hover table-striped table-bordered  table-condensed'>						
					<thead>							
						<tr>								
						<th>Id</th>								
						<th>Name</th>								
						<th>Email</th>								
						<th>Comment</th>								
						<th>Date</th>							
						</tr>						
					</thead>													
					<tbody>	";

while($row = mysql_fetch_array($query_run)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['comment'] . "</td>";
    echo "<td>" . $row['datetime'] . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
echo "</div>";

	}
}
}

else
{echo "
<div class='container'>		

		<div class='row'>	
		<div class='padding'>
  <form method='post' action='search_guest_book.php'>
	        <input type='text' name='search_text'>&nbsp
	        <button class='btn btn-primary'>search</button>
	        </form><br>
	        </div>
	           <h3 style='color:red'>Please Input something</h3>
			<div class='span12'>					
				<table class='table table-hover table-striped table-bordered  table-condensed'>						
					<thead>							
						<tr>								
						<th>Id</th>								
						<th>Name</th>								
						<th>Email</th>								
						<th>Comment</th>								
						<th>Date</th>							
						</tr>						
					</thead>													
					<tbody>
					</tbody>
					</table>


	        </div>
	        </div>";

	
}



 ?>

</body>
</html>