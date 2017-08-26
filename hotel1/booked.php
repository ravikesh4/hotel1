<?php include 'header1.php';?>

<?php
                   
                        ?>
                    <h2><center><u><b>Booked Rooms</u></h2></center> 
                        <section class="panel">
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none">
                                    <thead>
                                        <tr>
                                            <th>Room.no</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Check-In</th>
                                            <th>Check-Out</th>
                                            <th>Amount Paid</th>
                                            <th>Status</th>
                                              
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                $db=mysql_connect("localhost",  "root",   "");
                                                 mysql_select_db("hotel" ,$db);
                                               $result = mysql_query("select * from payment where email='$login_session'",$db);

                                                while ($myrow = mysql_fetch_array($result)) 
                                                        { 
                                                            echo "<TR><TD>";
                                                            echo $myrow["id"];
                                                            echo "<TD>";
                                                            echo $myrow["name"];
                                                            echo "<TD>";
                                                            echo $myrow["email"];
                                                            echo "<TD>";
                                                            echo $myrow["phone"];
                                                            echo "<TD>";
                                                            echo $myrow["address"];
                                                            echo "<TD>";
                                                            echo $myrow["checkin"];
                                                            echo "<TD>";
                                                            echo $myrow["checkout"];
                                                            echo "<TD>";
                                                            echo $myrow["amount"];
                                                           echo "<TD>";
                                                           echo "CheckIn";
                                                           echo "<TD>";
                                                            echo '<form method=" " action="delete.php">';
                                                           echo '<input type="submit" name="submit" value="Check-Out"><br>';
    
                                                             echo '</form>';
                                        
                                                               
                                   
                                                           echo "</TR>";



                                                }
                                            ?>  

                                </tbody>
                            </table>
                        </div>
                    </section>
                </h2>
<?php include 'footer1.php';?>               