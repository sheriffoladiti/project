<?php

// connect to the database
function fetch_menu()
{
    $db = mysqli_connect('localhost', 'root', '', 'team_project'); //!!!!!!!!!//
    $user_check_query = "SELECT * FROM food";
    $result = mysqli_query($db, $user_check_query);
    $rows = mysqli_fetch_all($result);
    $i = 0;
    foreach ($rows as $row) {
        echo "
        <div class='row mt-5'>
        <div class='col-lg-5 col-md-6 align-self-center py-5'>
        <h2 class='special-number'>0".++$i."</h2>
        <div class='dishes-text'>
        <h3><span>".$row[1]."</span><br>".$row[2]."</h3>
        <p class='pt-3'>".$row[3]."</p>
        <h3 class='special-dishes-price'>£".$row[4]."</h3>
        <a href='foodorder.php?id=".$row[0]."' class='btn-primary mt-3'>Order</a>
        </div>
        </div>
        <div class='col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0'>
        <img src='img/foods/".$row[5]."' alt=' class='img-fluid shadow w-100'>
        </div>
        </div>
        ";
    }
}
function get_orders($uid)
{
    $db = mysqli_connect('localhost', 'root', '', 'team_project'); //!!!!!!!!!//
    $user_check_query = "SELECT * FROM orders WHERE user = '$uid'";
    $result = mysqli_query($db, $user_check_query);
    $rows = mysqli_fetch_all($result);
    $i = 0;
    // echo $uid;
    foreach ($rows as $row) {
        echo "
        <tr>
            <td>".$row[0]."</td>
            <td>".$row[5]."</td>
            <td>".getFood($row[2])."</td>
            <td>".$row[4]."</td>
            <td>Processing</td>
            <td>Card</td>
        </tr>
        ";
        
    }
}

function getFood($id)
{
    $db = mysqli_connect('localhost', 'root', '', 'team_project'); //!!!!!!!!!//
    $food_check_query = "SELECT * FROM food WHERE id = '$id'";
    $fresult = mysqli_query($db, $food_check_query);
    $food = mysqli_fetch_assoc($fresult);
    return $food['name']; 
}

function placeOrder()
{
    if(isset($_POST['btn_order']))
    {
        $fid = $_POST['fid'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $uid = $_POST['uid'];
        $cost = $price * $qty;
        $db = mysqli_connect('localhost', 'root', '', 'team_project');
        $user_check_query = "INSERT INTO `orders`(`user`,`fid`, `quantity`, `cost`) VALUES ('$uid','$fid', '$qty', '$cost')";
        mysqli_query($db, $user_check_query);  //mutate tb
        // echo ; 
        $params = base64_encode(mysqli_insert_id($db));
        header("location: payment.php?oid=$params");
    }
}
function makePayment()
{
    if(isset($_POST['btn_pay']))
    {
        $amount = $_POST['amount'];
        $name = $_POST['name'];
        $oid = $_POST['oid'];
        $db = mysqli_connect('localhost', 'root', '', 'team_project');
        $user_check_query = "INSERT INTO `payment`(`oid`, `name`, `amount`) VALUES ('$oid', '$name', '$amount')";
        $msg = mysqli_query($db, $user_check_query) ? "success": "error";  //mutate tb
        // $params = base64_encode(mysqli_insert_id($db));
        header("location: confirmation.php?msg=$msg");
    }
}


