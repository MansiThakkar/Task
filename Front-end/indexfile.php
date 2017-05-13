<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Collage Fest</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/themify-icons.css" rel="stylesheet">
  <link href='css/dosis-font.css' rel='stylesheet' type='text/css'>
 
  </head>
    <body id="page-top" data-spy="scroll" data-target=".side-menu">
    <?php 
$con = mysqli_connect("localhost","root","","clg_fest");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
    echo "";
  }
  ?>


      <div class="container-fluid">

        <!-- Start: Header -->
        <div class="row hero-header" id="home">
          <div class="col-md-7">
            <img src="img/logo.jpg" class="logo">
            <h1>Welcome to Sal </h1>
            <h3>Tech Fest</h3>
            
            <h4>20<sup>th</sup> to 22<sup>nd</sup>  May, 2017</h4>
            
          </div>
          <div class="col-md-5 hidden-xs">
            <img src="img/rocket.png" class="rocket animated bounce">
          </div>
        </div>
        <!-- End: Header -->
      </div>
      <div class="container">
        
      <!-- Start: Schedule -->
      <div class="container">
        <div class="row me-row schedule" id="schedule">
          <h2 class="row-title content-ct">Event Schedule</h2>
          <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#day-1" aria-controls="home" role="tab" data-toggle="tab">Day 01 <small class="hidden-xs">(20<sup>th</sup>, May)</small></a></li>
              <li role="presentation"><a href="#day-2" aria-controls="profile" role="tab" data-toggle="tab">Day 02 <small class="hidden-xs">(21<sup>st</sup>, May)</small></a></li>
              <li role="presentation"><a href="#day-3" aria-controls="messages" role="tab" data-toggle="tab">Day 03 <small class="hidden-xs">(22<sup>nd</sup>, May)</small></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="day-1">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/Programming.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
    
                        <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 1";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                      

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/coding.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 2";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                      

                      </div>
                    </div>
                  </div>

                  
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/debugging.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">

                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 3";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>    
                
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/CAD.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">

                       <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id =4";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>    
    
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div role="tabpanel" class="tab-pane fade" id="day-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/Designing.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 5";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                     

                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/paper presentation.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 6";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
                      else {
                      echo "0 results";
                      }
                      ?>                      
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/Robotics.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 7";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                      

                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div role="tabpanel" class="tab-pane fade" id="day-3">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/marketing.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 9";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                      

                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/Quiz.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 10";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                      

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/Exhibition.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 11";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                      

                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/musicband.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                      <?php
                        $sql = "SELECT Event_name,Venue,Event_time FROM event where Event_id = 12";
                        $result = mysqli_query($con, $sql);


                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) 
                        {
                            echo "" . $row["Event_name"]. "<br>"."" . $row["Event_time"]."<br>"."Venue  : "  . $row["Venue"];
                          }
                      }      
        
    
                      else {
                      echo "0 results";
                      }
                      ?>                      

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Schedule -->

     

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/scrolling-nav.js"></script>
      <script src="js/validator.js"></script>
      <!-- Google Analytics -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');
      </script>
    </body>
    </html>