 <?php
 require_once('login2/config.php');
    $resle = "SELECT * FROM posts ";
    $sqlq = mysqli_query($link, $resle) or die(mysqli_error($link));
    $rew = mysqli_fetch_assoc($sqlq);
    
    if(mysqli_num_rows($sqlq) >= 0)
    {

        $win1 = "SELECT Username,TRUNCATE(X.perc,0)as prc,X.sumc,X.cgame FROM ( SELECT count(game)as cgame,userID,(SUM(color='DarkGreen')*100/count(game))as perc,SUM(color='DarkGreen')as sumc FROM posts WHERE color='DarkGreen' OR color='DarkRed' OR color='Gray' Group By userID)as X JOIN users WHERE X.userID = ID AND username='Apostolos' " ;
            $rest1 = mysqli_query($link, $win1) or die(mysqli_error($link));
            $row4 = mysqli_fetch_assoc($rest1);
            if (mysqli_num_rows($rest1) <= 0) {
                $row4['prc']=0;
                $row4['sumc']=0;
                $row4['cgame']=0;
            }

         $win2 = "SELECT Username,TRUNCATE(X.perc,0)as prc,X.sumc,X.cgame FROM ( SELECT count(game)as cgame,userID,(SUM(color='DarkGreen')*100/count(game))as perc,SUM(color='DarkGreen')as sumc FROM posts WHERE color='DarkGreen' OR color='DarkRed' OR color='Gray' Group By userID)as X JOIN users WHERE X.userID = ID AND username='TakisNak' " ;
            $rest2 = mysqli_query($link, $win2) or die(mysqli_error($link));
            $row5 = mysqli_fetch_assoc($rest2);
            if (mysqli_num_rows($rest2) <= 0) {
                $row5['prc']=0;
                $row5['sumc']=0;
                $row5['cgame']=0;
            }

         $win3 = "SELECT Username,TRUNCATE(X.perc,0)as prc,X.sumc,X.cgame FROM ( SELECT count(game)as cgame,userID,(SUM(color='DarkGreen')*100/count(game))as perc,SUM(color='DarkGreen')as sumc FROM posts WHERE color='DarkGreen' OR color='DarkRed' OR color='Gray' Group By userID)as X JOIN users WHERE X.userID = ID AND username='NikosNak' " ;
            $rest3 = mysqli_query($link, $win3) or die(mysqli_error($link));
            $row6 = mysqli_fetch_assoc($rest3);
            if (mysqli_num_rows($rest3) <= 0) {
                $row6['prc']=0;
                $row6['sumc']=0;
                $row6['cgame']=0;
            }


    }

 ?>

 <section class="schedule section" style="background-color:#f9f9f9">
               <div class="container" >
                    <div class="row" style="background-color:red;border-radius: 5px;">
                            <div class="col-lg-12 col-12 text-center">
                                <h2 style="color:black;" data-aos="fade-up" data-aos-delay="200">ΠΟΣΟΣΤΑ ΕΠΙΤΥΧΙΑΣ</h2>
                                <hr style="background-color:black;">
                                <br>
                                <h2 data-aos="fade-up" style="font-size:22px;color:black;float:left;" data-aos-delay="200">Profitis</h2>
                                <p style="color:black;float:right"><?php echo $row4['sumc'] ?>/<?php echo $row4['cgame'] ?></p>

                                <div class="col-lg-12 py-5 col-md-12 col-12">
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row4['prc'] ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row4['prc'] ?>%</div>
                                    </div>
                                         
                                 </div>
                             </div>

                             <div class="col-lg-12 col-12 text-center">
                                <h2 data-aos="fade-up" style="font-size:22px;color:black;float:left;" data-aos-delay="200">Tameiakos</h2>
                                <p style="color:black;float:right"><p style="color:black;float:right">
                                    <?php echo $row5['sumc'] ?>/<?php echo $row5['cgame'] ?></p></p>
                                <div class="col-lg-12 py-5 col-md-12 col-12">
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row5['prc'] ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row5['prc'] ?>%</div>
                                    </div>
                                         
                                 </div>
                             </div>

                             <div class="col-lg-12 col-12 text-center">
                                <h2 data-aos="fade-up" style="font-size:22px;color:black;float:left;" data-aos-delay="200">NikosNak</h2>
                                <p style="color:black;float:right"><p style="color:black;float:right"><?php echo $row6['sumc'] ?>/<?php echo $row6['cgame'] ?></p></p>
                                <div class="col-lg-12 py-5 col-md-12 col-12">
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: <?php echo $row6['prc'] ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row6['prc'] ?>%</div>
                                    </div>
                                         
                                 </div>
                             </div>

                    </div>
               </div>

            
              
     </section>
