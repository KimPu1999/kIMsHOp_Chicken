<?php
    include 'components/connect.php';

    if(isset($_COOKIE['user_id']))
    {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id= '';
    }


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kIMsHOp's Chicken - about -us page</title>
    <link rel="stylesheet" href="css/user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
            <br> maiores eum? Odio, voluptatibus, blanditiis veritatis dignissimos 
            <br>laudantium eligendi, nesciunt quam labore nulla facilis quibusdam 
            <br>laboriosam reiciendis dolorem ea at harum.</p>
            <span><a href="home.php">home</a><i class="fas fa-caret-right"></i>about us</span>
        </div>
    </div>

    <div class="chef">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>kIMsHOp's</span>
                    <h1>Masterchef</h1>
                    <!-- <img src="image/image.jpg" alt=""> -->
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br> Fugiat earum voluptatum eius laboriosam nesciunt quisquam
                    <br> perspiciatis, inventore dolore impedit delectus! Laudantium 
                    <br>odit ipsam ab consequuntur ullam quis sunt nisi corporis?</p>
                <div class="flex-btn">
                    <a href="" class="btn">explore our menu</a>
                    <a href="menu.php" class="btn">visit our shop</a>
                </div>
            </div>
                <div class="box">
                <img src="image/chicken-red-souce4.png" class="img" alt="">
            </div>
        </div>
    </div>
    <!--cheaf section start -->
    <!-- <div class="story">
        <div class="heading">
            <h1>our story</h1>
             <img src="image/topokki.png" alt="">
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            <br> Vel, officiis? Deserunt laboriosam laudantium rerum
            <br> quisquam at modi eaque fuga necessitatibus quidem labore
            <br> maxime molestias eum, ad aut impedit vero sint.</p>
        <a href="menu.php" class="btn">our services</a>
    </div>
    <div class="container">
        <div class="box-container">
            <div class="img-box">
                <img src="image/topokki.png" alt="">

            </div>
            <div class="box">
                <div class="heading">
                    <h1>Taking Chicken To New Heights</h1>
                    <img src="image/chichen-win2.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur optio perferendis error expedita consequuntur quasi, nihil enim debitis, accusantium adipisci labore numquam laboriosam vel, maxime fugiat repellat beatae a facere?</p>
                <a href="menu.php" class="btn">learn more</a>
            </div>
        </div>
    </div>
     -->
    <!-- story section end -->
    <div class="team">
        <div class="heading">
            <h1>Quality & passion with our services</h1>    
        </div>
        <div class="box-container">
            <div class="box">
            <img src="image/chicken-fried2.png" class="img" alt="">
                <div class="content">
                    <!-- <img src="image/topokki.png"  alt="" class="shap"> -->
                    <h2>Kim Pu</h2>
                    <p>Chicken</p>
                </div>
            </div>
            <div class="box">
                <img src="image/topokki.png" class="img" alt="">
                <div class="content">
                    <!-- <img src="image/topokki.png"  alt="" class="shap"> -->
                    <h2>John </h2>
                    <p>Topokki</p>
                </div>
            </div>
            <div class="box">
                <img src="image/reman3.png" class="img" alt="">
                <div class="content">
                    <!-- <img src="image/topokki.png"  alt="" class="shap"> -->
                    <h2>Tom King</h2>
                    <p>Reman</p>
                </div>
            </div>
        </div>
    </div>

    <!-- team section end -->
    <!-- <div class="standers">
        <div class="detail">
            <div class="heading">
                <h1>our standers</h1>
                <img src="image/reman.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur .</p>
            <i class="fas fa-heart"></i>
            <p>Lorem ipsum dolor sit, amet consectetur .</p>
            <i class="fas fa-heart"></i>
            <p>Lorem ipsum dolor sit, amet consectetur .</p>
            <i class="fas fa-heart"></i>
            <p>Lorem ipsum dolor sit, amet consectetur .</p>
            <i class="fas fa-heart"></i>
            <p>Lorem ipsum dolor sit, amet consectetur .</p>
            <i class="fas fa-heart"></i>
        </div>
    </div> -->
    <!-- standers section end -->
    <div class="testimonial">
        <div class="heading">
            <h1>testimonial</h1>
        </div>
        <div class="testimonial-container">
            <div class="slide-row" id="slide">
                <div class="slide-col">
                    <div class="user-text">
                        <p>Kim Pu is a business analyst, entrepreneur and media proprietor, and
                            investor. His also known as the best selling book author.
                            <h2>Kim</h2>
                            <p>Author</p>
                        </p>
                    </div>
                    <div class="user-img">
                        <img src="image/image.jpg" alt="">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Muannu is a business analyst, entrepreneur and media proprietor, and
                            investor. His also known as the best selling book author.
                            <h2>Muannu</h2>
                            <p>Author</p>
                        </p>
                    </div>
                    <div class="user-img">
                        <img src="image/image.jpg" alt="">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Khaino is a business analyst, entrepreneur and media proprietor, and
                            investor. His also known as the best selling book author.
                            <h2>Khaino</h2>
                            <p>Author</p>
                        </p>
                    </div>
                    <div class="user-img">
                        <img src="image/image.jpg" alt="">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>MangMang is a business analyst, entrepreneur and media proprietor, and
                            investor. His also known as the best selling book author.
                            <h2>MangMang</h2>
                            <p>Author</p>
                        </p>
                    </div>
                    <div class="user-img">
                        <img src="image/image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="indicator">
            <span class="btn1 active"></span>
            <span class="btn1"></span>
            <span class="btn1"></span>
            <span class="btn1"></span>
        </div>
    </div>
    <!-- testimonial section end -->
    <!-- <div class="mission">
        <div class="box-container">
           <div class="box">
           <div class="heading">
                <h1>our mession</h1>
            </div>
            <div class="detail">
                <div class="img-box">
                    <img src="image/chicken-red-fried.png" alt="">
                </div>
                <div>
                    <h2>Korean Chicken Fried</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id commodi aliquid cupiditate eligendi asperiores fugit quia dolore sapiente magni iusto ipsa similique nulla blanditiis, ad architecto mollitia! Inventore, maiores dolorum.</p>

                </div>
            </div>
            <div class="detail">
                <div class="img-box">
                    <img src="image/chicken-red-souce.png" alt="">
                </div>
                <div>
                    <h2>Korean Chicken Source</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id commodi aliquid cupiditate eligendi asperiores fugit quia dolore sapiente magni iusto ipsa similique nulla blanditiis, ad architecto mollitia! Inventore, maiores dolorum.</p>
                    
                </div>
            </div>
            <div class="detail">
                <div class="img-box">
                    <img src="image/reman.png" alt="">
                </div>
                <div>
                    <h2>Korean Reman</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id commodi aliquid cupiditate eligendi asperiores fugit quia dolore sapiente magni iusto ipsa similique nulla blanditiis, ad architecto mollitia! Inventore, maiores dolorum.</p>
                    
                </div>
            </div>
            <div class="detail">
                <div class="img-box">
                    <img src="image/topokki2.png" alt="">
                </div>
                <div>
                    <h2>Korean Topokki</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id commodi aliquid cupiditate eligendi asperiores fugit quia dolore sapiente magni iusto ipsa similique nulla blanditiis, ad architecto mollitia! Inventore, maiores dolorum.</p>
                    
                </div>
            </div>
            </div>
            <div class="box">
                <img src="image/topokki.png" class="img" alt="">
            </div>
        </div>
    </div>
     -->

    <?php include 'components/footer.php'; ?>
        <!--custom js link -->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>
</html>
