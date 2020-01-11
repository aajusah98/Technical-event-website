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

<div class="container" >
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading"><p>Enter New Event Name</p></div>
      <div class="panel-body">
          <form  action="insertdata.php" method="post" >
         <div class="form-group">
           <label for="exampleInputEmail1"><p class="textsize">Give New Event Type</p></label>
           <input type="text"  name="title" class="form-control"  placeholder="Enter Event Type">
         </div>
         <button type="submit" class="btn btn-primary" name="eventtype">Submit</button>
       </form></div>
    </div>
<br><br>
    <div class="container" >
      <div class="panel-group">
        <div class="panel panel-primary">
          <div class="panel-heading">Enter Event Details</div>
          <div class="panel-body">
            <form  action="insertdata.php" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                 <label for="Event Name">Event Name</label>
                 <input type="text"  name="eventname" class="form-control"  placeholder="Enter Event Name">
               </div>
                <div class="form-group">
                    <label for="Event Price">Enter Event Price</label>
                    <input type="number"  name="eventprice" class="form-control"  placeholder="Enter Event Price">
                </div>
                <div class="form-group">
                     <label for="Image">select image</label>
                     <input type="file"  name="myimage" class="form-control" >
                  </div>
                  <div class="form-group">
                    <?php
                         $sql = "SELECT type_id, type_title FROM event_type";
                         $result = $con->query($sql);
                      ?>
                    <select name="event_type" class="form-control">
                    <?php while($row1 = mysqli_fetch_array($result)):;?>
                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                    <?php endwhile;?>
                    </select>
                  </div>
                      <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                     </form>
                     </div>
                    </div>
                  </div>
                  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
  </body>
</html>
