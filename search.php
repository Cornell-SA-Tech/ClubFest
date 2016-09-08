<?php
    header('Access-Control-Allow-Origin: *');
    // SPECIFICATION:
    // This endpoint searches all the clubs in the database based on the following inputs:
    // GET['id'] -> If specified, the club with that ID is returned.
    // GET['query'] -> If ID is not specified, then the clubs are filtered by 'query' based on names and descriptions only (eventually keywords too)
    // GET['category'] -> If ID is not specified, then the clubs are filtered by 'category'
    // If none given, all clubs are returned in random order
    // OUTPUT: JSON-encoded list of Club objects

    // Connect to OpenShift MySQL database using environment variables:
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
    $clubs_to_return = array();
    if (isset($_GET['id'])) {
        $id= htmlentities(trim($_GET['id']));
        $result = $db->query("SELECT * FROM Clubs WHERE id = ".$id);
    } else {
        $query = htmlentities(trim($_GET['query']));
        $category = htmlentities(trim($_GET['category']));
        $sql = "SELECT * FROM Clubs WHERE name LIKE '%".$query."%' OR description LIKE '%".$query."%'";
        if (isset($_GET['random'])) {
            $random = htmlentities(trim($_GET['random']));
            if ($random == true) {
                $sql = $sql." ORDER BY RAND()";
            } 
        }
        $result = $db->query($sql);
    }
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($clubs_to_return, $row);
        }
    }
    echo json_encode($clubs_to_return);
    $db->close();
?>
