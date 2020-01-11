<!DOCTYPE html>
<?php
session_start();
include "db/connect.php";
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin_Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-nav{
            margin:4px;
        }
    </style>
 </head>
  <body>
<div class="bs-nav">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand">
                 <img src="images/logo.png" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="eventlist.php" class="nav-item nav-link">UPDATE</a>
                </div>
            </div>
        </nav>
        </div>


<?php
$sql = "SELECT type_id, type_title FROM event_type where type_id='$_GET[id]'";
$result = $con->query($sql);
$row=mysqli_fetch_array($result);
 ?>
<div class="container" >
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading"><p>Enter New Event Name</p></div>
      <div class="panel-body">
          <form  action="insertdata.php?id=<?php echo $_GET['id'];?>" method="POST" >
         <div class="form-group">
           <label for="EventName"><p class="textsize">Give New Event Type</p></label>
           <input type="text"  name="title" class="form-control"  placeholder="Enter Event Type" value="<?php echo $row[1]; ?>">
         </div>
         <button type="submit" class="btn btn-primary" name="update">Submit</button>
       </form></div>
    </div>
    </body>
    </html>
