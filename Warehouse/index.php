<html>
    <head>
    </head>
	<style>
	body{
	font-family: segoe ui;
	}
	</style>
    <body>
    
	   <?php  
            $mysqli = new mysqli('localhost', 'root', '', 'stock'); 
            $query = "SELECT * FROM data WHERE data.storage='1'";
            $query2 = "SELECT * FROM data WHERE data.storage='2'";
            $query3 = "SELECT * FROM data WHERE data.storage='3'";
            
        
            echo '<table>
                    <tr>
                        <td>';
            echo '<form class="box" action="gudanga.php" method="POST">';
            echo '<table style="padding:10px;background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);"> 
                    <tr style="border:2px solid black; border-collapse:collapse; border-style: none none solid none; padding:10px"> 
                        <td style="border:3px; border-style: none none solid none; padding:5px; padding-right"><font face="bahnschrift"><center>STORAGE A</center></font></td> 
                    </tr>';

                    if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["minimum"];
                            $field2name = $row["maximum"];
                            $field3name = $row["current"];

                                echo '<tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Minimum: '.$field1name.'</td> 
                                      </tr>
                                      <tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Maximum: '.$field2name.'</td> 
                                      </tr>
                                      <tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Current: '.$field3name.'</td> 
                                      </tr>';
                            }
                            $result->free();
                    }
                    echo '<tr> 
                          <td style="border:2px; border-style: none none solid none; padding:5px;">
                          <input type="text" name="ops" size="13"></td>
						  </tr>
						  <tr>
						  <td>
						  <center><input type="submit" style="padding-right:20px;padding-left:20px;cursor:pointer;" value="Generate"></center>
                          </td> 
                          </tr>';        
            echo '</table></form></td>
                    
                    <td>';
            echo '<form class="box" action="gudangb.php" method="POST">';
            echo '<table style="padding:10px;background-image: linear-gradient(to top, #9890e3 0%, #b1f4cf 100%);"> 
                    <tr style="border:2px solid black; border-collapse:collapse; border-style: none none solid none; padding:10px"> 
                        <td style="border:3px; border-style: none none solid none; padding:5px; padding-right"><font face="bahnschrift"><center>STORAGE B</center></font></td> 
                    </tr>';

                    if ($result = $mysqli->query($query2)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["minimum"];
                            $field2name = $row["maximum"];
                            $field3name = $row["current"];

                                echo '<tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Minimum: '.$field1name.'</td> 
                                      </tr>
                                      <tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Maximum: '.$field2name.'</td> 
                                      </tr>
                                      <tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Current: '.$field3name.'</td> 
                                      </tr>';
                            }
                            $result->free();
                    }
                    echo '<tr> 
                          <td style="border:2px; border-style: none none solid none; padding:5px;">
                          <input type="text" name="ops" size="13"></td>
						  </tr>
						  <tr>
						  <td>
						  <center><input type="submit" style="padding-right:20px;padding-left:20px;cursor:pointer;"  value="Generate"></center>
                          </td> 
                          </tr>';          
            echo '</table></form></td>
                   
                    <td>';
            echo '<form class="box" action="gudangc.php" method="POST">';
            echo '<table style="padding:10px;background-image: linear-gradient(to top, #ebc0fd 0%, #d9ded8 100%);"> 
                    <tr style="border:2px solid black; border-collapse:collapse; border-style: none none solid none; padding:10px"> 
                        <td style="border:3px; border-style: none none solid none; padding:5px; padding-right"><font face="bahnschrift"><center>STORAGE C</center></font></td> 
                    </tr>';

                    if ($result = $mysqli->query($query3)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["minimum"];
                            $field2name = $row["maximum"];
                            $field3name = $row["current"];

                                echo '<tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Minimum: '.$field1name.'</td> 
                                      </tr>
                                      <tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Maximum: '.$field2name.'</td> 
                                      </tr>
                                      <tr> 
                                          <td style="border:2px; border-style: none none solid none; padding:5px;">Current: '.$field3name.'</td> 
                                      </tr>';
                            }
                            $result->free();
                    }
                    echo '<tr> 
                          <td style="border:2px; border-style: none none solid none; padding:5px;">
                          <input type="text" name="ops" size="13"></td>
						  </tr>
						  <tr>
						  <td>
						  <center><input type="submit" style="padding-right:20px;padding-left:20px;cursor:pointer;"  value="Generate"></center>
                          </td> 
                          </tr>';        
            echo '</table></form></td></tr></table>'
        ?>
        <br><br>
    </body>
</html>
