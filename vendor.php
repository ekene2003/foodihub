        <?php
        require_once("./config/db.php");
        $page_title = "foodihub :: Tasty Food Arena";
        require_once("./includes/header.php"); 
        ?>
        <?php require_once("./includes/nav.php")?>
            <main class="main-body">   
            <!-- ORDER SECTION -->
            <section class="order-section" id="order">
                <div class="section-heading">
                    <h4 class="section-title">Become a vendor</h4>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis blanditiis, illo commodi accusantium pariatur eveniet.</p>
                </div>
                <div class="order-wrap">
                    <div class="order-left">
                    <form action="" class="order-form" id="foodform" enctype="multipart/form-data">
                        <div class="form-wrap">
                            <i class="fa fa-box"></i>
                                     <input type="text" id="vendorname" placeholder ="vendor name">
                                  </div>
                    <div class="form-wrap">
                        <i class="fa fa-envelope"></i>
                                 <input type="email" id="email" placeholder ="Enter Email">
                    </div>        
                    <div class="form-wrap">
                        <i class="fa fa-lock"></i>       
                                  <input type="password" name="" id="password" placeholder="*********" required>
                    </div>
                    <div class="form-wrap">
                             <i class="fa fa-cutlery"></i>
                            <input type="submit" value="become a vendor">
                        </div>
                    
            </form>
                </div>
                <div class="order-right">
                </div>
            </div>
        </section>
        </main>
        <?php require_once('./includes/footer.php');?>
    
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