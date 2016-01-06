<!-- Listing of City Locations -->
<!-- <section> opens in listings.inc.php -->
  <div class="panel panel-default">
    <?php
    /* get db connection */
    include('/home/remoteloc/config/connection.php'); 
    $query = "SELECT id,name,locDesc,wifi from location_oregon_bend order by name"; /*alpha order*/
    $result = mysqli_query($con, $query) or die('Sorry, could not get listings at this time ');
    if (mysqli_num_rows($result) == 0) /* If fails... */
    {
       echo "Sorry, please try back later.";
    } else {
       while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) /* If succeeds... */
       {
        $id = $row['id'];
        $name = $row['name'];
        $desc = $row['locDesc'];
        $wifi = $row['wifi'];
        $long_text = $desc; // full length description
        $max_length = 400; // show only 100 characters

        echo "<div class=\"container_listings\">";  // container div
        echo "<div class=\"panel-heading listingH1\">$name</div>";
        echo "<section class=\"panel-body\">";
        // truncates text if longer than 400, or shows short description
        if (strlen($desc) > $max_length)
          {
           $short_text = (substr($long_text,0,$max_length-1)); // $short_text will show characters 0 to 100
           $short_text .= "... "; // add an ellipses ... at the end
           echo $short_text;
          }
        else
          {
          echo $long_text; // display the string as is
          }
        // wifi yes or no
        if ($wifi === "yes")
          {
          echo "<br>Wi-Fi Icon<br>";
          }
        echo "</section>";
        echo "</div>";
       }
    }
    ?> <!-- end php -->
  </div>