<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          body{
               display: flex;
               gap:2rem;
               margin: 2rem;
          }
          label{
               margin-top: 1rem;
          }
          .food{
               display:flex;
               flex-direction: column;
               width: 20%;
               padding: 1rem;
               background: tan;
          }
          .user{
               display:flex;
               flex-direction: column;
               width: 20%;
               padding: 1rem;
               background: tan;
          }
          .vendor{
               display:flex;
               flex-direction: column;
               width: 20%;
               padding: 1rem;
               background: tan;
          
          }
     </style>
</head>
<body>
     <form action="" method="post" class="food">

     </form>
          <form action="" method="post" class="user">
          <label for="firstname">First Name:</label>
          <input type="text" id="firstname" placeholder ="First name">
          <label for="lastname">last Name:</label>
          <input type="text" id="lastname" placeholder ="last name">
          <label for="username">username:</label>
          <input type="text" id="username" placeholder ="username">
          <label for="email">Email:</label>
          <input type="email" id="email" placeholder ="Enter Email">
          <label for="password">password:</label>          
          <input type="password" name="" id="password">
          <label for="Image">Image:</label>
          <input type="file" name="" id="image">
     </form>
     <form action="" class="vendor">
                  <label for="vendorname">vendorname:</label>
          <input type="text" id="vendorname" placeholder ="vendorname">
          <label for="email">Email:</label>
          <input type="email" id="email" placeholder ="Enter Email">
          <label for="password">password:</label>          
          <input type="password" name="" id="password">
               <label for="Image">Image:</label>
          <input type="file" name="" id="image">
     </form>
</body>
</html>