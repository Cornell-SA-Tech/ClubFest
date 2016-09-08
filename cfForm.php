<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Bootstrap Core CSS -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

   <!--Font Awesome-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   
   <!--Google Fonts-->
   <link href='https://fonts.googleapis.com/css?family=Oswald|Cinzel|Raleway' rel='stylesheet' type='text/css'>

   <style>
      body {
     	background:#e5e5e5;
      }
      #container {
      	max-width:400px;
      	margin:20px auto;
      }
      h2 {
      	margin:30px;
      	text-align: center;
      }
   </style>
</head>
<body>
<div id="container">
	<h2>ClubFest Fall 2016</h2>
	<form method="POST" action="processForm.php" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="orgName">Organization Name</label>
	    <input type="text" class="form-control" id="orgName" required>
	  </div>
	  <div class="form-group">
	    <label for="orgEmail">Point of Contact (Email Address)</label>
	    <input type="email" class="form-control" id="orgEmail" required>
	  </div>
	  <div class="form-group">
	    <label for="orgDescription">Organization Description</label>
	    <textarea class="form-control" id="orgDescription" rows="3" required></textarea>
	  </div>
	  <div class="form-group">
	    <label for="orgLogo">Organization Logo</label>
	    <input type="file" class="form-control-file" id="orgLogo" required>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>