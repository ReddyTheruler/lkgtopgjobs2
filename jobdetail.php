<!DOCTYPE html>
<html>
        <head>

<title>
<?php 
include ("db.php");
if(isset($_GET['id'])) {
        $id= $_GET['id'];
        $sql = mysqli_query($conn, "SELECT *FROM jobss WHERE id='$id'");
    

        if($row = mysqli_num_rows($sql)) { 
   
          $row = mysqli_fetch_assoc($sql) or die(mysqli_error());

$loc = $row['location'];
 $pagetitle = $row['jobtitle'];




echo $loc . ' ' . $pagetitle;


}
}

?>



</title>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="lkgtopg1">
<meta name="twitter:title" content="LKGtoPG - JobPortal |recruitment |hiring |latest jobs| walkins">
<meta name="twitter:description" content="LKGtoPG - JobPortal |recruitment |hiring |latest jobs| walkins | Govt Jobs | IT Jobs | Walkins | BPO Jobs | Fresher's walkins | Job alert">
<meta property="og:type" content="website">
<meta property="og:title" content="lkgtopg">
<meta property="og:description" content="ovt  jobs, It jobs, Bank jobs, BPO Jobs, MBA jobs, Fresher's Walkins, Job Alert, Free job alert, Latest Govt jobs, Railway jobs , Government jobs, Govt jobs, .Net jobs, Java jobs, Sap Jobs, Oracle jobs, Testing jobs">
<meta property="og:url" content="https://www.facebook.com/lkgtopg/">
<meta property="fb:app_id" content="lkgtopg">

                  <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
                  <link rel="icon" type="image/png" href="img/reunion.png"/>
                   <link rel="stylesheet" type="text/css" href="css/jobform.css">
                  <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91796735-1', 'auto');
  ga('send', 'pageview');

</script>



        </head>


          <?php include 'header.php';?>


  
                    


<?php
  // Set timezone
  date_default_timezone_set('UTC');

  // Start date
  $date = date('Y-m-d', strtotime('-6 days'));
  // End date
  $end_date = date('Y-m-d');
  echo "<center>";
echo "<form action = 'Weeklyjobs.php' method='post' >";
  while (strtotime($date) <= strtotime($end_date)) {

#echo "<div class=\"container-fluid\">";
#echo "<div class=\"col-sm-12 text-center\">";

   echo " <div class=\"btn-group\" >";
   echo "<div class=\"col-sm-offset-2  text-center\">";

                 echo "<input type=\"submit\"  class=\"btn btn-default btn-xs \" value='".$date."' name='btn_submit' >";
                  $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
echo "</div>";
echo "</div>";


 }
 echo "</form>";
echo "</center>";
?>







               

<?php
        include ("db.php");
       
        if(isset($_GET['id'])) {
        $id= $_GET['id'];
        $sql = mysqli_query($conn, "SELECT *FROM jobss WHERE id='$id'");
    

        if($row = mysqli_num_rows($sql)) { 
   
          $row = mysqli_fetch_assoc($sql) or die(mysqli_error());
          
          echo "<form action='' method='POST'>";
          echo '<div class="col-lg-8 col-lg-offset-3 " >';
          #echo " <p style='font-weight:bold;padding-top:30px;'>Company Name: <br/>".$row['cname']."</p>";
          echo " <p style='font-weight:bold;padding-top:30px;font-size:16px;'>Job Date: <br/>".$row['noticedate']."</p>";
          
          echo   "<p style='font-weight:bold;font-size:16px;'> Job Title: <br/>".$row['jobtitle']."</p>";
          echo "<p style='font-weight:bold;font-size:16px;'> Company Name: <br/>".$row['cname'] ."</p>";
          echo "<p style='font-weight:bold;font-size:16px;'>Education:<br/>".$row['education']."</p>";
          echo "<p style='font-weight:bold;font-size:16px;'>Experience Level:<br/>".$row['cexp']."</p>";
          echo "<p style='font-weight:bold;font-size:16px;'>Job Location: <br/><a href=\"http://www.lkgtopg.in\" target=\"_blank\">".$row['location']."</a></p>";
         
          echo "<p style='font-weight:bold;font-size:16px;text-align:justify;'>Skills Required:<br/>".$row['skilltest']."</p>";
          #echo "<p style='font-weight:bold;font-size:16px;'>Jobs responsibilites:<br/>".$row['respon']."</p>";
          echo "<p style='font-weight:bold;font-size:16px;'>Last Date:<br/>".$row['lastdate']."</p>";
echo "<p style='font-weight:bold;font-size:22px;'><a href=".$row['apply']." target=\"_blank\"><strong>Apply Here</strong></a></p>";
       #   echo "<p style='font-weight:bold;font-size:22px;'><a href=".$row['apply']." target=\"_blank\"><strong>Apply Here</strong></a></p>";

#echo "<p style='color:black;font-weight:bold;'><a href=".$row['apply']." target=\"_blank\"><strong>Apply Here</strong></a></p>";
         # echo "<p style='color:black;font-weight:bold;'><a href="index.php" target=\"_blank\"><strong>Apply!!</strong></a></p>";
 echo "</form>";
          echo "<br>";
         
          
}
#else  ($row['id']==0) { echo "Position has filled"; }

if(empty($row['id'])) {
echo "<br>";
echo "<br>";
    echo "<center>";
echo "<strong>Sorry, the position has been closed- Please check jobs Here: <a href=\"http://lkgtopg.in/\">Click here</a></strong>";
echo "</center>";
echo "<br>";
echo "<br>";
echo "<br>";

} 




}
        
          
mysqli_close($conn);
?>






<script>
var blink_speed = 500; var t = setInterval(function () { var ele = document.getElementById('blinker'); ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); }, blink_speed);

</script>

<!--<a href="https://www.facebook.com/lkgtopg/ "><img src="img/facebook.png" height="40px" width="40px"></a>
<a href="https://plus.google.com/+lkgtopg "><img src="img/google-.png" height="40px" width="40px"></a>
<a href="https://www.linkedin.com/in/lkgtopg-jobs-333905136/ "><img src="img/linkedin.png" height="40px" width="40px"></a>
<a href="https://twitter.com/lkgtopg1 "><img src="img/twitter.png" height="40px" width="40px"></a>  -->



<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flkgtopg.in%2F&layout=button_count&size=small&mobile_iframe=true&width=75&height=20&appId" width="75" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://lkgtopg.in/" data-counter="right"></script>
<a href="https://twitter.com/lkgtopg1?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @lkgtopg1</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<br>
<!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flkgtopg&tabs=timeline&width=200&height=200&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="200" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->

 

</body>
<?php include 'footer.php';?>
</html>


