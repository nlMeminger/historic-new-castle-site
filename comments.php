<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />  
		<meta name=viewport content= 'width=device-width, initial-scale=1'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel='stylesheet' href='css/main.css'>
		
		<link rel="icon" href="favicon.ico">
		<title>Historic New Castle, Delaware</title>
	</head>
	<body>
		
		<?php include 'nav.php'?>
		<div class='container'>
			<div class='jumbotron'>
				<h1>Tell us what you think!</h1><br>
				<div class='commentEntry'>
					
					<form action="comments.php" method='POST' name='commentForm' onsubmit='return validateForm()'>

							<img src='http://rexkirby.com/kirbyandson/images/name.svg' height='30px' width='30px'><input name="name" type="text"  placeholder="Name" value=''size="30"/><br>

							<img src='http://rexkirby.com/kirbyandson/images/email.svg'height='30px' width='30px'><input name="email" type="text"  placeholder="Email" size="30" value=''/><br>

							<img src='http://rexkirby.com/kirbyandson/images/comment.svg' height='30px' width='30px'><textarea name="text" placeholder="Message" rows="7" cols="31" value=''></textarea><br>

							<input type="submit" value="Submit" id="button-blue" />
					</form>
					<br><br>
				</div>
		<?php
			// Identify the server information
			$servername = "localhost";
			$username = "nel5754"; // better to prompt the user for this
			$password = "nathaniellarrimore"; // prompt the user for this too of course
			$dbname = "nel5754";   // The name of your database on Kelvin
			$id = '';
			$name = strip_tags( trim( $_POST['name'] ) );
			$comment = htmlentities ( trim ( $_POST['text'] ) , ENT_NOQUOTES );
			
			if(empty($name) || empty($comment)){

			}else{
				$conn = new mysqli($servername, $username, $password, $dbname);
				if($conn->connect_error){
					die('Connection failed: ' . $conn->connect_error);
					
				}
				$sqlINSERT = "INSERT INTO Comments (visitorName, visitorComment)
					VALUES ('".$name."', '".$comment."')";
				$result = $conn->query($sqlINSERT);
			}
			
			$conn = new mysqli($servername, $username, $password, $dbname);

			if($conn->connect_error){
					die('Connection failed: ' . $conn->connect_error);
					
			}
			
			$sqlSELECT = "SELECT visitorID, visitorName, visitorComment FROM Comments";
			$result = $conn->query($sqlSELECT);
			
			if($result->num_rows > 0){

				while($row = $result->fetch_assoc()){

					
					echo '<div class="comment">';
					echo '<div class="name">' . $row["visitorName"] . ':</div>';
					echo '<div class="message">' . $row["visitorComment"] . '</div>';
					echo '</div>';
				}
				echo '</table>';
			}else{
				echo '0 results.';
			}
			
			$conn->close();


		?>
			</div>
		</div>
		
		
		
		<!-- Latest compiled and minified JavaScript -->
		<script src='js/main.js'></script>
		<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</body>
</html>
