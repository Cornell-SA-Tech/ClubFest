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
                              <?php
                                //print the clubs 
                               ?>
                          </div>

                          <!--display on load-->
                          <div class='open'>
                              <div class='row'>
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                              </div>
                              <!-- /.row -->

                              <!-- Projects Row -->
                              <div class="row">
                                  <div class="col-md-4 portfolio-item">
                                      <a class='img' href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                              </div>

                              <!-- Projects Row -->
                              <div class="row">
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                                  <div class="col-md-4 portfolio-item">
                                      <a href="#">
                                          <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                      </a>
                                      <h3>
                                          <a href="#">Project Name</a>
                                      </h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                  </div>
                              </div>
                              <!-- /.row -->

                              <hr>

                              <!-- Pagination -->
                              <div class="row text-center">
                                  <div class="col-lg-12">
                                      <ul class="pagination">
                                          <li>
                                              <a href="#">&laquo;</a>
                                          </li>
                                          <li class="active">
                                              <a href="#">1</a>
                                          </li>
                                          <li>
                                              <a href="#">2</a>
                                          </li>
                                          <li>
                                              <a href="#">3</a>
                                          </li>
                                          <li>
                                              <a href="#">4</a>
                                          </li>
                                          <li>
                                              <a href="#">5</a>
                                          </li>
                                          <li>
                                              <a href="#">&raquo;</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <!-- /.row -->
                          </div>

                          
                          <div class='clearfix'></div>
                      </div>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <!--<section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>-->
                    <!-- /.row (nested) -->
                <!--</div>-->
                <!-- /.col-lg-10 -->
          <!--  </div>-->
            <!-- /.row -->
        <!--</div>-->
        <!-- /.container -->
  <!--  </section>-->

    <!-- Callout -->
<!--    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Vertically Centered Text</h1>
        </div>
    </aside>-->

    <!-- Portfolio -->
<!--    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>-->
                    <!-- /.row (nested) -->
                  <!--  <a href="#" class="btn btn-dark">View More Items</a>
                </div>-->
                <!-- /.col-lg-10 -->
          <!--  </div> -->
            <!-- /.row -->
      <!--  </div> -->
        <!-- /.container -->
  <!--  </section>-->

    <!-- Call to Action -->
  <!--  <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>-->


                </div>
            </div>
        </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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
    $('#query').on('load keyup', (function() {
        $request = $.ajax ({
            url: 'ajax.php',
            type: 'post',
            data: {query: $(this).val()},
            dataType: 'json',
            error: function(error) {
                console.log(error);
            }
        });

        $request.success(function(data) {
            $info = data;
            console.log($info['data']);
            //clear results if they exist
            $('#results').empty();
            $('#message').empty();
            if ($info['message'] != '') {
                $('#open').show();
                $('#message').html($info['message']);
            } else {
                $('#open').hide();
                $('#results').html($info['data']);
                $('#message').html($info['message']);
            }
        });
    });
    </script>

</body>

</html>
