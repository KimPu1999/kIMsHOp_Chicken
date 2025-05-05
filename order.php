<?php
    include 'components/connect.php';

    if(isset($_COOKIE['user_id']))
    {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id= '';
    }
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $pass = sha1($_POST['pass']);
        $pass =filter_var($pass, FILTER_SANITIZE_STRING);


        $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
        $select_user->execute([$email, $pass]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if($select_user->rowCount() > 0)
        {
            setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
            header('location:home.php');
        }else{
            $warning_msg[] = 'incorrect email or password';
        }
        

    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kIMsHOp's Chicken - my orders page</title>
    <link rel="stylesheet" href="css/user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>my orders</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
            <br> maiores eum? Odio, voluptatibus, blanditiis veritatis dignissimos 
            <br>laudantium eligendi, nesciunt quam labore nulla facilis quibusdam 
            <br>laboriosam reiciendis dolorem ea at harum.</p>
            <span><a href="home.php">home</a><i class="fas fa-caret-right"></i>my orders</span>
        </div>
    </div>

    <div class="orders">
        <div class="heading">
            <h1>my orders</h1>
        </div>
        <div class="box-container">
            <?php
                $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ? ORDER BY date DESC");
                $select_orders->execute([$user_id]);

                if($select_orders->rowCount() > 0){
                    while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC))
                    {
                        $product_id = $fetch_orders['product_id'];

                        $select_products = $conn->prepare("SELECT * FROM `products` WHERE  id = ?");
                        $select_products->execute([$product_id]);

                        if($select_products->rowCount() > 0){
                            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC))
                            {
            ?>
            <div class="box" <?php if($fetch_orders['status'] == 'canceled'){echo 'style = "border:2px solid red"';} ?>>
                <a href="view_order.php?get_id=<?= $fetch_orders['id']; ?>">
                <img src="uploaded_files/<?= $fetch_products['image']; ?>" class="image">
                <p class="date"><i class="fas fa-calendar-alt"></i><?= $fetch_orders['date'];?></p>
                <div class="content">
                    <!-- <img src="image/reman.php" class="shap"> -->
                    
                    <div class="row">
                        <h3 class="name"><?= $fetch_products['name']; ?></h3>
                        <p class="price">Price: Rs <?= $fetch_products['price'] ?>/-</p>
                        <p class="status" style="color:<?php if($fetch_orders['status'] == 'delivered')
                        {echo "green";}elseif($fetch_orders['status'] == 'cancled')
                        { echo "red"; }else{echo "orange";} ?>"><?= $fetch_orders['status']; ?></p>
                    </div>
                </div>
                </a>
            </div>
            <?php
                            }
                        }
                    }
                }else{
                    echo '<p class="empty"> no order take placed yet!</p>';
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
