<!DOCTYPE html>
<?php
session_start();
include "db/connect.php";
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin_Panel</title>
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
          <div class="panel-heading">Event Type List</div>
          <div class="panel-body">
            <form  action="insertdata.php">
                  <div class="form-group">
                      <?php
                          echo '<table class="table table-hover" value = echo"$row1[0]" name="tableid">
                            <tr>
                            <th>S.N</th>
                            <th>Event_Names</th>
                            </tr>';
                            $sql = "SELECT type_id, type_title FROM event_type";
                            $result = $con->query($sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                            <td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
                            <td><a  class="btn btn-primary"  href="insertdata.php?id='.$row[0].'&&delete=delete">Delete<a/>
                            <a  class="btn btn-primary" name="delete" href=editdata.php?id='.$row[0].'>Edit<a/>
                            </td>
                            </tr>';
                            }
                            echo '</table>';
                          ?>
                        </div>
                      <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                     </form>
                     </div>
                    </div>
                  </div>
              </div>
  </body>
</html>
