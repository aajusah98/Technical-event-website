<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "cssjs/css.php";
?>
<?php
include "includes/header.php";
?>
<style>
.field-border{
  border-radius:20px;

}
</style>

<body>
  <section class="ftco-section contact-section ftco-degree-bg">

  </section>
<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
      <div class="col-md-8" id="signup_msg">
         <!--Alert from signup form-->
       </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
              <div class="form-group" >
                <form  class="was-validated" method="post">
                <input type="text" name="f_name" class="form-control field-border" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control field-border" placeholder="Your Email"  required >

              </div>
              <div class="form-group">
                <input type="tel" class="form-control field-border" placeholder="Phone" name="number"   pattern="[7-9]{1}[0-9]{9}"  required>
              </div>
              <div class="form-group">
                <input type="text" name="college" class="form-control field-border" placeholder="Your College Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="Branch" class="form-control field-border" placeholder="Courese Type" required>
              </div>
              <div class="form-group">
                <?php
                     $sql = "SELECT event_id, event_title FROM events";
                     $result = $con->query($sql);
                  ?>
                <select name="event_name" class="form-control field-border">
                <?php while($row1 = mysqli_fetch_array($result)):;?>
                <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                <?php endwhile;?>
                </select>
              </div>
              <div class="form-group">
                <input  value="Register" type="submit" name="signup_button" class="btn btn-primary py-3 px-5 " required>
              </div>
            </form>
            <?php
          if(isset($_POST['signup_button']))
          {
            $name=$_POST['f_name'];
            $email=$_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "pleas enter valid email";
}
            $phone=$_POST['number'];
            $college=$_POST['college'];
            $branch=$_POST['Branch'];
            $eventname=$_POST['event_name'];
            $sql="INSERT INTO users (username,email,phone,college,coursetype,event_name) VALUES ('{$name}','{$email}','{$phone}','{$college}','{$branch}','{$eventname}')";
            $result = mysqli_query($con,$sql);
                 if ($result) {
                   echo '<script> alert("Congratulation You Have benn register in AAYAM2020 \n You can contact directly to college")</script>';
                   echo '<script> window.open("index.php","_self")</script>';
                 }
                  else
                   {
                   echo"Not done";
                 }


          }


            ?>
      </div>



    </section>





<?php
include "includes/footer.php";
?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php
  include "cssjs/js.php";
  ?>
  </body>
</html>
