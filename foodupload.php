<?php
require_once("./config/db.php");
if(!isset($_SESSION['user_id'])) header("location: ./user.php");
$page_title = "mary saloon | hairstyle ";
require_once("./includes/header.php");
require_once("./includes/nav.php");
$foodname = $price = $quantity = $image = $category_id = $description = "";
$backgroundImage = "";
$food_id = "";
$btnText = "Create style";
$headingText = "Create";
$imageText = "required";
$triggerText = "createstyle";
if(isset($_GET['food'])){
    $food_id = $_GET['food'];
    $user_id = $_SESSION['user_id'];
    // $query = "SELECT foodname,price,quantity,description,category_id,image FROM foods WHERE food_id = $food_id"
    $findFood = selectFcn("foods", "food_id,vendor_id,foodname,price,quantity,description,category_id,image", "WHERE food_id = ? AND vendor_id = ?","ii",$food_id, $user_id);
    if($findFood->num_rows > 0){
        $row = $findFood->fetch_assoc();
        $foodname = $row['foodname'];
        $vendor_id = $row['vendor_id'];
        $food_id = $row['food_id'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $description = $row['description'];
        $category_id = $row['category_id'];
        $image = $row['image'];
        $btnText = "Update style";
        $headingText = "Update";
        $imageText = "";
        $triggerText = "updatestyle";
        $backgroundImage = "style='background-image: url(\"./images/$image\")'";
    }
}
?>
<body>
    <main class="main-body">
   
    <!-- ORDER SECTION -->
    <section class="order-section" id="order">
        <div class="section-heading">
            <h4 class="section-title"><?=$headingText ?> a style</h4>
            <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis blanditiis, illo commodi accusantium pariatur eveniet.</p>
        </div>
        <div class="order-wrap">
            <div class="order-left">
                <form enctype="multipart/form-data" id="foodForm" class="order-form">
                    <input type="hidden" name="image" value="<?= $image?>">
                    <input type="hidden" value="<?= $food_id?>" name="<?=$triggerText?>">
                    <div class="form-wrap">
                        <i class="fa fa-address-card"></i>
                        <input type="text" name="foodname" value="<?=$foodname;?>" placeholder="hair Name" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-money-bill"></i>
                        <input type="number" step="0.5" name="price" value="<?=$price;?>" placeholder="Price of hairstyle" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-brush "></i>
                        <input type="number" name = "quantity" value="<?=$quantity?>"placeholder="Quantity Available for Sale" required>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-brush"></i>
                        <input type="file" name="image" value="<?= $image?>" <?=$imageText?>>
                    </div>
                    <div class="form-wrap">
                        <!-- <i class="fa fa-cutlery"></i> -->
                        <select name="category_id" value="<?=$category_id;?>" id="">
                            <?php
                                 $food_category = $category_id;
                                $category = $db->query("SELECT * FROM category");
                                while($row = $category->fetch_assoc()){
                                    $selected = $food_category == $row['category_id'] ? "selected" : "";
                                    $category_id = $row['category_id'];
                                    $text =$row['name'];
                                    echo"<option $selected value = '$category_id'>$text </option>";
                                }
                                ?>
                        </select>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-comment"></i>
                        <textarea placeholder="Enter a good description of the hairstyle" name="description" value="<?=$description;?>" id="" cols="30" rows="3"><?= $description ?></textarea>
                    </div>
                    <div class="form-wrap">
                        <i class="fa fa-brush"></i>
                        <input type="submit" value="<?=$btnText ?>">
                    </div>
                </form>
            </div>
            <div class="order-right" <?= $backgroundImage ?>>

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