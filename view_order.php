<?php
    include 'components/connect.php';

    if(isset($_COOKIE['user_id']))
    {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id= '';
    }

    if(isset($_GET['get_id']))
    {
        $get_id = $_GET['get_id'];
    }else{
        $get_id = '';
        header('location:order.php');
    }

    // if(isset($_POST['cancle']))
    // {
    //     $update_order = $conn->prepare("UPDATE `orders` SET status = ? WHERE id = ? ");
    //     $update_order->execute(['cancle', $get_id]);

    //     header('location:order.php');
    // }

    // delete order
    if(isset($_POST['cancele']))
        {
            $delete_id = $_POST['order_id'];
            $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);
  
            $verify_delete = $conn->prepare("SELECT * FROM `orders` WHERE id = ?");
            $verify_delete->execute([$delete_id]);
        
        if($verify_delete->rowCount() > 0){
  
                $delete_order = $conn->prepare("DELETE FROM `orders` WHERE id = ?");
                $delete_order->execute([$delete_id]);
  
                $success_msg[] = 'order deleted';
            }else{
                $warning_msg[] = 'order already deleted';
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kIMsHOp's Chicken - order detail page</title>
    <link rel="stylesheet" href="css/user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1> order detail</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
            <br> maiores eum? Odio, voluptatibus, blanditiis veritatis dignissimos 
            <br>laudantium eligendi, nesciunt quam labore nulla facilis quibusdam 
            <br>laboriosam reiciendis dolorem ea at harum.</p>
            <span><a href="home.php">home</a><i class="fas fa-caret-right"></i> order detail</span>
        </div>
    </div>

    <div class="order-detail">
        <div class="heading">
        <h1>my order detail</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quisquam quae ipsam dolorem, tempore cum est impedit illo molestiae assumenda deleniti commodi. Sit, voluptate non nesciunt libero tempore architecto ab.</p>
        </div>
        <div class="box-container">

            <?php
                $grand_total = 0;
                $select_order = $conn->prepare("SELECT * FROM `orders` WHERE id = ? LIMIT 1");
                $select_order->execute([$get_id]);

                if($select_order->rowCount() > 0)
                {
                    while($fetch_order = $select_order->fetch(PDO::FETCH_ASSOC))
                    {
                        $select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ? LIMIT 1");
                        $select_product->execute([$fetch_order['product_id']]);
                        if($select_product->rowCount() > 0){
                            while($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC))
                            {
                                $sub_total = ($fetch_order['price'] * $fetch_order['qty']);
                                $grand_total += $sub_total;
            ?>
            <div class="box">
                <div class="col">
                    <p class="title"><i class="fas fa-calendar-alt"></i><?= $fetch_order['date']; ?></p>
                    <img src="uploaded_files/<?= $fetch_product['image']; ?>" class="image">
                    <p class="price">Rs <?= $fetch_product['price']; ?>/-</p>
                    <h3 class="name"><?= $fetch_product['name']; ?></h3>
                    <p class="grand-total">total amount payable: <span>Rs <?= $grand_total; ?>/-</span></p>
                </div>
                <div class="col">
                    <p class="title">billing address</p>
                    <p class="user"><i class="fas fa-user-circle"></i><?= $fetch_order['name']; ?></p>
                    <p class="user"><i class="fas fa-phone"></i><?= $fetch_order['number']; ?></p>
                    <p class="user"><i class="fas fa-envelope"></i><?= $fetch_order['email']; ?></p>
                    <p class="user"><i class="fas fa-map-marker-alt"></i><?= $fetch_order['address']; ?></p>
                    <p class="status" style="color:<?php if($fetch_order['status'] == 'delivered')
                        {echo "green";}elseif($fetch_order['status'] == 'cancled')
                        { echo "red"; }else{echo "orange";} ?>"><?= $fetch_order['status']; ?></p>
                    <?php if($fetch_order['status'] == 'cancled'){ ?>
                        <a href="checkout.php?get_id=<?= $fetch_product['id']; ?>" class="btn" style="line-height: 3;">order again</a>
                    <?php }else{ ?>
                        <form action="" method="post">
                        <input type="hidden" name="order_id" value="<?= $fetch_order['id']; ?>">
                            <button type="submit" name="cancele" class="btn" onclick="return confirm('do you want to cancle this product');">cancled</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
            <?php
                            }
                        }
                    }
                }else{
                    echo '
                        <div class="empty">
                            <p>no order placed yet!</p>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>


    <?php include 'components/footer.php'; ?>
        <!--custom js link -->
    <script src="js/user_script.js"></script>
    
    <?php include 'components/alert.php'; ?>

</body>
</html>
