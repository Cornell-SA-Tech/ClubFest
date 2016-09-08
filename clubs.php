<?php 
    //connect to db
    $db_host = "https://clubfest-1865.rhcloud.com";
    $db_user = "adminGgC8Pta"; 
    $db_pass = "lh8blRAZ6NMC";
    $db_name = "clubfest";

    /*$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);*/

    //display companies that satisfy query
    if (mysqli_connect_errno()) {
        die("Connection failed. The following error message was recieved: " . mysqli_connect_error() ." Please try again.");
    }
                
    //$result = $mysqli->query("SELECT * FROM company_info WHERE status=1 ORDER BY RAND()");
    //$result2 = $mysqli->query("SELECT * FROM company_info WHERE closed=1 ORDER BY RAND()");
    //var_dump($result2);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!--Searchbar CSS -->
    <link href="searchbar.css" rel="stylesheet">

    <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <link rel="stylesheet" href="js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

    <link rel="stylesheet" href="js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    
    <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    
    <script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!--Font Awesome for logos-->
    <script src="https://use.fontawesome.com/0e046ac868.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Call to Action -->
   <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <!-- Page Content -->
                  <div class="container">

                      <!-- Page Header -->
                      <div class="row">
                          <div class="col-lg-12">
                              <h1 class="page-header">Clubs and Organizations
                                  <!--<small>Secondary Text</small>-->
                              </h1>
                          </div>
                      </div>
                      <!-- /.row -->

                      <!--search bar-->
                      <div class="row">
                        <div class="container">
                            <div class="row">
                                <div id="custom-search-input">
                                    <div class="input-group col-xs-12">
                                        <input id='query' type="text" class="  search-query form-control" placeholder="Search" />
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>



                      <!-- All Projects-->
                      <div class="row">
                          <div id='message'>
                              <!--fill with ajax results-->
                          </div>
                          <div id='results'>
                              <!--fill with ajax results-->
                          </div>

                              <hr>
                          </div>

                          
                          <div class='clearfix'></div>
                      </div>
                </div>
            </div>
        </div>

    

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);


    //search funtionality
    $('#query').keyup(function() {
        $search = $(this).val()
        $request = $.ajax ({
            url: 'http://clubfest-1865.rhcloud.com/search.php?query=' + $search,
            type: 'get',
            dataType: 'json',
            error: function(error) {
                console.log(error);
            }
        });

        $request.success(function(data) {
            var clubs = data;

            //clear results if they exist
            $('#results').empty();
            $('#message').empty();

            //format the club data into a string
            $strClubs = "";
            $message = "";

            if (clubs != null && clubs.length > 0) {
                $strClubs = "<div class='row' data-row='1'>";
                for (i = 0; i < clubs.length; i++) {

                    //select a random color for clubs without images
                    $input = ["ffffff", "ccccff", "ffccff", "b3ffe6", "ffccb3", "ffe066"];
                    $rand = Math.floor(Math.random() * $input.length);

                    var imgSource = clubs[i].image_url=='' ? "http://dummyimage.com/" + $input[$rand] + "700x400&text=" + clubs[i].name : clubs[i].image_url;
    
            //      //create basic club template
                    $strClubs = $strClubs +
                        "<div class='col-md-3 portfolio-item'><a class='fancybox'  href='#club" + clubs[i].id + "'><img class='img-responsive' src='" + imgSource + "'></a><a class='fancybox' href='#club" + clubs[i].id + "'><h3>" + clubs[i].name+ "</h3></a></div>";

            //      //create fancybox to show on click 
                    $strClubs += "<div style='display:none'><div id='club" + clubs[i].id  + "'><div class='row'><div class='col-sm-12' portfolio-item'><img class='img-responsive' src='" + imgSource + "'><h3>" + clubs[i].name + "</h3><p>" + clubs[i].description + "</p></div><div class='col-sm-12' style='text-align:center;'><div class='col-sm-4'><a href='" + clubs[i].website + "'><i class='fa fa-globe fa-2x' aria-hidden='true'></i></a></div><div class='col-sm-4'><i class='fa fa-envelope fa-2x' aria-hidden='true'></i>  " + clubs[i].listserv_email + "</div><div class='col-sm-4'><a href='" + clubs[i].fb_url + "'><i class='fa fa-facebook-square fa-2x' aria-hidden='true'></a></i></div><div class='col-sm-4'></div></div></div></div></div>";
            
                    //close row 
                    if ((i+1) % 4 == 0) {
                        $strClubs += "</div><div class='row' data-row='" + ((i+1)/ 4) + "'>";
                    }
                }

                $strClubs += "</div><div class='clearfix'></div><!-- /.clearfix -->";
            } else {
              $message = '<p>No results found. Please try again.</p>';
            } 
              
            $('#results').html($strClubs);
            $('#message').html($message);
          
        });
    });

    //trigger keyup also on load
    $(document).ready(function() {
      $('#query').trigger('keyup');
    });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".fancybox").fancybox();
      });
    </script>

</body>

</html>
