  <!DOCTYPE html>
<html lang="en">
  <head>
 <title>IT walkins in India Interviews Freshers Today Jobs August 2018</title>
        <meta name="publisher" content="www.lkgtopg.in">
        <meta name="distribution" content="global">
        <meta name="Author" content="LkgtoPGJobs">
        <meta name="copyright" content="http://www.lkgtopg.in">
        <meta name="owner" content="contact@lkgtopg.in">
        <meta name="RATING" content="General">
        <meta name="short-description" content="Jobs">
        <meta name="revisit-after" content="1 day">
        <meta name="description" content="
IT walkins in pune Interviews Freshers 
freshers jobs, Pune jobs
lkgtopg todaywalkins tommorow walkins graduate offcampus drive btech degree trainee in hyderabad jobs bangalore jobs mumbai jobs chennai jobs noida jobs delhi jobs pune jobs kolkata jobs ahmedabad jobs bhubneshwar jobs allindia jobs freshers software jobs 2018


">
<meta property="og:type" content="article">
<meta property="og:title" content="lkgtopg">
<meta property="og:description" content="freshers jobs, Pune jobs
pune jobs 2018,
pune jobs for engineer,
Pune walkins for freshers,
Pune walkins for experienced,
Pune walkins for freshers 2018 jobs">
<meta property="og:url" content="https://www.facebook.com/lkgtopg/">
<meta property="fb:app_id" content="lkgtopg">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="lkgtopg">
<meta name="twitter:title" content="lkgtopg">
<meta name="twitter:description" content="lkgtopg todaywalkins tommorow walkins graduate offcampus drive btech degree trainee in hyderabad jobs bangalore jobs mumbai jobs chennai jobs noida jobs delhi jobs pune jobs kolkata jobs ahmedabad jobs bhubneshwar jobs allindia jobs freshers software jobs 2018">
<link rel="publisher" href="https://plus.google.com/113049606204148531483">
<link rel="stylesheet" type="text/css" href="css/style.css">     

       

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91796735-1', 'auto');
  ga('send', 'pageview');

</script>





  </head>
  <body>
      <?php include 'header.php';?>
               
                
               
               
               

<div class="container">
<div class="col-md-12">
  <form action="todaywalkins.php"  method="POST" enctype="multipart/form-data" >
    <div class="input-group add-on">

      <input id="term"name="term" class="form-control" placeholder="Search Skills or Location or keywords"  type="text" required>
      <div class="input-group-btn">
        <button id="button1id" name="button1id" class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>

</center>

<br/>


</body>
</html>


<?php
include ("db.php");
if(isset($_POST['Hyderabad']))      { 

$sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Hyderabad' ORDER BY id DESC LIMIT 32");


echo "<div class=\"table-responsive\">";
echo "<table width=\"100%\" align=\"center\"  class=\"table-bordered\" class=\"fariffsTbl\">";
 echo "<tr align=\"center\">";
  echo   "<th align=\"center\"><h5 align=\"center\">Notice Date</h5></th>";
  echo "<th align=\"center\"><h5 align=\"center\">Job Title</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">Location</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">Education</h5></th>";
    echo "<th align=\"center\"><h5 align=\"center\">Last Date</h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Apply</h5></th>";

if($row = mysqli_num_rows($sql)) { 

while ($row = mysqli_fetch_assoc($sql)){

          echo '<div class="col-md-4">';
          echo "<tr align=\"center\">";
          echo "<td >".$row['noticedate']."</td>"; 
          echo "<td>".$row['jobtitle']."</td>"; 
          echo "<td>".$row['location']."</td>"; 
          echo "<td>".$row['education']."</td>";
          echo "<td>".$row['lastdate']."</td>";
          echo "<td>"."<a href='jobdetail.php?id=".$row['id'] . "' target='_blank'><h4>Apply</h4></a>"."</td>"; 
        echo "</tr>";

}
          
}

}

else
{ 

  $sql = mysqli_query($conn, "SELECT *FROM jobss WHERE others='others'  ORDER BY id DESC LIMIT 32 ");


echo "<div class=\"container\">";
echo "<div class=\"row\">";
  echo "<div id=\"no-more-tables\">";
            echo "<table class=\"col-md-12 table-bordered table-striped table-condensed cf\">";
        		echo "<thead class=\"cf\">";	
	echo "<tr>";
 #echo "<tr align=\"center\">";
  echo   "<th class=\"numeric\" align=\"center\" ><h5 align=\"center\"><strong>Notice Date</strong></h5></th>";
  echo "<th align=\"center\" class=\"numeric\" ><h5 align=\"center\"><strong>Job Title</strong></h5></th>";
   echo " <th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Location</strong></h5></th>";
   echo " <th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Education</strong></h5></th>";
    echo "<th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Last Date</strong></h5></th>";
 echo "<th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Apply</strong></h5></th>";


echo "</tr>";
echo "</thead>";
echo "<tbody>";


echo "</tr>";
 if($row = mysqli_num_rows($sql)) { 

while ($row = mysqli_fetch_assoc($sql)){

          echo '<div class=\"col-md-4\">';
          echo "<tr align=\"center\">";
          echo "<td data-title=\"NoticeDate\" class=\"numeric\">".$row['noticedate']."</td>"; 
          echo "<td data-title=\"JobTitle\" class=\"numeric\">".$row['jobtitle']."</td>"; 
          echo "<td data-title=\"Location\" class=\"numeric\">".$row['location']."</td>"; 
          echo "<td data-title=\"Education\" class=\"numeric\">".$row['education']."</td>";
          echo "<td data-title=\"LastDate\"class=\"numeric\">".$row['lastdate']."</td>";
          echo "<td data-title=\"Apply\" class=\"numeric\">"."<a href='jobdetail.php?id=".$row['id'] . "' target='_blank'><h4>Apply</h4></a>"."</td>"; 
        echo "</tr>";
}
          
}
	
	
        		echo "</tbody>";
        	echo "</table>";
       echo " </div>";
    echo "</div>";
}



  




$conn->close();
?>


<br>






<?php include 'footer.php';?>



<Style>

@media only screen and (max-width: 800px) {
    
    /* Force table to not be like tables anymore */
	#no-more-tables table, 
	#no-more-tables thead, 
	#no-more-tables tbody, 
	#no-more-tables th, 
	#no-more-tables td, 
	#no-more-tables tr { 
		display: block; 
	}
 
	/* Hide table headers (but not display: none;, for accessibility) */
	#no-more-tables thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
 
	#no-more-tables tr { border: 1px solid #ccc; }
 
	#no-more-tables td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
		white-space: normal;
		text-align:left;
	}
 
	#no-more-tables td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		text-align:left;
		font-weight: bold;
	}
 
	/*
	Label the data
	*/
	#no-more-tables td:before { content: attr(data-title); }
}

</style>








