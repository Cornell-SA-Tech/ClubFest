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
	<h2>Update club picture</h2>
	<form method="POST" action="processForm.php" enctype="multipart/form-data">
	  <div class="form-group">
	     <label for="orgName">Organization Name</label>
        <select class="form-control" id="orgIdSel" name="orgId">
          <?
            define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
            define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
            define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
            define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
            define('DB_NAME', getenv('OPENSHIFT_GEAR_NAME'));

            $db_host = constant("DB_HOST"); // Host name 
            $db_port = constant("DB_PORT"); // Host port
            $db_user = constant("DB_USER"); // Mysql username 
            $db_pass = constant("DB_PASS"); // Mysql password 
            $db_name = constant("DB_NAME"); // Database name

            $db = new mysqli($db_host, $db_user, $db_pass);
            if ($db->connect_errno) {
                die('Connect Error (' . $db->connect_errno . ') '
                    . $db->connect_error);
            }
            mysqli_select_db($db, $db_name);
            $db->set_charset("utf8");
            $result = $db->query("SELECT id, name FROM Clubs ORDER BY name ASC");
            while ($row = $result->fetch_assoc()) {
              echo '<option value="'.$row['id'].'">'.$row['name'].'</option>\n';
            }
          ?>
        </select>
     </div>
	  <div class="form-group">
	    <label for="orgLogo">Organization Logo</label>
	    <input type="file" class="form-control-file" id="orgLogo" name="orgLogo" required>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>