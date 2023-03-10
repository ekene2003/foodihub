<?php
require_once("./config/db.php");
$page_title = "FoodiHub  ::  Tasty Food Arena  |  Users";
require_once("./includes/header.php");
require_once("./includes/nav.php");
?>
<body>
    <main class="main-body">
    <!-- ORDER SECTION -->
    <section class="order-section" id="order"></section>
        <div class="section-heading">
            <h4 class="section-title">Get Access to Order Food</h4>
            <p class="section-subtitle">Allow us help you quell that nagging hunger in record time!</p>
        </div>
        <div class="order-wrap">
            <div class="order-left formContainer">
                <form  class="order-form accountForm loginForm">
                    <input type="hidden" name="loginAction">
                    
                    <div class="form-wrap">
                        <i class="fa fa-user"></i>
                        <input type="text" name="username"placeholder="Your username/email" required>
                    </div>
                   
                    <div class="form-wrap">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" minlength="5" placeholder="Password" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fab fa-telegram"></i>
                        <input type="submit" value="Login">
                    </div>

                    <p class="section-subtitle formSwap" data-target="signupForm">Don't have an account? Signup</p>
                </form>
                <form class="order-form accountForm signupForm" style="display: none;">
                    <input type="hidden" name="signupAction">
                    <div class="form-wrap">
                        <i class="fa fa-address-card"></i>
                        <input type="text" name="firstname" placeholder="Your First Name" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-address-card"></i>
                        <input type="text" name="lastname"placeholder="Your last Name (Surname)" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-user"></i>
                        <input type="text" name="username"placeholder="Your username" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" placeholder="Your email @mail.com" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" minlength="5" placeholder="Password" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="cpassword" minlength="5" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-camera"></i>
                        <input type="file" name="image">
                    </div>
                   
                    <div class="form-wrap">
                        <i class="fab fa-telegram"></i>
                        <input type="submit" value="Create Account">
                    </div>

                    <p class="section-subtitle formSwap" data-target="loginForm">Have an account? Login</p>
                </form>

                <!-- <form id="" class="order-form userLoginForm" style="margin-top: 6rem;">
                    <div class="form-wrap">
                        <i class="fa fa-address-card"></i>
                        <input type="text" name="username" placeholder="User name" required>
                    </div>

                    <div class="form-wrap">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="user_password" minlength="5" placeholder="***********">
                    </div>

                    <div class="form-wrap">
                        <i class="fab fa-telegram"></i>
                        <input type="submit"name="user_login" value="Login">
                    </div>

                </form>
 -->


                
                
            </div>
            <div class="order-right">

            </div>
        </div>
    </section>
    </main>
   <?php require_once("./includes/footer.php"); ?>
    <script>
        let catBtns = document.querySelectorAll('.category-btn');
        let dishCards = document.querySelectorAll('.dish-card');
        catBtns.forEach(function(catBtn){
            catBtn.onclick = function(e){
                for(let i of catBtns) i.className = 'category-btn';
                this.classList.toggle("active");
                let category = this.dataset.category;
                for(let i of dishCards) {
                    i.style.display = "block";
                    i.className = "dish-card";
                }
                if(category != 'all') for(let i of dishCards) if(i.dataset.type != category){
                    i.classList.toggle('hide');
                    setTimeout(() => i.style.display = "none", 500);
                }
            }
        })

        let navToggle = document.querySelector('.nav-toggle');
        let navBar = document.querySelector('.nav-bar');
        navToggle.onclick = () => {
            navBar.classList.toggle('nav-active');
        }
    </script>
</body>
</html>