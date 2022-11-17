<?php
  include_once "config.php";
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          $sql = mysqli_query($conn, "SELECT email FROM user WHERE email = '{$email}'");
          if(mysqli_num_rows($sql) > 0){
            echo "$email - This email is already exist";
          }else{
            if(isset($_Files['image'])){
                $img_name = $_Files['image']['name'];
                $img_type = $_Files['image']['type'];
                $tmp_name = $_Files['image']['tmp_name'];

                $img_exploded = explode('.', $img_name);
                $imf_ext = end($img_explode);

                $extension = ['png', 'jpg', 'jpeg'];
                if(in_array($img_ext, $extensions) === true){
                  $time = time();
                  $status = "Active now"
                }
            }else{
              echo "Please select an image file !"
            }
          }
      }else{
        echo "$email - This is not a valid email";
      }
  }else{
    echo "All inputs field is required";
  }
 ?>
