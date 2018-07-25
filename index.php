<!DOCTYPE html>
<html>
<head>
	<title>Search Contact Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="jumbotron">
			    <form action="search_contact.php" method="post" id="search_contact">
				    <div class="row">
				    	<div class="col-xs-12 col-sm-12 col-lg-12">
				       		<input type="text" name="name" placeholder="firstname or lastname" required="required"> 
				       		<input type="submit" name="submit" value="Search">
				       	</div>
				    </div>
		    	</form>
			</div>
		</div>
	</div>
</body>
</html>
