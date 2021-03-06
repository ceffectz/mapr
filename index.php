<?php
       $email = $_POST['email'];
       $to = 'info@mapr.com';
       $subject = 'You have New Email Submission for Mapr Beta';

       $body = "Mapr Beta Request E-Mail: $email\n";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
        echo "<script type='text/javascript'>alert('Message Sent Successfully!')</script>";
           } else {
        echo "<script type='text/javascript'>alert('Something went wrong, Please try again. Thank you!')</script>";
           }
       }
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mapr - Customer journey mapping and service design made easy</title>

    <link rel="icon" type="image/png" sizes="16x16" href="img/m.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Custom animation styles for this template -->

   <!-- <link href="assets/css/main.css" rel="stylesheet">
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>-->
    <link href="css/hover.css" rel="stylesheet" media="all">
    <link href="css/animate.css" rel="stylesheet" media="all">


    <!--<link rel="stylesheet" type="text/css" href="css/ml/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/ml/component.css" />-->
    <script src="js/ml/modernizr.custom.js"></script>





    <!--push-->
   <link rel="stylesheet" href="css/style.css" />
    <!--push-->


</head>



<body id="page-top" data-spy="scroll" data-target=".navbar-custom">



    <div id="">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" id="cus-nav">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="http://www.mapr.me/" target="_self" class="navbar-brand" href="#page-top">
                        <img src="img/logo.png" class="logo img-responsive " alt="Circular Image">

                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">JOIN OUR BETA </a>
                        </li>





                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <section class="intro">
            <div class="intro-body">
                <div class="container">

                    <div class="row">

                        <br>
                        <br>

                    </div>


                    <p class="intro-textcus">
                        <img src="img/logo-2.png" alt="">
                    </p>
                    <p class="intro-text1" style="font-size: 30px; font-weight: 300;">Customer journey mapping and service design made easy.</p>
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-lg-12 cus-lg-padding">

                            <div class="col-xs-10 centered cust-col10-padding">
                                <div class="post">

                                    <img class="intro-macbook img-responsive cus-img-res-padding cus-macbook" src="img/macbook.png" align="">
                                </div>

                            </div>
                            <div class="section03-txt-left">
                                <div class="col-xs-2 intro-iphone cust-col10-padding">
                                    <div class="1post">

                                        <img class="img-responsive cus-img-res-padding cus-iphone cust-iphone-margin" src="img/iphone.png" align="">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--container-->
                    </div>




                    <!-- row -->



        </section>


        <div id="about">


            <div class="Section02" id="">
                <section id="" class="container content-section text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="cust-nw-tittle1">Mapr makes it possible to map<br>
the Customer Journey. Easy and fast.</h2>
                            <div class="section02-cus-p">
                                <p class="cust-nw-para1">

                                    By visualising the Customer Journey and using Service Design, you can tell the story of the customer
                                    <br>with touchpoints and emotions. It helps to understand the customer better.</p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>








            <div class="section03">
                <section id="" class="container content-section text-center">

                    <div>

                        <div class="row">

                            <form action="index.php" name="mail" id="usrform" method="post">
                                <input type="email" name="email" placeholder="Enter your email address" class="cust-email-txt-feild" required>
                                <input id="submit" name="submit" type="submit" value="JOIN OUR BETA" class="cust-email-submit-btn">
                            </form>

                        </div>

                    </div>
                </section>
            </div>
        </div>



        <div class="section04">
            <section id="about" class="container content-section text-center">

                <div>

                    <div class="row">
                        <div class="col-lg-12">
                            <p class="cust-nw-tittle1">FEATURES</p>
                            <p class="cust-nw-para1" style="margin-bottom: 50px !important;">
                                From a thousand features which are available in Mapr, here are the most important and best ones,
                                <br>especially selected for you.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-1" style="width: 12.5% !important;"></div>
                        <div class="col-lg-3">
                            <div class="Section07-cus-img">
                                <div class="wow bounceInUp">
                                    <div class="cust-grid1-wrap">
                                        <p style="
    text-align: center;
">
                                            <img class="float text-center" src="img/icon/1.png" style="
    margin-bottom: 10px;
">
                                            <br><span class="section07-cus-color cust-nw-tittle2">Emotion curve</span>
                                            <br>
                                        </p>
                                        <p class="cust-nw-para2">
                                            Understand your customer during the Customer Journey, with an emotion curve, the emotions per touchpoint. Create a flow of emotions during the Customer Journey and show what a customer is experiencing during the experience.
                                        </p>
                                    </div>

                                </div>
                                <div class="wow bounceInUp">
                                    <div class="cust-grid1-wrap">
                                        <p style="
    text-align: center;
">
                                            <img class="float text-center" src="img/icon/2.png" style="
    margin-bottom: 10px;
">
                                            <br><span class="section07-cus-color cust-nw-tittle2">Action plan</span>
                                            <br>
                                        </p>
                                        <p class="cust-nw-para2">Take action based on the findings in the Customer Journey Map with an action list with activities, deadlines and owners. Always keep track. The most important thing is to improve your organization and processes, because the customer deserves it.
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3">

                            <div class="wow bounceInUp">
                                <div class="cust-grid1-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="float text-center" src="img/icon/3.png" style="
    margin-bottom: 10px;
">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Share</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para2">Present and send your Customer Journey Map by clicking ‘export’. In pdf, presentation mode or by e-mail, send your Mapr map to a colleague, friend or yourself.
                                    </p>
                                </div>
                            </div>
                            <div class="wow bounceInUp">
                                <div class="cust-grid1-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="float text-center" src="img/icon/4.png" style="
    margin-bottom: 10px;
">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Processes</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para2">Create a link between the external customer processes and the internal business processes. Find the right process for improving Customer Experience.
                                    </p>


                                </div>
                            </div>


                        </div>
                        <div class="col-lg-3">
                            <div class="wow bounceInUp">
                                <div class="cust-grid1-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="float text-center" src="img/icon/5.png" style="
    margin-bottom: 10px;
">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Touchpoint overview</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para2">For the Customer Experience experts there is a touchpoint overview, with all the touchpoints created. You can see in which episode they belong, which parameters it has and how the performance is.
                                    </p>

                                </div>
                            </div>
                            <div class="wow bounceInUp">
                                <div class="cust-grid1-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="float text-center" src="img/icon/6.png" style="
    margin-bottom: 10px;
">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Wizard</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para2">
                                        In Mapr you can build a Customer Journey Map in 1 minute only. Just follow the 4 steps wizard and enjoy a full Customer Journey Map to present or share. It’s easy and fast.
                                    </p>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-1" style="width: 12.5% !important;"></div>
                    </div>


                </div>
            </section>
        </div>


        <div class="section05">
            <section id="about" class="container content-section text-center">

                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="cust-nw-tittle1">Who uses mapr?</p>
                            <p class="cust-nw-para1" style="margin-bottom: 50px !important;">

                                Mapr can be used for different purposes and by different people. Meet our main group of users.</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-5">

                            <div class="wow bounceInUp">
                                <div class="cust-grid2-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="pulse-grow img-responsive cust-img-center1" src="img/icon/lg-icon-1.png">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Consultants</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para3">
                                        Using Mapr in your projects to visualise the emotions of the customer.</p>
                                </div>
                            </div>

                            <div class="wow bounceInUp">
                                <div class="cust-grid2-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="pulse-grow img-responsive cust-img-center1" src="img/icon/lg-icon-2.png">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Marketers</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para3">
                                        Launching campaigns or introducing a new product? Use Mapr to design the ideal Customer Experience.</p>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-5">
                            <div class="wow bounceInUp">
                                <div class="cust-grid2-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="pulse-grow img-responsive cust-img-center1" src="img/icon/lg-icon-3.png">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Business owners</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para3">
                                        Visualising the Customer Journey helps to understand your large and small customers.</p>
                                </div>
                            </div>

                            <div class="wow bounceInUp">
                                <div class="cust-grid2-wrap">
                                    <p style="
    text-align: center;
">
                                        <img class="pulse-grow img-responsive cust-img-center1" src="img/icon/lg-icon-4.png">
                                        <br><span class="section07-cus-color cust-nw-tittle2">Process managers</span>
                                        <br>
                                    </p>
                                    <p class="cust-nw-para3">Control the customer processes by mapping the Customer Journey and make an action list for you and your colleagues.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-1"></div>


                    </div>


                </div>
            </section>
        </div>










        <div class="Section08">
            <section id="about" class="container content-section text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="cust-nw-tittle1">PRICING</p>
                        <p class="cust-nw-para1">
                            A subscription to Mapr is easy and cheap. Pay with credit card per month or per year.</p>
                        <p class="cust-nw-tittle3">Payment with credit card

                        </p>

                    </div>
                    <div class="col-lg-12 cust-nw-col-12">
                        <div class="col-md-2 cust-nw-col-1"></div>
                        <div class="col-md-2 cust-nw-col-2">
                            <img src="img/visa.png" alt="">
                        </div>
                        <div class="col-md-2 cust-nw-col-2">
                            <img src="img/master.png" alt="">
                        </div>
                        <div class="col-md-2 cust-nw-col-2">
                            <img src="img/amarican.png" alt="">
                        </div>
                        <div class="col-md-2 cust-nw-col-2">
                            <img src="img/paypal.png" alt="">
                        </div>
                        <div class="col-md-2 cust-nw-col-1"></div>
                    </div>

                    <div class="col-lg-12">
                        <div class="cust-toggle-wrap img-responsive">
                            <span id=subscription class="tab-pane fade in active"> 

<form action="https://www.justinmind.com/backend/purchaseMonthly.action" method=get accept-charset=utf-8 class=buy-form> 

<div class="period-toggle monthly"> <a href="#set-monthly" id=set-monthly style="font-size: 24px; font-weight: 400; text-transform: uppercase;" class="cust-monthy">Monthly</a> 

<span class=flip><em></em>
</span>  <a href="#set-yearly" id=set-yearly style="font-size: 24px; font-weight: 400; text-transform: uppercase;" class="cust-yearly">Yearly</a> 
                        </div>

                        <div class=prices>

                            <div class="price price-yearly hiding">

                                <span class=dollar style="font-size: 120px;">$
</span>

                                <span class=num>19
</span> 

                                <p class="cust-user-year" style="text-transform: uppercase;">per user/per month</p>




                            </div>

                            <div class="price price-monthly showing">

                                <span class=dollar style="font-size: 120px;">$
</span>

                                <span class=num>29
</span> 

                                <p class="cust-user-year" style="text-transform: uppercase;">per user/per month</p>


                            </div>
                        </div>


                        </form>


                        </span>
                    </div>

                </div>
        </div>



        <div class="row">

        </div>




        </section>
        </div>




        <div class="Section09">
            <section id="about" class="container content-section text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="cust-nw-tittle1">SUBSCRIBE FOR BETA</p>
                        <div class="section03-cus-p">
                            <p class="cust-nw-para1">Be part of the Mapr community and join our BETA. Fill in your e-mail address and we keep you updated.</p>

                        </div>
                    </div>
                </div>



                <div class="container" id="register">
                    <!-- Top Navigation -->



                </div>
                <!-- /container -->
                <form action="index.php" name="mail" id="usrform" method="post">
                    <input type="email" name="email" placeholder="Enter your email address" class="cust-email-txt-feild" required>
                    <input id="submit" name="submit" type="submit" value="JOIN OUR BETA" class="cust-email-submit-btn">
                </form>
        </div>
        <div>
        </div>
        </section>
        </div>










        <div class="section-footer">
            <div class="container">
                <div id="footer">
                    <div class="row">



                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-6">

                            <div class="cust-nw-footer-social">
                                <img class="img-thumbnail footer-image" src="img/social/fb.png" width="10%">
                                <img class="img-thumbnail footer-image" src="img/social/in.png" width="10%">
                                <img class="img-thumbnail footer-image" src="img/social/twiter.png" width="10%">
                              <!--  <img class="img-thumbnail footer-image" src="img/social/g+.png" width="10%">
                                <img class="img-thumbnail footer-image" src="img/social/skype.png" width="10%"> -->
                            </div>
                        </div>
                        <div class="col-md-6">

                            <p class="footer-p-style cust-nw-footer-txt">© 2014 Mapr. All rights reserved.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>








        <!-- js -->
        <script src="js/test.js"></script>
       <!--<script src="js/classie.js"></script> -->
        <script src="js/nav.js"></script>
		
		 <script src="js/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script src="js/viewportchecker.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('.post').addClass("").viewportChecker({
                    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
                    offset: 10
                });
            });
        </script>
        <!--page scroll animation end-->






  




        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('.1post').addClass("").viewportChecker({
                    classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
                    offset: 10
                });
            });
        </script>
        <!--page scroll animation end-->


        <!-- Core JavaScript Files -->

        <!--<script src="js/jquery-1.11.0.js"></script>-->
        <script src="js/bootstrap.min.js"></script>
        <!--page scroll java script-->
        <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
        <!-- Custom Theme JavaScript -->
        <script src="js/grayscale.js"></script>
        <!--page scroll java script-->
       <script src="js/jquery.easing.min.js"></script>
        <!--page scroll java script-->






        










</body>

</html>