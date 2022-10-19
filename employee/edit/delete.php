<?php 
  include("../includes/database.php");

  //volunteers
  

  if (isset($_GET['volunteersid'])) {
    $volunteersid = $_GET['volunteersid'];
    $deletequeryvolunteers = "delete from volunteers where volunteersid = '$volunteersid'";
    if (mysqli_query($con,$deletequeryvolunteers)) {
      echo "<script>alert('volunteers has been deleted')</script>";
      echo "<script>window.open('../volunteers.php', '_self')</script>";
    }
  } 

  //volunteers

  //employee
  

  if (isset($_GET['employeeedit'])) {
    $employeeedit = $_GET['employeeedit'];
    $deletequeryemployee = "delete from employee where employeeid = '$employeeedit'";
    if (mysqli_query($con,$deletequeryemployee)) {
      echo "<script>alert('employee has been deleted')</script>";
      echo "<script>window.open('../employee.php', '_self')</script>";
    }
  } 

  //employee

  //donaters
  

  if (isset($_GET['donatersedit'])) {
    $donatersedit = $_GET['donatersedit'];
    $deletequerydonaters = "delete from donater where donaterid = '$donatersedit'";
    if (mysqli_query($con,$deletequerydonaters)) {
      echo "<script>alert('donater has been deleted')</script>";
      echo "<script>window.open('../donater.php', '_self')</script>";
    }
  } 

  //donaters

  //events
  

  if (isset($_GET['eventsedit'])) {
    $eventsedit = $_GET['eventsedit'];
    $deletequeryevents = "delete from events where eventsid = '$eventsedit'";
    if (mysqli_query($con,$deletequeryevents)) {
      echo "<script>alert('events has been deleted')</script>";
      echo "<script>window.open('../events.php', '_self')</script>";
    }
  } 

  //events
  
  
  //gallery

  if (isset($_GET['galleryedit'])) {
    $galleryedit = $_GET['galleryedit'];
    $deletequerygallery = "delete from gallery where galleryid = '$galleryedit'";
    if (mysqli_query($con,$deletequerygallery)) {
      echo "<script>alert('gallery has been deleted')</script>";
      echo "<script>window.open('../gallery.php', '_self')</script>";
    }
  } 
  //gallery

  //videos
  if (isset($_GET['videosedit'])) {
    $videosedit = $_GET['videosedit'];
    $deletequeryvideos = "delete from videos where videosid = '$videosedit'";
    if (mysqli_query($con,$deletequeryvideos)) {
      echo "<script>alert('videos has been deleted')</script>";
      echo "<script>window.open('../videos.php', '_self')</script>";
    }
  } 
  //videos

  //news
  

  if (isset($_GET['newsedit'])) {
    $newsedit = $_GET['newsedit'];
    $deletequerynews = "delete from news where newsid = '$newsedit'";
    if (mysqli_query($con,$deletequerynews)) {
      echo "<script>alert('news has been deleted')</script>";
      echo "<script>window.open('../news-and-events.php', '_self')</script>";
    }
  } 

  //news

  ?>
