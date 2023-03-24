<?php
require_once("./config/db.php");
if(!isset($_SESSION['user_id'])) header("location: ./user.php");
$page_title = "foodihub :: Tasty Food Arena | foods";
require_once("./includes/header.php"); 
 require_once("./includes/nav.php");
$foodname=$price=$quantity=$image=$category_id=$description="";
$btnText = "Create Food";
$headingText = "Create";
$imageText = "Required";
$triggerText = "CreateFood";
$backgroundImage = "";
if (isset($_GET['food'])) {
    $food_id = $_GET['food'];
    $user_id = $_SESSION['user_id'];
    $findFood  = selectFcn("foods","food_id,vendor_id,foodname,price,quantity,description,category_id,image","WHERE food_id = ? AND vendor_id = ?","ii",$food_id,$user_id );
    if ($findFood->num_rows > 0) {
           $row = $findFood->fetch_assoc();
           $foodname = $row["foodname"];
           $price = $row["price"];
           $quantity = $row["quantity"];
           $description = $row["description"];
           $category_id = $row["category_id"];
           $image = $row["image"];
           $btnText = "Update Food";
           $headingText = "Update";
           $imageText = "";
           $triggerText = "updateFood";
           $backgroundImage = "style = 'background-image:url(\"./images/foods/$image\");'";
    }
}
?>
    <main class="main-body">   
    <!-- ORDER SECTION -->
    <section class="order-section" id="order">
        <div class="section-heading">
            <h4 class="section-title"><?= $headingText?> a Food</h4>
            <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis blanditiis, illo commodi accusantium pariatur eveniet.</p>
        </div>
        <div class="order-wrap">
            <div class="order-left">
                <form action="" class="order-form" id="foodForm">
                    <input type="hidden" name="vendor_id">
                    <input type="hidden" name="<?=$triggerText?>">
                    <div class="form-wrap">
                <i class="fa fa-address-card"></i>           
                 <input type="text" id="food_name" placeholder ="Food name" name= "foodname" value= "<?=$foodname?>">
                    </div>
                     <div class="form-wrap">
                                  <i class="fa fa-money-bill"></i>
                                  <input type="number" step=0.5 name="price" value="<?=$price?>" id="price" placeholder= "price of food">
                    </div>
                            <div class="form-wrap">
                                <i class="fa fa-shopping-basket"></i>
                   <input type="number" name="quantity" value="<?=$quantity?>" id="quantity" placeholder="quantity avaliable for sale">
                    </div>
                                    <div class="form-wrap">
                                <i class="fa fa-cutlery"></i>
                   <input type="file" name="image" id="" value = "<?= $image?>"<?= $imageText?>>
                    </div>
                    <div class="form-wrap">
                            <i class="fa fa-cutlery"></i>
                            <select name="category_id" value="<?=$category_id?>" id="" placeholder="quantity avaliable for sale" required >
                                    <?php
                                //  $query ="SELECT category_id,name FROM category";
                                $food_category = $category_id;
                                $category = selectFcn("category","*");
                                while( $row = $category->fetch_assoc()){
                                    $selected = $food_category == $row['category_id']?"selected":"";
                                    $category_id = $row['category_id'];
                                    $name= $row['name'];
                                    echo "<option $selected value ='$category_id'>$name</option>";
                                }
                                ?>
                            </select>
                    </div>
                <div class="form-wrap">
          <i class="fa fa-comment"></i>
          <textarea name="description"  placeholder="Enter a good description of the food" id="" cols="30" rows="3"><?=$description;?></textarea>
                </div>
                <div class="form-wrap">
                        <i class="fab fa-cutlery"></i>
                        <input type="submit" value="<?=$btnText?>">
                </div>
                </form>
            </div>
            <div class="order-right" <?=$backgroundImage?>>
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