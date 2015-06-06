<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DePuy PTC</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <ul class="mobile_nav visible-xs">
      <li class="toplevel"><a href="#" class="headlinefont">Knee Injections</a></li>
      <li class="mobile_breadcrumb"><a href="#" class="headlinefont">Overview</a></li>
      <li class="mobile_breadcrumb"><a href="#" class="headlinefont">Knee Care for Life</a></li>
      <li><a href="#">Find a Doctor</a></li>
      <li><a href="#">Attend a Knee Seminar Near You</a></li>
      <li><a href="#">Understanding Knee Anatomy</a></li>
      <li><a href="#">For Healthcare Professionals</a></li>
      <li><a href="#">Glossary</a></li>
      <li><a href="#">Contact Us</a></li>
      <li class="share_buttons gray headlinefont">
        Share
        <a href="#" class="sprite sprite-facebook_icon"></a>
        <a href="#" class="sprite sprite-twitter_icon"></a>
        <a href="#" class="sprite sprite-email_icon"></a>
      </li>
    </ul>
    <div id="sitewrap">
      <?php include('inc/header.php'); ?>
      <div class="container">
        <div id="content_header" class="row">
          <div class="col-sm-6">
            <h2 class="headlinefont no_top_margin">Knee Injections</h2>
          </div>
          <div class="col-sm-6 text-right screen-xs-text-left">
            <h2 class="headlinefont no_top_margin"><a href="#" id="find_a_dr_trigger">Find a Doctor <span class="sprite sprite-red_arrow_down_lg"></span></a></h2>
          </div>
        </div>
        <div class="row" id="find_a_dr_panel">
          <div id="close_find_a_dr_panel"></div>
          <div class="col-sm-6">
            <h4 class="inline">Find a doctor near you</h4><input class="form-control input-lg" type="text" placeholder="Enter ZIP Code">
          </div>
          <div class="col-sm-4">
            <div class="checkbox custom_check_wrap">
              <input type="checkbox" class="custom_check" value="true" id="agree_pp" name="agree_pp">
              <label for="agree_pp">
                The information I submit for the search will be governed by the website's <a href="#">privacy policy</a>
              </label>
            </div>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn-clear headlinefont">Find</button>
          </div>
        </div>
      </div>
      <div class="jumbotron">
        <div class="container">
          ...
        </div>
      </div>
      <div class="container">
        <div id="breadcrumbs" class="hidden-xs">
          <a href="#" class="headlinefont">Overview</a>
          <a href="#" class="headlinefont active">Overview</a>
          <a href="#" class="headlinefont">Overview</a>
          <a href="#" class="headlinefont">Knee Care for Life</a>
        </div>
        <div id="content" class="row">
          <div id="main" class="col-sm-8">
            <h1>Knee injection patient stories</h1>
            <h2>Knee injection patient stories</h2>
            <h3>Knee injection patient stories</h3>
            <h4>Knee injection patient stories</h4>
            <h5>Knee injection patient stories</h5>
            <h6>Knee injection patient stories</h6>
            <p>Debbie: I work as a <a href="#">personal assistant/nanny.</a> Basically, I run errands during the day while the kids are at school. I work with four kids. So I'm in and out of the car all day, I'm in and out of stores all day, usually in a hurry, and then after that it's picking up the kids, bringing them home, doing all kinds of activities in the afternoon. Most of it is on my knees.</p>
            <a href="#" class="btn btn-block headlinefont">Attend a Knee Seminar Near you</a>
            <a href="#" class="btn btn-block gray headlinefont">Find a Doctor</a>
            <p>One day my knee started to really bother me. It slowly got worse during the day and by the next day it was pretty swollen. I tried all kinds of things to help calm it down.  </p>
            <p>Dr. Christiano: <a href="#">Debbie came to me about a year</a> or two ago with a complaint of bilateral knee pain, and really it was the left knee that was bothering her, and after working her up appropriately, we came to the diagnosis of moderate knee arthritis. </p>
            <div class="panel panel-default safety_panel">
              <div class="panel-heading">IMPORTANT SAFETY INFORMATION</div>
              <div class="panel-body">
                <p>High Molecular Weight Hyaluronan is indicated in the treatment of pain in osteoarthritis (OA) of the knee in patients who have failed to respond adequately to conservative nonpharmacologic therapy and to simple analgesics, e.g., acetaminophen. In clinical studies, the most commonly reported adverse events for ORTHOVISC were arthralgia, back pain and headache. Other side effects included local injection site-adverse events. In clinical studies, the most commonly reported adverse events for MONOVISC were arthralgia, joint swelling and injection site pain.</p>

                <p>ORTHOVISC and MONOVISC are contraindicated in patients with known hypersensitivity to hyaluronate formulations or known hypersensitivity (allergy) to gram-positive bacterial proteins. ORTHOVISC and MONOVISC should not be injected in patients with infections or skin diseases in the area of the injection site or joint. MONOVISC should not be administered to patients with known bleeding disorders.</p>
              </div>
            </div>
          </div>
          <div id="sidebar" class="col-sm-4">
            <div class="widget find_a_doctor">
              <h4>Find a doctor near you</h4>
              <form>
                <input type="text" class="form-control" placeholder="Enter ZIP Code">
                <div class="checkbox custom_check_wrap">
                  <input type="checkbox" class="custom_check" value="true" id="agree_pp" name="agree_pp">
                  <label for="agree_pp">
                    The information I submit for the search will be governed by the website's <a href="#">privacy policy</a>
                  </label>
                </div>
                <button type="submit" class="headlinefont btn-clear">Find a Doctor</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ul class="list-unstyled list-inline" id="footer_menu">
                <li><a href="#">Careers - Johnson &amp; Johnson</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Legal Notice</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Safe Harbor</a></li>
                <li><a href="#">Ethics Hotline</a></li>
                <li><a href="#">Consultant Identification &amp; Payments</a></li>
                <li><a href="#">California Compliance Notice</a></li>
              </ul>
              <div id="footer_disclaimer">
                <p>ORTHOVISC&reg; and MONOVISC&reg; are registered trademarks of and are manufactured by Anika Therapeutics. DSUS/MTK/0115/0411 02/15</p>
                <p>&copy; DePuy Orthopaedics, Inc. 2002-2015. All Rights Reserved. This site is published by DePuy Orthopaedics, Inc., which is solely responsible for its content.</p>
                <p>It is intended for visitors from the United States only.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script>
      $("#mobile_nav_trigger_wrap").click(function(e){
        e.preventDefault();
        $("#sitewrap").toggleClass('mobile_nav_open');
        $(".header-mobile").toggleClass('mobile_nav_open');
      });
    </script>
  </body>
</html>