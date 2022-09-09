<?php
session_start();

$profil=$_SESSION['username'];

require_once('login2/config.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Betting-Goal</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <!--mine-->
     <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">BETTING-GOAL</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Αρχικη</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">Η ομαδα μας</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Προγνωστικα</a>
                    </li>

                    <?php 
                        if($profil==true){ ?>
                            <form action="login2/logout.php" method="post" > 
                                <li class="nav-item">
                                    <input style="background-color:#171819;border:none;float:right;cursor:pointer;" type="submit" class="nav-link smoothScroll" value="LogOut">
                                </li>
                            </form>
                        <?php } ?>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <!--<li><a type="hidden" href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a type="hidden" href="#" class="fa fa-twitter"></a></li>
                    <li><a type="hidden" class="fa fa-instagram"></a></li>-->
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <?php
                                        if($profil==true){ ?>
                                            <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">ΠΑΛΙ ΚΟΥΒΑ ΘΑ ΜΑΣ ΠΑΣ ΚΩΛΟΠΑΙΔΟ</h1>

                                       <?php }else{ ?>

                                            <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Καλωσηρθατε στο BETTING-GOAL</h1>
                                        <?php } ?>

                                    <h6 data-aos="fade-up" data-aos-delay="300">Οι καλύτερες στοιχηματικές προβλέψεις αποκλειστικά εδώ</h6>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">ΞΕΚΙΝΗΣΤΕ ΤΗ ΠΕΡΙΗΓΗΣΗ</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Η Ομαδα μας</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">Η συνταγή της επιτυχίας βρίσκεται παρακάτω</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Ευχαριστησή μας να πάμε όλοι μαζί ταμείο</h6>

                    <p data-aos="fade-up" data-aos-delay="200">Μοναδικές στοιχηματικές προβλέψεις.Το μόνο που θέλουμε είναι η εμπιστοσύνη σας</p>

                    <a href="#last_day" class="btn custom-btn bg-color mt-3 " data-aos="fade-up" data-aos-delay="300" >ΑΠΟΤΕΛΕΣΜΑΤΑ ΠΡΟΗΓΟΥΜΕΝΗΣ ΜΕΡΑΣ</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Μοναδική δουλειά από την ομάδα μας</h2>

                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Σχετικά με εμάς</h2>

                                <p data-aos="fade-up" data-aos-delay="400">Η ομάδα μας αποτελείται από έμπειρους επαγγελματίες του χώρου <strong>NikosNak , Tameiakos , Profitis</strong> που με πολύ διάβασμα και λογική κρίση,είναι έτοιμοι να σας οδηγήσουν σε μεγάλα στοιχηματικά ταμεία.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img style="width:620px;height:140px;" src="images/bet365.png" class="img-fluid" alt="bet365">

                                     <div class="team-info d-flex flex-column">
                                       <a href="https://www.bet365.gr/#/HO/" \>bet365.gr</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img style="width:620px;height:140px;" src="images/stoiximan620.jpg" class="img-fluid" alt="stoiximan">

                                    <div class="team-info d-flex flex-column">
                                       <a href="https://www.stoiximan.gr/">stoiximan.gr</a>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
               </div>
     </section>


     <?php
      include('percentWin.php');
     ?>

     <!--SCHEDULE-->
     <?php

     include('schedule.php');

     ?>

     <!--HISTORY-->
     <?php

     include('history.php');

     ?>
    


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p style="font-size: 10px;" class="copyright-text">Copyright &copy; 2020 .
                        
                        <br>Design: <a href="https://www.tooplate.com">Tooplate</a></p>
                    </div>
                    <p><a href="login2/login.php">Login</a></p>              
                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">    
                            
                            <p><i class="fa fa-caret-left"></i><strong>Contact us</strong>_</p>
                            <p><i class="fa fa-envelope-o mr-1"></i></p>
                            <a href="mailto:bet.tipgoal@gmail.com">bet.tipgoal@gmail.com</a>
                        </p>

                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>



     <!-- Js -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- FOR CHECKBOX -->
    <script>
        $(document).ready(function () {
            $('.checkb').click(function ()
            {
                var checkbox = $(this).find('input[type=checkbox]');
               checkbox.prop("checked", !checkbox.prop("checked"));
            });
            $('input[type=checkbox]').click(function (e)
            {
                 e.stopPropagation();
                     return true;
            });
         });
    </script>

    <!-- FOR OPEN MODAL AT EDIT BUTTON -->
    <script>
        $(document).ready(function () {
            $('.editbtn').on('click',function(){

                $('#editmodal').modal('show');

                    $tr = $(this).closest('tr');

                    var data =$tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#update_id').val(data[0]);
                    $('#idsport').val(data[1]);
                    $('#idmatch').val(data[2]);
                    $('#idpredict').val(data[3]);
                    $('#idapodosi').val(data[4]);
                    $('#idresult').val(data[5]);
                    $('#check').val(data[6]);

                
            });
        });
    </script>

</body>
</html>
