<?php
require_once('login2/config.php');
?>

<!-- SCHEDULE -->
     <section class="schedule section" id="schedule">

                <!-- Modal ADD-->
                <div class="modal fade" id="addmatch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>ΠΡΟΣΘΗΚΗ ΠΑΙΧΝΙΔΙΟΥ</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="addmatch.php" method="post">
                          <div class="modal-body">
                                  <div class="form-group">
                                    <label for="sport">Άθλημα</label>
                                    <input type="text" class="form-control" name="sport" aria-describedby="sportHelp" placeholder="Enter Sport">
                                  </div>
                                  <div class="form-group">
                                    <label for="match">Παιχνίδι</label>
                                    <input type="text" class="form-control" name="game" aria-describedby="matchHelp" placeholder="Enter Match">
                                  </div>
                                  <div class="form-group">
                                    <label for="predict">Πρόγνωση</label>
                                    <input type="text" class="form-control" name="predictgame" aria-describedby="predictHelp" placeholder="Enter Predict">
                                  </div>
                                   <div class="form-group">
                                    <label for="apodosi">Απόδοση</label>
                                    <input type="text" class="form-control" name="apodosi" id="idapodosi" aria-describedby="apodosiHelp" placeholder="Enter Result">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλείσε</button>
                                    <button type="submit" name="insertdata" class="btn btn-primary">Αποθήκευση</button>
                                  </div>
                            </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Modal EDIT-->
                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>ΤΡΟΠΟΠΟΙΗΣΗ</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="editmatch.php" method="post">
                          <div class="modal-body">

                                  <input type="hidden" name="update_id" id="update_id">
                                  <div class="form-group">
                                    <label for="sport">Άθλημα</label>
                                    <input type="text" class="form-control" maxlength="15" name="sport" id="idsport" aria-describedby="sportHelp" placeholder="Enter Sport">
                                  </div>
                                  <div class="form-group">
                                    <label for="match">Παιχνίδι</label>
                                    <input type="text" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "35" name="game" id="idmatch" aria-describedby="matchHelp" placeholder="Enter Match">
                                  </div>
                                  <div class="form-group">
                                    <label for="predict">Πρόγνωση</label>
                                    <input type="text" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" name="predictgame" id="idpredict" aria-describedby="predictHelp" placeholder="Enter Predict">
                                  </div>
                                  <div class="form-group">
                                    <label for="apodosi">Απόδοση</label>
                                    <input type="text" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" name="apodosi" id="idapodosi" aria-describedby="apodosiHelp" placeholder="Enter Result">
                                  </div>
                                  <div class="form-group">
                                    <label for="result">Αποτέλεσμα</label>
                                    <input type="text" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" name="resultgame" id="idresult" aria-describedby="resultHelp" placeholder="Enter Result">
                                  </div>
                                  <!-- Default inline 1-->
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="check" value="DarkGreen" class="custom-control-input checkb" id="defaultInline1">
                                    <label class="custom-control-label" for="defaultInline1">Win</label>
                                  </div>
                                  
                                  <!-- Default inline 2-->
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="check" value="DarkRed" class="custom-control-input checkb" id="defaultInline2">
                                    <label class="custom-control-label" for="defaultInline2">Lose</label>
                                  </div>
                                  
                                  <!-- Default inline 3-->
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="check" value="Gray" class="custom-control-input checkb" id="defaultInline3">
                                    <label class="custom-control-label" for="defaultInline3">Cancelled</label>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλείσε</button>
                                    <button type="submit" name="editdata" class="btn btn-primary">Αποθήκευση</button>
                                  </div>
                            </div>
                      </form>
                    </div>
                  </div>
                </div>


               <div class="container">
                    <div class="row">
                            <div class="col-lg-12 col-12 text-center">
                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">ΟΙ ΠΡΟΒΛΕΨΕΙΣ ΜΑΣ</h2>
                                <hr style="background-color:white;">
                                <span style="float:right;color:white;"><?php echo date("Y-m-d")?></span>
                                <br>
                                <h2 class="text-white" data-aos="fade-up" style="font-size:28px;" data-aos-delay="200">Profitis</h2>

                            
                            <?php 
                                if($profil=="Apostolos"){
                                    ?>            
                                                     <!-- Button trigger modal ADD-->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmatch">
                                        ΠΡΟΣΘΗΚΗ
                                    </button>
                                <?php } ?>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                        <?php
                                            if($profil==true)
                                            { ?>
                                                <th style="visibility: hidden;">ID</th>
                                        <?php    } ?>
                                    
                                         <th><i class="fa fa-futbol-o"></i></th>
                                         <th>ΠΑΙΧΝΙΔΙ</th>
                                         <th>ΠΡΟΓΝΩΣΗ</th>
                                         <th>ΑΠΟΔΟΣΗ</th>
                                         <th>ΑΠΟΤΕΛΕΣΜΑ</th>
                                         <th>Check</th>
                                             <?php 
                                                if($profil=='Apostolos'){   ?>

                                                 <th>UPT</th>
                                                 <th>DEL</th>
                                             <?php } ?>
                                     </thead>


                                     <tbody>
                                        <?php 
                                        $newid = "";
                                        $prof = 'Apostolos';
                                        
                                        //----------------------------------------------------------------------
                                        //-----------------         S   .   O   .   S --------------------------
                                        //----------------------------------------------------------------------  
                                            //Gia na sugkrinoume to ID me kati allo den mpor na to perasw etsi apla se mia timi
                                            $newid = "SELECT * FROM users WHERE Username = '$prof' ";
                                            $rest = mysqli_query($link, $newid) or die(mysqli_error($link));
                                            $row = mysqli_fetch_assoc($rest);
                                            $idnew = $row['ID'];

                                            $sql = "SELECT * FROM posts WHERE userID = '$idnew' ";
                                            $result = mysqli_query($link, $sql) or die(mysqli_error($link));

                                            if(mysqli_num_rows($result) > 0){
                                                while( $row = mysqli_fetch_assoc($result)) : ?>
                                         <tr>
                                            <?php 
                                                if($profil==true)
                                            {  ?>
                                                <td style="visibility: hidden;"><?php echo $row['ID']; ?></td>
                                            <?php } ?>
                                            <td><strong><?php echo $row['sport']; ?></strong></td>
                                            <td>
                                                <strong><?php echo $row['game']; ?></strong>
                                            </td>
                                            <td>
                                                <strong><?php echo $row['predict']; ?></strong>
                                            </td>
                                            <td>
                                                <strong><?php echo $row['apodosi']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row['color']; ?>">
                                                <strong><?php echo $row['result']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row['color']; ?>">
                                              <?php if($row['color']=="DarkGreen") { ?>
                                                <i style="font-size:25px;" class="fa fa-check"></i>
                                              <?php }elseif($row['color']=="DarkRed") {?>
                                                <i style="font-size:25px;" class="fa fa-times"></i>
                                              <?php }elseif($row['color']=="Gray") { ?>
                                                <i style="font-size:25px;" class="fa fa-window-minimize"></i>
                                              <?php } ?>
                                            </td>
                                            <?php 
                                                if($profil=='Apostolos'){   ?>
                                                    <td>
                                                        <button type="button" class="btn btn-success editbtn">EDIT</button>
                                                    </td>
                                                    <td> 
                                                        <a href="deletematch.php?delId=<?php echo $row['ID'];?>" type="button" class="btn btn-danger">DELETE</a>
                                                    </td>
                                                    <?php } 
                                                endwhile; }  ?>
                                         </tr>
                                     </tbody>
                                 </table>

                             </div>

                    </div>
               </div>

                <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h2 class="text-white" data-aos="fade-up" style="font-size:28px;" data-aos-delay="200">Tameiakos</h2>
                             </div>

                             <?php 
                                if($profil=="TakisNak" || $profil=='Apostolos'){
                                    ?>            
                                                     <!-- Button trigger modal ADD-->
                                    <button style="margin-left:45%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmatch">
                                        ΠΡΟΣΘΗΚΗ
                                    </button>
                                <?php } ?>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                        <?php
                                            if($profil==true)
                                            { ?>
                                                <th style="visibility: hidden;">ID</th>
                                        <?php    } ?>
                                    
                                         <th><i class="fa fa-futbol-o"></i></th>
                                         <th>ΠΑΙΧΝΙΔΙ</th>
                                         <th>ΠΡΟΓΝΩΣΗ</th>
                                         <th>ΑΠΟΔΟΣΗ</th>
                                         <th>ΑΠΟΤΕΛΕΣΜΑ</th>
                                         <th>Check</th>
                                             <?php 
                                                if($profil=='TakisNak' || $profil=='Apostolos'){   ?>

                                                 <th>UPT</th>
                                                 <th>DEL</th>
                                             <?php } ?>
                                     </thead>


                                     <tbody>
                                        <?php 
                                        $newid = "";
                                        $prof = 'TakisNak';
                                        
                                        //----------------------------------------------------------------------
                                        //-----------------         S   .   O   .   S --------------------------
                                        //----------------------------------------------------------------------  
                                            //Gia na sugkrinoume to ID me kati allo den mpor na to perasw etsi apla se mia timi
                                            $newid = "SELECT * FROM users WHERE Username = '$prof' ";
                                            $rest = mysqli_query($link, $newid) or die(mysqli_error($link));
                                            $row = mysqli_fetch_assoc($rest);
                                            $idnew = $row['ID'];

                                            $sql = "SELECT * FROM posts WHERE userID = '$idnew' ";
                                            $result = mysqli_query($link, $sql) or die(mysqli_error($link));

                                            if(mysqli_num_rows($result) > 0){
                                                while( $row = mysqli_fetch_assoc($result)) : ?>
                                         <tr>
                                            <?php 
                                                if($profil==true)
                                            {  ?>
                                                <td style="visibility: hidden;"><?php echo $row['ID']; ?></td>
                                            <?php } ?>
                                            <td><strong><?php echo $row['sport']; ?></strong></td>
                                            <td>
                                                <strong><?php echo $row['game']; ?></strong>
                                            </td>
                                            <td>
                                                <strong><?php echo $row['predict']; ?></strong>
                                            </td>
                                            <td>
                                                <strong><?php echo $row['apodosi']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row['color']; ?>">
                                                <strong><?php echo $row['result']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row['color']; ?>">
                                              <?php if($row['color']=="DarkGreen") { ?>
                                                <i style="font-size:25px;" class="fa fa-check"></i>
                                              <?php }elseif($row['color']=="DarkRed") {?>
                                                <i style="font-size:25px;" class="fa fa-times"></i>
                                              <?php }elseif($row['color']=="Gray") { ?>
                                                <i style="font-size:25px;" class="fa fa-window-minimize"></i>
                                              <?php } ?>
                                            </td>
                                            <?php 
                                                if($profil=='TakisNak' || $profil=='Apostolos'){   ?>
                                                    <td>
                                                        <button type="button" class="btn btn-success editbtn">EDIT</button>
                                                    </td>
                                                    <td> 
                                                        <a href="deletematch.php?delId=<?php echo $row['ID'];?>" type="button" class="btn btn-danger">DELETE</a>
                                                    </td>
                                                    <?php } 
                                                endwhile; }  ?>
                                         </tr>
                                     </tbody>
                                 </table>

                             </div>

                    </div>
               </div>

               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h2 class="text-white" data-aos="fade-up" style="font-size:28px;" data-aos-delay="200">Nikos Nak</h2>
                             </div>

                             <?php 
                                if($profil=="NikosNak" || $profil=='Apostolos'){
                                    ?>       
                                                     <!-- Button trigger modal ADD-->
                                    <button style="margin-left:45%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmatch">
                                        ΠΡΟΣΘΗΚΗ
                                    </button>
                                <?php } ?>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                        <?php
                                            if($profil==true)
                                            { ?>
                                                <th style="visibility: hidden;">ID</th>
                                        <?php    } ?>
                                    
                                         <th><i class="fa fa-futbol-o"></i></th>
                                         <th>ΠΑΙΧΝΙΔΙ</th>
                                         <th>ΠΡΟΓΝΩΣΗ</th>
                                         <th>ΑΠΟΔΟΣΗ</th>
                                         <th>ΑΠΟΤΕΛΕΣΜΑ</th>
                                         <th>Check</th>
                                             <?php 
                                                if($profil=='NikosNak' || $profil=='Apostolos'){   ?>

                                                 <th>UPT</th>
                                                 <th>DEL</th>
                                             <?php } ?>
                                     </thead>


                                     <tbody>
                                        <?php 
                                        $newid = "";
                                        $prof = 'NikosNak';
                                        
                                        //----------------------------------------------------------------------
                                        //-----------------         S   .   O   .   S --------------------------
                                        //----------------------------------------------------------------------  
                                            //Gia na sugkrinoume to ID me kati allo den mpor na to perasw etsi apla se mia timi
                                            $newid = "SELECT * FROM users WHERE Username = '$prof' ";
                                            $rest = mysqli_query($link, $newid) or die(mysqli_error($link));
                                            $row = mysqli_fetch_assoc($rest);
                                            $idnew = $row['ID'];

                                            $sql = "SELECT * FROM posts WHERE userID = '$idnew' ";
                                            $result = mysqli_query($link, $sql) or die(mysqli_error($link));

                                            if(mysqli_num_rows($result) > 0){
                                                while( $row = mysqli_fetch_assoc($result)) : ?>
                                         <tr>
                                            <?php 
                                                if($profil==true)
                                            {  ?>
                                                <td style="visibility: hidden;"><?php echo $row['ID']; ?></td>
                                            <?php } ?>
                                            <td><strong><?php echo $row['sport']; ?></strong></td>
                                            <td>
                                                <strong><?php echo $row['game']; ?></strong>
                                            </td>
                                            <td>
                                                <strong><?php echo $row['predict']; ?></strong>
                                            </td>
                                            <td>
                                                <strong><?php echo $row['apodosi']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row['color']; ?>">
                                                <strong><?php echo $row['result']; ?></strong>
                                            </td>
                                            <td style="background-color:<?php echo $row['color']; ?>">
                                              <?php if($row['color']=="DarkGreen") { ?>
                                                <i style="font-size:25px;" class="fa fa-check"></i>
                                              <?php }elseif($row['color']=="DarkRed") {?>
                                                <i style="font-size:25px;" class="fa fa-times"></i>
                                              <?php }elseif($row['color']=="Gray") { ?>
                                                <i style="font-size:25px;" class="fa fa-window-minimize"></i>
                                              <?php } ?>
                                            </td>
                                            <?php 
                                                if($profil=='NikosNak' || $profil=='Apostolos'){   ?>
                                                    <td>
                                                        <button type="button" class="btn btn-success editbtn">EDIT</button>
                                                    </td>
                                                    <td> 
                                                        <a href="deletematch.php?delId=<?php echo $row['ID'];?>" type="button" class="btn btn-danger">DELETE</a>
                                                    </td>
                                                    <?php } 
                                                endwhile; }  ?>
                                         </tr>
                                     </tbody>
                                 </table>

                             </div>

                    </div>
               </div>
     </section>