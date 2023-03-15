
      <?php
      require_once("../config/db.php");
      // require_once("./mailmgt.php");
      $users_table = "users";
      $folder = $_SERVER['DOCUMENT_ROOT']."/foodihub";
      if(isset($_POST['loginAction'])){
      $username = $db->real_escape_string($_POST['username']);
      $username = strtolower($username);
      $password = $db->real_escape_string($_POST['password']);
      $password = crypt($password, "p55w0rd");
      $stmt = $db->prepare("SELECT CONCAT(firstname, ' ', lastname) AS fullname, email,username,user_id,token AS user_token,status,image FROM $users_table WHERE username = ? OR email = ? AND password = ? LIMIT 1");
      $stmt->bind_param("sss", $username, $username, $password);
      $stmt->execute();
      $res = $stmt->get_result();
      if($res->num_rows > 0){
         $row = $res->fetch_assoc();
         $_SESSION ['fullname'] = $row["fullname"];
         $_SESSION ['email'] = $row["email"];
         $_SESSION ['username'] = $row["username"];
         $_SESSION ['user_id'] = $row["user_id"];
         $user_token = $row["user_token"];
         $status = $row["status"];
         $_SESSION ['image'] = $row["image"];
         if($user_token != ""){
            echo json_encode(['status' => false, 'title' => 'Account Not Verified', 'comment' => 'Please, check your email to complete your registration', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
         }
      else if($status == 3){
            echo json_encode(['status' => false, 'title' => 'Account Suspended', 'comment' => 'Please contact the admin if this is wrong', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
         }
         else   echo json_encode(['status' => true, 'title' => "Welcome back $username", 'comment' => 'Please wait while we redirect you to your dashboard...', 'icon' => 'success', 'btn' => 'btn btn-success'],true);
      }
      else{
         echo json_encode(['status' => false, 'title' => 'Invalid Username/Password', 'comment' => 'We do not have a record of this details', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
      }
      }


      if(isset($_POST['signupAction'])){
      // var_dump($_POST);
      // var_dump($_FILES);
      // die();
      $firstname = $db->real_escape_string($_POST['firstname']);
      // $firstname = ucfirst($firstname); 
      $lastname = $db->real_escape_string($_POST['lastname']);
      // $lastname = ucfirst($lastname);
      $fullname = ucwords("$firstname $lastname");
      $username = $db->real_escape_string($_POST['username']);
      $username = strtolower($username);
      $email = $db->real_escape_string($_POST['email']);
      $email = strtolower($email);
      $password= $db->real_escape_string($_POST['password']);
      $password = crypt($password, "p55w0rd");


      // password encryption and hashing mechanisms in php:
      // md5($password), sha1($password, FALSE); crypt ($password, "secretCombination")
      // md5()
      //sha1()
      //crypt()

      //   $checkUser = $db->query("SELECT username,email FROM $users_table WHERE username = '$username' OR email = '$email'");
      $stmt = $db->prepare("SELECT username,email FROM $users_table WHERE username = ? OR email = ?");
      $stmt->bind_param("ss",$username, $email);
      $stmt->execute();
      $checkUser = $stmt->get_result();
      if($checkUser->num_rows > 0){
         $row = $checkUser->fetch_assoc();
         $foundUsername = $row['username'];
         $foundEmail = $row['email'];
         if($email == $foundEmail && $username == $foundUsername) echo json_encode(['status' => false, 'title' => ' Username/email taken', 'comment' => 'A member with this Username/email already exists. Please try another', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
         else if($username == $foundUsername)echo json_encode(['status' => false, 'title' => 'Username Taken', 'comment' => 'A member with this username already exists. Please try another', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
         else echo json_encode(['status' => false, 'title' => 'Email taken', 'comment' => 'A member with this email already exists. Please try another', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
      }else{
         // file upload in php

         $image = $_FILES['image']['name'];
         $filename = basename($image);
         $filename = strtolower($filename);
         $valid_ext = ['jpg', 'jpeg', 'png'];
         $ext = pathinfo($filename, PATHINFO_EXTENSION);
         if(in_array($ext, $valid_ext)){
            $token = str_shuffle("82734bha9sydyrf9qw8e4");
            $image_report = "";
            try {
               $db->autocommit(false);//starting a Transaction
            $userImage = "$username.$ext";
               $insertStmt = $db->prepare("INSERT INTO $users_table (firstname,lastname,password,username,email,image,token) VALUES (?,?,?,?,?,?,?)");
               $insertStmt->bind_param("sssssss",$firstname,$lastname,$password,$username,$email,$userImage,$token);
               $insertStmt->execute();
               $res = $insertStmt->get_result();
               // $altbody = "http://www.jumia.com/verify?"
               $altbody = "localhost/login/verify.php?email=$email&token=$token";
               $body = <<<_HTML
               <section style="box-sizing: border-box">
                  <h3 style="background: #097; color: white;">Welcome $fullname</h3>
                  <p style="line-height: 2; padding: 1rem; color: #afafaf;">Please click on the link below to complete your profile</p>
                  <a href="$altbody" style="background: #097; border: radius 2rem; color: white;">Verify</a>
                  
               </section>
      _HTML;
               $mail = new Mailer($email, "Login Site: Email Verification", $body, $altbody);
               $mail->sendMail();
               $db->autocommit(true);//Ending the Transaction
               if($res){
                  $upload = move_uploaded_file($_FILES['image']['tmp_name'], "$folder/image/users/$username.$ext");
                  if(!$upload) $user_report .= "Image upload unsuccessful. ";
                  }
                  echo json_encode(['status' => true, 'title' => "Welcome  $fullname", 'comment' => "${image_report}Please, verify your email to continue.", 'icon' => 'success', 'btn' => 'btn btn-success'],true);         
               } catch (\Throwable $th) {
                     //throw $th;
                  echo json_encode(['status' => false, 'title' => 'Unable to Create Account', 'comment' => "Darn! We are unable to create your account.$th", 'icon' => 'error', 'btn' => 'btn btn-error'],true);
                  }
            
         }
         else{
            echo json_encode(['status' => false, 'title' => 'Invalid image extension', 'comment' => 'Invalid Image extension. Only jpg, jpeg or png are allowed', 'icon' => 'error', 'btn' => 'btn btn-error'],true);
         }
         
      }
      }
      ?>



