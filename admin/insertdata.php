<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "eventsite";
$con = mysqli_connect($servername, $username, $password,$db);
if(isset($_POST['eventtype']))
{
$type=$_POST['title'];
$sql = "INSERT INTO event_type (type_title) VALUES ('{$type}')";
$result = mysqli_query($con, $sql);
	    if ($result) {
	     echo '<script> alert("Your Event Category has been added")</script>';
       echo '<script> window.open("eventlist.php","_self")</script>';
	    }
       else
        {
		   	echo"Not done";
	    }
}

if(isset($_POST['upload']))
{
        $eventtype=$_POST['event_type'];
				$eventname=$_POST['eventname'];
				$eventprice=$_POST['eventprice'];
				$file_name = $_FILES["myimage"]["name"];
      	$file_tmp =$_FILES["myimage"]["tmp_name"];
			 	$targetDir = "../images/";
				$targetFilePath = $targetDir.$file_name;
				 $query="INSERT INTO events	(event_title,event_price,img_link,type_id) VALUES ('{$eventname}','{$eventprice}','{$file_name}','{$eventtype}')";
				 $result = mysqli_query($con,$query);
					    if ($result) {
                echo '<script> alert("Your Event has been added")</script>';
                echo '<script> window.open("index.php","_self")</script>';
					    }
				       else
				        {
						   	echo"Not done";
					    }
				 move_uploaded_file($file_tmp,$targetFilePath);
}


if (isset($_GET['delete']) && $_GET['delete'] == 'delete') {
$sql="DELETE FROM event_type where type_id='$_GET[id]'";
$result = mysqli_query($con,$sql);
  if ($result) {
    echo '<script> alert("Your Event has been added")</script>';
    echo '<script> window.open("eventlist.php","_self")</script>';
  }
   else
    {
    echo"Not done";
  }
}


if (isset($_POST['update']))
 {
	$id=$_GET['id'];
$title=$_POST['title'];
$sql="update `event_type` set type_title='$title' where type_id='$id'";
$result = mysqli_query($con,$sql);
if ($result) {
	echo '<script> alert("Updated")</script>';
	// echo '<script> window.open("eventlist.php","_self")</script>';
}
 else
	{
	echo"Not done";
}


}

 ?>
