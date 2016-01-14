<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

      $connector = mysql_connect($host,$user,$pass)
          or die("Unable to connect");
      $selected = mysql_select_db("comm_login", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM masterdata WHERE id =".$_GET['id']);
      $row = mysql_fetch_assoc( $result );
      ?><br>
      <table border="2" style= " margin: 0 auto;" >
      <thead>
      <tbody>
      <?php
        echo '<tr>';

          echo '<th>S. No.</th>';
          echo '<td>'.$row['s.no.'].'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<th>Region</th>';
          echo'<td>'.$row['region'].'</td>';
          echo '</tr>';

        echo '<tr>';
                  echo '<th>State</th>';
                  echo'<td>'.$row['state'].'</td>';
        echo '</tr>';

        echo '<tr>';
                  echo '<th>City</th>';
                  echo'<td>'.$row['city'].'</td>';
                      
        echo '</tr>';

        echo '<tr>';
                  echo '<th>Dealer Code</th>';
                  echo'<td>'.$row['dealer code'].'</td>';
        echo '</tr>';

        echo '<tr>';
                  echo '<th>Dealer Name</th>';
                  echo'<td>'.$row['dealer name'].'</td>';
        echo '</tr>';

        echo '<tr>';
                  echo '<th>Address</th>';
                  echo'<td>'.$row['address'].'</td>';
        echo '</tr>';

        echo '<tr>';
                  echo '<th>Location</th>';
                  echo'<td>'.$row['location'].'</td>';
        echo '</tr>';

        echo '<tr>';
                  echo '<th>Store Category</th>';
                  echo'<td>'.$row['category'].'</td>';
        echo '</tr>';

        echo '<tr>';
                  echo '<th>Contact Person</th>';
                  echo'<td>'.$row['contact person'].'</td>';
                echo '</tr>';

                echo '<tr>';
                  echo '<th>Contact No.</th>';
                  echo'<td>'.$row['contact no.'].'</td>';
                echo '</tr>';


        ?>
     
        
            
   </thead>
        
      </tbody>
    </table><br>
    
     <?php mysql_close($connector); ?>
