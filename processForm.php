<?
	function checkUploadedPhoto() {
	    $target_dir = getenv('OPENSHIFT_DATA_DIR');
	    $id = $_POST['orgId'];
	    if(isset($_FILES['orgLogo']) AND $_FILES['orgLogo']['error'] == 0) {
	        // Check size
	        if($_FILES['orgLogo']['size'] <= 1000000) {
	            // Get extension name
	            $fileInfo = pathinfo($_FILES['orgLogo']['name']);
	            $upload_extension = $fileInfo['extension'];
	            $target_file = $target_dir . "logo" . strval($id) . "." . $upload_extension;
	            $allowed_extensions = array('png');

	            // Check if the file has a correct, expected extension
	            if(in_array($upload_extension, $allowed_extensions)) {
	                if(move_uploaded_file($_FILES['orgLogo']['tmp_name'], $target_file)) {
	                	//$src = getLogoSrcForClubId($id);
	                	$image = $target_file;
	                	$imageData = base64_encode(file_get_contents($image));
						$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
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
					    $sql = "UPDATE Clubs SET logo_url = '".$src."', image_url = '".$src."' WHERE id = '".strval($id)."'";
					    
					    if ($db->query($sql) === TRUE) {
					    	$db->close();
					    	return true;
					    }
					    else {
					    	$db->close();
					    	return false;
					    }
	                }
	            }
	            else
	                echo "error3";
	        }
	        else
	            echo "error2";
	    }
	    else
	        echo "error1";

	    echo "<pre>". print_r($_FILES) ."</pre>";
	    echo "Error code: " .$_FILES['orgLogo']['error'] ."<br/>";
	    return false;
	}

	if(checkUploadedPhoto()) {
	    echo "Done successfully!";
	}
	else {
	    echo "Upload error :(";
	}
?>