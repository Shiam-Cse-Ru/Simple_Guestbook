<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create a simple guestbook using ajax</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/send_data.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <marquee><h3>Welcome To My Guestbook</h3></marquee>
    <div class="container">
		<div class="row">
		<div class="span12">
			<div  class="cover">
				<h3 style="color:green">Creating a simple Ajax based PHP guestbook</h3>			
				<div id="result"></div>
				<div id="guestform"> 
					<p class="contact"><label for="name">Name</label></p> 
					<input id="name" name="name" placeholder="Yourname" type="text"> 
					 
					<p class="contact"><label for="email">Email</label></p> 
					<input id="email" name="email" placeholder="admin@admin.com" type="text"> 
			
					<p class="contact"><label for="comment">Your Message</label></p> 
					<textarea name="comment" id="comment" tabindex="4"></textarea> <br>
					
					<input name="submit" id="submit" tabindex="5" value="Save Guestbook" type="submit" style="width:200px;">
				</div> 
				<a href="viewguestbook.php" target="_blank" class="btn btn-success btn-sm" >View Guestbook</a>
			</div>   
		</div>
		</div>
	</div>
	<br>
	<center><pre style="background-color:cyan">Copyright @ shiam</pre></center>
  </body>
</html>