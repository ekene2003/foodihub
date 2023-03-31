<?php
include_once( './includes/dashhead.php' );
include_once( './includes/dashnav.php' );
?>
<div class = 'container-fluid py-4'>
<div class = 'row'>
<div class = 'col-12'>
<div class = 'card my-4'>
<div class = 'card-header p-0 position-relative mt-n4 mx-3 z-index-2'>
<div class = 'bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between alighn-items-center'>
<h6 class = 'text-white text-capitalize ps-3'>Foods table</h6>
<a href="./foodupload.php" class="btn btn-dark text-sm me-4">Create Food</a>
</div>
</div>
<div class = 'card-body px-0 pb-2'>
<div class = 'table-responsive p-0'>
<table class = 'table align-items-center mb-0'>
<thead>
<tr>
<th class = 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Food Details</th>
<th class = 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Order Details</th>
<th class = 'text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status</th>
<th class = 'text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vendor</th>
<th class = 'text-secondary opacity-7'></th>
</tr>
</thead>
<tbody>
<?php
$table = "foods fd JOIN users us ON fd.vendor_id = us.user_id JOIN category ct USING(category_id) JOIN statuses st ON fd.status = st.status_id WHERE fd.vendor_id = $global_id";
// $global_id = $_SESSION[ 'user_id' ];
//  query = 'SELECT fd.food_id,fd.foodname,fd.price,fd.quantity,fd.image,us.firstname,us.lastname,ct.name AS food_category, st.name AS food_status FROM foods fd JOIN users us ON fd.vendor_id = us.user_id JOIN category ct USING(category_id) JOIN status st ON fd.status = st.status_id'
$showFoods = selectFcn( $table, 'fd.food_id,fd.vendor_id,fd.foodname,fd.price,fd.quantity,fd.image,us.firstname,us.lastname,ct.name AS food_category, st.name AS food_status' );
if ( $showFoods->num_rows > 0 ) {
    while( $row = $showFoods->fetch_assoc() ) {
        $food_id = $row[ 'food_id' ];
        $vendor_id = $row[ 'vendor_id' ];
        $foodname = $row[ 'foodname' ];
        $price = $row[ 'price' ];
        $quantity = $row[ 'quantity' ];
        $image = $row[ 'image' ];
        $firstname = $row[ 'firstname' ];
        $lastname = $row[ 'lastname' ];
        $food_category = $row[ 'food_category' ];
        $food_status = $row[ 'food_status' ];
        echo<<<_HTML
        <tr>
        <td>
        <div class = 'd-flex px-2 py-1'>
        <div>
        <img src = "./images/foods/$image" class = 'avatar avatar-sm me-3 border-radius-lg' alt = '$foodname'>
        </div>
        <div class = 'd-flex flex-column justify-content-center'>
        <h6 class = 'mb-0 text-sm'>$foodname</h6>
        <p class = 'text-xs text-secondary mb-0'>$price | qty: $quantity</p>
        </div>
        </div>
        </td>
        <td>
        <p class = 'text-xs font-weight-bold mb-0'>$food_category</p>
        <p class = 'text-xs text-secondary mb-0'>Organization</p>
        </td>
        <td class = 'align-middle text-center text-sm'>
        <span class = 'badge badge-sm bg-gradient-success'>$food_status</span>
        </td>
        <td class = 'align-middle text-center'>
        <span class = 'text-secondary text-xs font-weight-bold'>$firstname $lastname</span>
        </td>
        <td class = 'align-middle'>
        <a href = './foodupload.php?food=$food_id' class =  'badge  badge-sm bg-gradient-secondary'  data-toggle = 'tooltip' data-original-title = 'Edit food'>
        Edit
        </a>
        <div onclick = "deleteFood($food_id)" class = 'badge  badge-sm              bg-gradient-danger' data-toggle = 'tooltip' data-original-title = 'delete food'>
        Delete
        </div>
        </td>
        </tr>
        _HTML;
    }
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include_once( './includes/dashfoot.php' );

?>
