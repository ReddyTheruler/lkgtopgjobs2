<!DOCTYPE html>
<html lang="en">
<head>
<title>Search - Today Walkins/Interviews July 2018</title>

        <meta name="publisher" content="www.lkgtopg.in">
        <meta name="distribution" content="global">
        <meta name="Author" content="LkgtoPGJobs">
        <meta name="copyright" content="http://www.lkgtopg.in">
        <meta name="owner" content="contact@lkgtopg.in">
        <meta name="RATING" content="General">
        <meta name="short-description" content="Jobs">
        <meta name="revisit-after" content="1 day">
        <meta name="description" content="freshers jobs,pune jobs,bangalore jobs,chennai jobs,noida jobs,mumbai jobs,it jobs,bank jobs, govt. jobs,post a job, interviews, walk-ins,hyderabad jobs">
<meta property="og:type" content="article">
<meta property="og:title" content="lkgtopg">
<meta property="og:description" content="freshers jobs,pune jobs,bangalore jobs,chennai jobs,noida jobs,mumbai jobs,it jobs,bank jobs, govt. jobs,post a job, interviews, walk-ins,hyderabad jobs.">
<meta property="og:url" content="https://www.facebook.com/lkgtopg/">
<meta property="fb:app_id" content="lkgtopg">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="lkgtopg">
<meta name="twitter:title" content="lkgtopg">
<meta name="twitter:description" content="freshers jobs,pune jobs,bangalore jobs,chennai jobs,noida jobs,mumbai jobs,it jobs,bank jobs, govt. jobs,post a job, interviews, walk-ins,hyderabad jobs.">
<link rel="publisher" href="https://plus.google.com/113049606204148531483">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/reunion.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/style1.css">
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
</div>
</div>
<br>








</center>




<?php
include ("db.php");
if(isset($_POST['button1id']))      { 

$searchTerm = $_POST['term'];

$sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE jobtitle LIKE '%".$searchTerm."%' OR location LIKE '%".$searchTerm."%' OR 

education LIKE '%".$searchTerm."%' OR
cname LIKE '%".$searchTerm."%' OR 
cexp LIKE '%".$searchTerm."%' OR 
respon  LIKE '%".$searchTerm."%' OR 
skilltest LIKE '%".$searchTerm."%' OR
noticedate LIKE '%".$searchTerm."%'

 ORDER BY id DESC LIMIT 32

 ");

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




else
{ 

  $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Pune' ORDER BY id DESC LIMIT 32 ");


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
<!--<center> <a href="http://lkgtopg.in/aboutus.php" target="_blank">About Us</a>  | <a href="http://lkgtopg.in/privacy.php" target="_blank">Privacy Policy</a> | <a href="http://lkgtopg.in/contact.php" target="_blank">Contact Us </center>
<center><strong>&copy; 2017 LKGtoPG. All Rights Reserved | Design by <a href="http://lkgtopg.in/">LKGtoPG</a></strong></center>
-->


<center> <a href="http://lkgtopg.in/aboutus.php" target="_blank">About Us</a>  | <a href="http://lkgtopg.in/privacy.php" target="_blank">Privacy Policy</a> | <a href="http://lkgtopg.in/contact.php" target="_blank">Contact Us </center>
<center><strong>&copy; 2017 LKGtoPG. All Rights Reserved | Design by <a href="http://lkgtopg.in/">LKGtoPG</a></strong></center>
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





