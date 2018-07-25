<?php
require_once 'dbconnect.php';

search_contact();


/**
 * Function to search contact of user
 */
function search_contact()
{
	global $con;
	if (isset($_POST['submit']))
	{
		if (!empty($_POST['name']))
		{
			// sanitize the user input
			$name = strip_tags(trim($_POST['name']));

			// first letter should be capital or lowercase of search query ("^/[A-Za-z]+/^")
		    if (preg_match("/[A-Z  | a-z]+/", $name))
		    {
			    // query the database table `users` by name
			    $sql = "SELECT `id`, `firstname`, `lastname`, `email`, `phone` FROM `users` WHERE firstname LIKE '%" . $name . "%' OR lastname LIKE '%" . $name . "%'";

			    // Execute the query
			    $result = mysqli_query($con, $sql);

			    // count result rows
			    $num_rows = mysqli_num_rows($result);

			    echo display_no_of_records($num_rows);
    
			    if ($num_rows > 0)
			    {
				    $html = '<div class="jumbotron"><table class="table"><thead>';
				    $html .= '<tr><th>Name</th><th>Phone Number</th></tr></thead><tbody>';

				    // loopthrough the result set
				    while ($row = mysqli_fetch_array($result))
				    {
				    	$html .= "<tr><td>";
					    $html .= $row['firstname'] . " " . $row['lastname'] . "</td><td>";
					    $html .= $row['phone'];
					    $html .= "</td></tr>";
				    }
				    $html .= '</tbody></table></div>';
				    echo $html;
				}
				else
				{
					$out = "";
					$out .= '<div class="alert alert-info alert-dismissible">';
					$out .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					$out .= 'No record found for <b>' . $name . '</b></div>';
					echo $out;
				}
				$out = '<p><a href="index.php">Search again</a></p>';
				$out .= '</div></div>';
				echo $out;
		    }
		}
	}
}


/**
 * Print number of records found
 * @param int $number
 * @return string $html
 */
function display_no_of_records($number)
{
	$html = '<div class="container">';
	$html .= '<div class="panel panel-default">';
	$html .= '<div><h5><span class="badge badge-secondary">';
	$html .= $number . ' records found</span></h5></div>';
	return $html;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
</html>