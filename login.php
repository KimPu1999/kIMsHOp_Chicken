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
    <title>kIMsHOp's Chicken - user login page</title>
    <link rel="stylesheet" href="css/user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>login</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
            <br> maiores eum? Odio, voluptatibus, blanditiis veritatis dignissimos 
            <br>laudantium eligendi, nesciunt quam labore nulla facilis quibusdam 
            <br>laboriosam reiciendis dolorem ea at harum.</p>
            <span><a href="home.php">home</a><i class="fas fa-caret-right"></i>login</span>
        </div>
    </div>

    <div class="form-container">
    <form action="" method="post" enctype="multipart/form-data" class="login">
            <h3>login now</h3>
            
            <div class="input_field">
                <p>your email <span>*</span></p>
                <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
            </div>
            <div class="input_field">
                <p>your password <span>*</span></p>
                <input type="password" name="pass" placeholder="enter your password" maxlength="50" required class="box">
            </div>

            <p class="link"> do not  have an account? <a href="register.php"> register now</a></p>
            <input type="submit" name="submit" value="login now" class="btn">
        </form>
    </div>


    

    <?php include 'components/footer.php'; ?>
        <!--custom js link -->
    <script src="js/user_script.js"></script>
    
    <?php include 'components/alert.php'; ?>

</body>
</html>
