<?php include 'header1.php';?>
<?php
                   
                        ?>
                        <br>
                        <br>

                            <div align="center"><h2><b><u>Your Profile</u></b></h2></div>
                                
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Field</th>
                                                        <th>Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



  <?php
 $db = mysql_connect("localhost", "root", "");
 mysql_select_db("hotel",$db);
 $result = mysql_query("SELECT * FROM user where username='$login_session'",$db);
while ($myrow = mysql_fetch_array($result)) 
    { 
        echo '<form method="post" action="update.php">';
        
        echo "<TR><TD>";
        echo "Name";
        echo "<TD>";
        echo '<input type="text" name="name" size="25" value="'.$myrow["name"].'"><br>';
        echo "</TD></TR>";
        echo "<TR><TD>";
        echo "Username";
        echo "<TD>";
         echo $myrow["username"];
       echo "</TD></TR>";
        echo "<TR><TD>";
        echo "Password";
        echo "<TD>";
         echo '<input type="password" name="password" size="21" value="'.$myrow["password"].'"><br>';
       echo "</TD></TR>";
        echo "<TR><TD>";
        echo "DOB";
        echo "<TD>";
        echo '<input type="date" name="dob" size="25" value="'.$myrow["dob"].'"><br>';
       echo "</TD></TR>";
        echo "<TR><TD>";
        echo "Mobile";
        echo "<TD>";
         echo '<input type="text" name="mobile" size="11" value="'.$myrow["mobile"].'"><br>';
       echo "</TD></TR>";
        
        echo "<TR><TD>";
        echo "Address";
        echo "<TD>";
         echo '<input type="text" name="address" size="150" value="'.$myrow["address"].'"><br>';
       echo "</TD></TR>";

        } 
    echo "</TABLE>";
     echo '<input type="submit" name="submit" value="sent"><br>';
    
        echo '</form>';
     ?>   
    </table>
    </tbody>
         <?php include 'footer1.php';?>