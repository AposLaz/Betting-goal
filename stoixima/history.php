<?php
    require_once('login2/config.php');
?>

<!-- Provlepseis proigoumenis meras -->
     <section class="schedule section" style="background-color:white" id="last_day">
               <div class="container">
                    <div class="row">
                        
                            <div class="col-lg-12 col-12 text-center">
                                <h2 style="color:black;" data-aos="fade-up" data-aos-delay="200">ΑΠΟΤΕΛΕΣΜΑΤΑ ΠΡΟΗΓΟΥΜΕΝΗΣ ΜΕΡΑΣ</h2>
                                <hr style="background-color:black;">
                                <br>
                                <h2 data-aos="fade-up" style="font-size:28px;color:black;" data-aos-delay="200">Profitis</h2>

                             </div>
                           
                            <div>
                                <?php 
                                    if($profil==true){
                                        ?>    
                                <form action="add_history.php" method="post">          
                                     <button type="submit" name="but1" class="btn btn-primary">
                                        ΠΡΟΣΘΗΚΗ
                                    </button>
                                </form>
                                <?php } ?>
                            </div>
                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-futbol-o"></i></th>
                                         <th>ΠΑΙΧΝΙΔΙ</th>
                                         <th>ΠΡΟΓΝΩΣΗ</th>
                                         <th>ΑΠΟΔΟΣΗ</th>
                                         <th>ΑΠΟΤΕΛΕΣΜΑ</th>
                                         <th>Check</th>
                                          <?php if($profil==true){ ?>
                                            <th>Action</th>
                                     <?php }?>
                                     </thead>

                                     <tbody>
                                    <?php
                                            $sqll = "SELECT * FROM history WHERE userIDD = (SELECT ID FROM users WHERE Username = 'Apostolos') ";
                                            $resti = mysqli_query($link, $sqll) or die(mysqli_error($link));
                    
                                            while( $row1 = mysqli_fetch_assoc($resti)) :
                                            ?>
                                         <tr>
                                            <td><strong><?php echo $row1['spor']; ?></strong></td>
                                            <td style="background-color:<?php echo $row1['colo']; ?>">
                                                <strong><?php echo $row1['gam']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row1['colo']; ?>">
                                                <strong><?php echo $row1['predic']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row1['colo']; ?>">
                                                <strong><?php echo $row1['apodos']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row1['colo']; ?>">
                                                <strong><?php echo $row1['resul']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row1['colo']; ?>">
                                              <?php if($row1['colo']=="DarkGreen") { ?>
                                                <i style="font-size:25px;" class="fa fa-check"></i>
                                              <?php }elseif($row1['colo']=="DarkRed") {?>
                                                <i style="font-size:25px;" class="fa fa-times"></i>
                                              <?php }elseif($row1['colo']=="Gray") { ?>
                                                <i style="font-size:25px;" class="fa fa-window-minimize"></i>
                                              <?php } ?>
                                            </td>
                                                <?php if($profil==true){ ?>
                                            <td> 
                                                <form action="delete_history.php" method="post">          
                                                     <button type="submit" name="del" class="btn btn-danger">
                                                        DELETE ALL
                                                    </button>
                                                </form>
                                            </td>
                                            <?php } ?>
                                            <?php
                                                endwhile; 
                                            ?>

                                         </tr>

                                         
                                     </tbody>
                                 </table>
                             </div>

                    </div>
               </div>

                <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h2 data-aos="fade-up" style="font-size:28px;color:black;" data-aos-delay="200">Tameiakos</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">
                                    <thead class="thead-light">
                                         <th><i class="fa fa-futbol-o"></i></th>
                                         <th>ΠΑΙΧΝΙΔΙ</th>
                                         <th>ΠΡΟΓΝΩΣΗ</th>
                                         <th>ΑΠΟΔΟΣΗ</th>
                                         <th>ΑΠΟΤΕΛΕΣΜΑ</th>
                                         <th>Check</th>
                                         <?php if($profil==true){ ?>
                                            <th>Action</th>
                                        <?php }?>
                                     </thead>

                                     <tbody>
                                    <?php 
                                            $sqll = "SELECT * FROM history WHERE userIDD = (SELECT ID FROM users WHERE Username = 'TakisNak') ";
                                            $resti = mysqli_query($link, $sqll) or die(mysqli_error($link));
                    
                                            while( $row2 = mysqli_fetch_assoc($resti)) :
                                            ?>
                                         <tr>
                                            <td><strong><?php echo $row2['spor']; ?></strong></td>
                                            <td style="background-color:<?php echo $row2['colo']; ?>">
                                                <strong><?php echo $row2['gam']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row2['colo']; ?>">
                                                <strong><?php echo $row2['predic']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row2['colo']; ?>">
                                                <strong><?php echo $row2['apodos']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row2['colo']; ?>">
                                                <strong><?php echo $row2['resul']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row2['colo']; ?>">
                                              <?php if($row2['colo']=="DarkGreen") { ?>
                                                <i style="font-size:25px;" class="fa fa-check"></i>
                                              <?php }elseif($row2['colo']=="DarkRed") {?>
                                                <i style="font-size:25px;" class="fa fa-times"></i>
                                              <?php }elseif($row2['colo']=="Gray") { ?>
                                                <i style="font-size:25px;" class="fa fa-window-minimize"></i>
                                              <?php } ?>
                                            </td>
                                            <?php if($profil==true){ ?>
                                            <td> 
                                                <form action="delete_history.php" method="post">          
                                                     <button type="submit" name="del" class="btn btn-danger">
                                                        DELETE ALL
                                                    </button>
                                                </form>
                                            </td>
                                            <?php } ?>

                                            <?php
                                                endwhile; 
                                            ?>

                                         </tr>

                                         
                                     </tbody>
                                    
                                         
                                 </table>
                             </div>

                    </div>
               </div>

               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h2 data-aos="fade-up" style="font-size:28px;color:black;" data-aos-delay="200">Nikos Nak</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">
                                    <thead class="thead-light">
                                         <th><i class="fa fa-futbol-o"></i></th>
                                         <th>ΠΑΙΧΝΙΔΙ</th>
                                         <th>ΠΡΟΓΝΩΣΗ</th>
                                         <th>ΑΠΟΔΟΣΗ</th>
                                         <th>ΑΠΟΤΕΛΕΣΜΑ</th>
                                         <th>Check</th>
                                         <?php if($profil==true){ ?>
                                            <th>Action</th>
                                     <?php }?>
                                     </thead>

                                     <tbody>
                                    <?php
                                            $sqll = "SELECT * FROM history WHERE userIDD = (SELECT ID FROM users WHERE Username = 'NikosNak') ";
                                            $resti = mysqli_query($link, $sqll) or die(mysqli_error($link));
                    
                                            while( $row3 = mysqli_fetch_assoc($resti)) :
                                            ?>
                                         <tr>
                                            <td><strong><?php echo $row3['spor']; ?></strong></td>
                                            <td style="background-color:<?php echo $row3['colo']; ?>">
                                                <strong><?php echo $row3['gam']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row3['colo']; ?>">
                                                <strong><?php echo $row3['predic']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row3['colo']; ?>">
                                                <strong><?php echo $row3['apodos']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row3['colo']; ?>">
                                                <strong><?php echo $row3['resul']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row3['colo']; ?>">
                                              <?php if($row3['colo']=="DarkGreen") { ?>
                                                <i style="font-size:25px;" class="fa fa-check"></i>
                                              <?php }elseif($row3['colo']=="DarkRed") {?>
                                                <i style="font-size:25px;" class="fa fa-times"></i>
                                              <?php }elseif($row3['colo']=="Gray") { ?>
                                                <i style="font-size:25px;" class="fa fa-window-minimize"></i>
                                              <?php } ?>
                                            </td>
                                            <?php if($profil==true){ ?>
                                            <td> 
                                                <form action="delete_history.php" method="post">          
                                                     <button type="submit" name="del" class="btn btn-danger">
                                                        DELETE ALL
                                                    </button>
                                                </form>
                                            </td>
                                            <?php } ?>

                                            <?php
                                                endwhile; 
                                            ?>

                                         </tr>

                                         
                                     </tbody>
                                    </table> 
                             </div>

                    </div>
               </div>
     </section>
