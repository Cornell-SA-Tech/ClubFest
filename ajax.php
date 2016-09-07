<?php
    
    //connect to db
    $db_host = "";
    $db_user = "adminGgC8Pta"; 
    $db_pass = "lh8blRAZ6NMC";
    $db_name = "clubfest";

    $mysqli = new mysqli( $db_host, $db_user, $db_pass, $db_name);
    
    if (mysqli_connect_errno()) {
        die("Connection failed. The following error message was recieved: " . mysqli_connect_error() ." Please try again.");
    }


    //trim input
    $input= htmlentities(trim($_POST['query']));
    $message = '';


    //find the clubs that need to be returned based on input
    if (empty($input)) {
        //return all clubs for empty input
        $clubs = $mysqli-> query("SELECT * FROM clubs");
    } else {
        //test for valid characters
        $legalChars = "/^[a-zA-Z0-9 '.-]+$/";
        if (!preg_match($legalChars, $input)) {
            //return error message and no clubs
            $message = "<p>Entries can only include numbers, letters, spaces, and select special characters.</p>";
            $clubs = null;
        } else {
            //return clubs that satisfy the query
            $clubs = $mysqli-> query("SELECT * FROM clubs...");
            
            //if no clubs match, return error
            if ($clubs->num_rows == 0) {
                $message = "<p>No Results Found</p>";
                $clubs = null;
            } 
        }
    }

    //format the club data into a string
    $strClubs = "";
    $i=1;
    if ($clubs != null) {
        $strClubs = "<div class='row' data-row='1'>";
        foreach ($club in $clubs) {
            //select a random color for clubs without images
            $input = array("ffffff", "ccccff", "ffccff", "b3ffe6", "ffccb3", "ffe066");
            $rand = array_rand($input, 1);

            $imgSource = empty($club['image_url']) ? "http://dummyimage.com/" . $colors[$rand] . "700x400&text=" . $club['name'] : $club['image_url'];
            
            //create basic club template
            $strClubs = 
                "<div class='col-md-4 portfolio-item'>
                    <img class='img-responsive' src='" . $imgSource. "'>
                    <h3>" . $club['name'] . "</h3>
                    <p>" . $club['description'] . "</p>
                </div>";

            //close row 
            if ($i % 3==0) {
                $strClubs .= "</div>
                              <div class='row' data-row='" . ($i % 3) . "'>";
            }

            $i++;
        }
        $strClubs = "</div>
                    <div class='clearfix'></div><!-- /.clearfix -->";
    }


    //return string and message
    echo json_encode(array(
      'message' => $message,
      'data' => $strClubs
    ));
?>
