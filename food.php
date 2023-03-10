<?php
require_once("./config/db.php");
if(!isset($_SESSION['user_id'])) header("location: ./user.php");
$page_title = "foodihub :: Tasty Food Arena";
require_once("./includes/header.php"); 
?>
<?php require_once("./includes/nav.php")?>
    <main class="main-body">   
    <!-- ORDER SECTION -->
    <section class="order-section" id="order">
        <div class="section-heading">
            <h4 class="section-title">Create a Food</h4>
            <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis blanditiis, illo commodi accusantium pariatur eveniet.</p>
        </div>
        <div class="order-wrap">
            <div class="order-left">
                <form action="" class="order-form" id="foodForm">
                    <input type="hidden" name="vendor_id">
                    <input type="hidden" name="createFood">
                    <div class="form-wrap">
                <i class="fa fa-address-card"></i>           
                 <input type="text" id="food_name" placeholder ="Food name" name = "foodname">
                    </div>
                     <div class="form-wrap">
                                  <i class="fa fa-money-bill"></i>
                                  <input type="number" step=0.5 name="price" id="price">
                    </div>
                            <div class="form-wrap">
                                <i class="fa fa-shopping-basket"></i>
                   <input type="number" name="quantity" id="quantity" placeholder="quantity avaliable for sale">
                    </div>
                                    <div class="form-wrap">
                                <i class="fa fa-cutlery"></i>
                   <input type="file" name="image" id="" placeholder="quantity avaliable for sale" required >
                    </div>
                    <div class="form-wrap">
                            <i class="fa fa-cutlery"></i>
                            <select name="category_id" id="" placeholder="quantity avaliable for sale" required >
                                    <?php
                                //  $query ="SELECT category_id,name FROM category";
                                $category = selectFcn("category","category_id ,name");
                                while( $row = $category->fetch_assoc()){
                                    $category_id = $row['category_id'];
                                    $name= $row['name'];
                                    echo "<option value ='$category_id'>$name</option>";
                                }
                                ?>
                            </select>
                    </div>
                <div class="form-wrap">
          <i class="fa fa-comment"></i>
          <textarea name="description" placeholder="Enter a good description of the food" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="form-wrap">
                        <i class="fab fa-cutlery"></i>
                        <input type="submit" value="Create food">
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