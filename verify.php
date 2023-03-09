<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lodi || verify</title>
     <link rel="stylesheet" href="./css/style.css">
     <script src="./js/jquery.js" defer></script>
     <script src="./js/script.js" defer></script>
     <script src="./js/sweetalert.min.js" ></script>
</head>
<body>
     <?php
     http://localhost/login/verify.php?email=lagos@gmail.com&token=d3ugpugfifrbifihp3d4
  if (isset($_GET['token'])) {
        require_once("./config/db.php");
        $token = $db->real_escape_string($_GET['token']);
        $email = $db->real_escape_string($_GET['email']);
        $stmt =$db->prepare("SELECT email,token FROM users WHERE email = ? AND token = ? LIMIT 1" );
        $stmt->bind_param("ss",$email,$token);
        $stmt->execute();
        $res=$stmt->get_result();
        if ($res->num_rows > 0) {
          $removeToken = $db->query("UPDATE z users SET token = ' ' ");
          $verify_report = "<h4>verification successful</h4><a href='./account.php'>Login to continue</a>";
       }
       else{
          $verify_report = "you have already completed this action.";
       }
     }   
       else{
          header ("location:./account.php");
       }
     ?>
     <form class = 'loginForm' method = 'POST' enctype = 'multipart/form-data'>
          <h1><?php echo $verify_report;?></h1>     
     </form>

</form>
</body>
</html>