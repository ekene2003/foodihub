<?php
$page_title = "foodihub :: Tasty Food Arena";
require_once("./includes/header.php") 
?>
<?php require_once("./includes/nav.php")?>
    <main class="main-body">
        <section class="section-slide">
            <div class="slide-wrap">
                <aside class="slide-card">
                    <div class="slide-card">
                        <h4 class="slide-subtext">Welcome Hungry!</h4>
                        <h2 class="slide-text">FoddiHub is the Place for your Cravings</h2>
                        <p class="slide-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi dicta voluptatibus iste veritatis doloremque.</p>
                        <a href="#menu" class="slide-cta"><i class="fa fa-search"></i> Find Food</a>
                    </div>
                    <!-- <div class="slide-right">
                        <div class="slide-icon">
                           <img src="./images/foods/download(1).jpg" alt="" class="slide-image">
                        </div>
                    </div> -->
                </aside>
            </div>
        </section>

        <!-- MENU SECTION -->

        <section class="menu-section">
            <div class="section-heading">
                <h4 class="section-title">Our Menu</h4>
                <p class="section-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nesciunt illo optio reiciendis consectetur distinctio!</p>
            </div>
            <div class="menu-wrap">
                <aside class="menu-card">
                    <img src="./images/foods/download(2).jpg" alt="" class="menu-image">
                    <div class="menu-info">
                        <div class="menu-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="menu-title">Starter Pack</h3>
                        <h4 class="menu-price">  $100 - $500</h4>
                        <p class="menu-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="menu-card">
                    <img src="./images/foods/download(5).jpg" alt="" class="menu-image">
                    <div class="menu-info">
                        <div class="menu-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Min Course </span>
                        </div>
                        <h3 class="menu-title">Main Course</h3>
                        <h4 class="menu-price">  $1000 - $5000</h4>
                        <p class="menu-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="menu-card">
                    <img src="./images/foods/images.jpg" alt="" class="menu-image">
                    <div class="menu-info">
                        <div class="menu-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Dessert </span>
                        </div>
                        <h3 class="menu-title">Dessert Combo</h3>
                        <h4 class="menu-price">  $50 - $100</h4>
                        <p class="menu-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
            </div>
        </section>

        <!-- DISHES SECTION -->
        <section class="dish-section">
            <div class="section-heading">
                <h4 class="section-title">Our Dishes</h4>
                <p class="section-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nesciunt illo optio reiciendis consectetur distinctio!</p>
            </div>
            <div class="dish-category">
                <button class="category-btn active" data-category="all">All</button>
                <button class="category-btn" data-category="starter">Starter</button>
                <button class="category-btn" data-category="main">Main Course</button>
                <button class="category-btn" data-category="dessert">Dessert</button>
            </div>
            <div class="dish-wrap">
                <aside class="dish-card" data-type="starter">
                    <img src="./images/foods/download(2).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="main">
                    <img src="./images/foods/download(6).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="dessert">
                    <img src="./images/foods/download(4).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="starter">
                    <img src="./images/foods/download(3).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="dessert">
                    <img src="./images/foods/download(2).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="starter">
                    <img src="./images/foods/download(2).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="main">
                    <img src="./images/foods/download(6).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="dessert">
                    <img src="./images/foods/download(4).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="starter">
                    <img src="./images/foods/download(3).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="dessert">
                    <img src="./images/foods/download(2).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="starter">
                    <img src="./images/foods/download(2).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="main">
                    <img src="./images/foods/download(6).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="dessert">
                    <img src="./images/foods/download(4).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="starter">
                    <img src="./images/foods/download(3).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                <aside class="dish-card" data-type="dessert">
                    <img src="./images/foods/download(2).jpg" alt="" class="dish-image">
                    <div class="dish-info">
                        <div class="dish-label">
                            <span>Food <i class="fa fa-chevron-right"></i></span>
                            <span>Starter </span>
                        </div>
                        <h3 class="dish-title">Starter Pack</h3>
                        <div class="dish-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-total">56</span>
                        </div>
                        <h4 class="dish-price">  $100 - $500</h4>
                        <p class="dish-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, necessitatibus.</p>
                    </div>
                </aside>
                
            </div>
    </section>
       
    <!-- ORDER SECTION -->
    <section class="order-section" id="order">
        <div class="section-heading">
            <h4 class="section-title">Place an order</h4>
            <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis blanditiis, illo commodi accusantium pariatur eveniet.</p>
        </div>
        <div class="order-wrap">
            <div class="order-left">
                <form action="" class="order-form">
                    <div class="form-wrap">
                        <i class="fa fa-address-card"></i>
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-phone"></i>
                        <input type="text" placeholder="Your +234*******" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-envelope"></i>
                        <input type="text" placeholder="Your email @mail.com" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-map-marker"></i>
                        <textarea placeholder="Enter your location e.g Opposite H-mEDIX, Off Gate Close" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-wrap">
                        <i class="fab fa-telegram"></i>
                        <input type="submit" value="Place Order">
                    </div>
                </form>
            </div>
            <div class="order-right">

            </div>
        </div>
    </section>
    </main>
    <?php require_once("./includes/footer.php")?>
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
        let navToggle = document.querySelector(".nav-toggle");
            let navBar = document.querySelector(".nav-bar");
            navToggle.onclick = ()=>{
                navBar.classList.toggle("nav-active");
            } 

    </script>
</body>
</html>