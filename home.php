
<?php
    include 'components/connect.php';

    if (isset($_COOKIE['user_id']))
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
    <title>kIMsHOp's Chicken - home page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <!-- slider section start -->

    <div class="slider-container">
        <div class="slider">
            <div class="slideBox active">
                <div class="textBox">
                    <h1>we pride ourselfs on <br> exceptional flavors</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/chicken-win.png" alt="">
                </div>
            </div>
            <div class="slideBox">
                <div class="textBox">
                    <h1>cold treats are my kind <br> of comfort foods</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/chicken-fried.png" alt="">
                </div>
            </div>
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="fas fa-arrow-alt-circle-right"></i></li>
            <li onclick="prevSlide()" class="prev"><i class="fas fa-arrow-alt-circle-left"></i></li>
        </ul>
    </div>
    <!-- slider section end -->

    <!-- <div class="service">
        <div class="box-container"> -->
            <!-- service item box -->
            <!-- <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/delivery.png" class="img1" alt="">
                        <img src="image/delivery1.png" class="img2" alt="">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div> -->
            <!-- service item box -->
            <!-- <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/payment.png" class="img1" alt="">
                        <img src="image/payment1.png" class="img2" alt="">
                    </div>
                </div>
                <div class="detail">
                    <h4>payment</h4>
                    <span>100% secure</span>
                </div>
            </div> -->
            <!-- service item box -->
            <!-- <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/support.png" class="img1" alt="">
                        <img src="image/support1.png" class="img2" alt="">
                    </div>
                </div>
                <div class="detail">
                    <h4>support</h4>
                    <span>24*7 hours</span>
                </div>
            </div> -->
            <!-- service item box -->
            <!-- <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/giftservice.png" class="img1" alt="">
                        <img src="image/giftservice1.png" class="img2" alt="">
                    </div>
                </div>
                <div class="detail">
                    <h4>gift service</h4>
                    <span>support gift service</span>
                </div>
            </div> -->
            <!-- service item box -->
            <!-- <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/return.png" class="img1" alt="">
                        <img src="image/return1.png" class="img2" alt="">
                    </div>
                </div>
                <div class="detail">
                    <h4>return</h4>
                    <span>24*4 free return</span>
                </div>
            </div> -->
            <!-- service item box -->
            <!-- <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/delivery1.png" class="img1" alt="">
                        <img src="image/delivery.png" class="img2" alt="">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div> -->
        <!-- </div>
    </div> -->
    
    <!--service section end -->

    <div class="categories">
        <div class="heading">
            <h1>categories features</h1>
            <!-- <img src="image/bibimbap.png" alt=""> -->
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/chicken-fried.png" alt="">
                <a href="menu.php" class="btn">Fried Chicken</a>
            </div>
            <div class="box">
                <img src="image/chicken-red-souce.png" alt="">
                <a href="menu.php" class="btn">Red Source Chicken</a>
            </div>
            <div class="box">
                <img src="image/reman.png" alt="">
                <a href="menu.php" class="btn">Reman</a>
            </div>
            <div class="box">
                <img src="image/topokki.png" alt="">
                <a href="menu.php" class="btn">Toekpokki</a>
            </div>
            <div class="box">
                <img src="image/kimbap.png" alt="">
                <a href="menu.php" class="btn">Gimbap</a>
            </div>
            <div class="box">
                <img src="image/chicken-win.png" alt="">
                <a href="menu.php" class="btn">Garlic Win Chicken</a>
            </div>
        </div>
    </div>
    <!-- categories section end -->
    <!-- <img src="image/reman.png" class="menu-banner" alt=""> -->
    <div class="taste">
        <div class="heading">
            <span>Taste</span>
            <h1>buy any Chicken @ get one free</h1>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/chicken-fried-boonless.png" alt="">
                <div class="detail">
                    <h2>natural chicken boonless</h2>
                    <h1>matcha</h1>
                </div>
            </div>
            <div class="box">
                <img src="image/reman.png" alt="">
                <div class="detail">
                    <h2>natural nodel shop</h2>
                    <h1>matcha</h1>
                </div>
            </div>
            <div class="box">
                <img src="image/topokki2.png" alt="">
                <div class="detail">
                    <h2>natural rice cake</h2>
                    <h1>matcha</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- taste section end -->
    <!-- <div class="ice-container">
        <div class="overlay"> </div>
            <div class="detail">
                <h1>Chicken is good foods.</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Ullam porro libero vel eligendi voluptatibus voluptas
                    ipsa cumque architecto<br>
                    unde quidem asperiores molestias adipisci ea labore,
                    neque omnis aliquam alias odio.</p>
                    <a href="menu.php" class="btn">shop now</a>
            </div>
       
    </div> -->
    <!-- container section end  -->
    <div class="taste2">
        <div class="t-banner">
            <div class="overlay">
                <div class="detail">
                    <h1>find your taste of desserts</h1>
                    <p>Treat them to a delicious treat and send them some luck 'o the Irish too!</p>
                    <a href="menu.php" class="btn">show now</a>
                </div>
            </div>
        </div>
        <div class="box-container">
                <div class="box">
                    <div class="box-overlay"> </div>
                        <img src="image/reman.png" alt="">
                        <div class="box-details fadeIn-botton">
                            <h1>Reman</h1>
                            <p>find your taste of desserts</p>
                            <a href="menu.php" class="btn">explore more</a>
                        </div>
                   
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                        <img src="image/chicken-read-couce3.png" alt="">
                        <div class="box-details fadeIn-botton">
                            <h1>Chicken-red-source</h1>
                            <p>find your taste of desserts</p>
                            <a href="menu.php" class="btn">explore more</a>
                        </div>
                    
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                        <img src="image/chicken-sweet.png" alt="">
                        <div class="box-details fadeIn-botton">
                            <h1>Sweet Chicken</h1>
                            <p>find your taste of desserts</p>
                            <a href="menu.php" class="btn">explore more</a>
                        </div>
                    
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                        <img src="image/topokki3.png" alt="">
                        <div class="box-details fadeIn-botton">
                            <h1>Rice Topokki</h1>
                            <p>find your taste of desserts</p>
                            <a href="menu.php" class="btn">explore more</a>
                        </div>
                    
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                        <img src="image/chicken-win3.png" alt="">
                        <div class="box-details fadeIn-botton">
                            <h1>Chicken Wins</h1>
                            <p>find your taste of desserts</p>
                            <a href="menu.php" class="btn">explore more</a>
                        </div>
                    
                </div>
                <div class="box">
                    <div class="box-overlay"></div>
                        <img src="image/chicken-chee.png" alt="">
                        <div class="box-details fadeIn-bottom">
                            <h1>Chess Chicken</h1>
                            <p>find your taste of desserts</p>
                            <a href="menu.php" class="btn">explore more</a>
                        </div>
                </div>
        </div>
    </div>
    <!-- taste2 section end -->
     <!-- <div class="flavor">
        <div class="box-container">
            <img src="image/topokki.png" alt="">
            <div class="detail">
                <h1>Hot Deal ! Sale Up To <span>20% off</span> </h1>
                <p>expired</p>
                <a href="menu.php" class="btn">show now</a>
            </div>
        </div>
     </div> -->
     <!--flavour section end-->
    <div class="usage">
        <div class="heading">
            <h1>how it works</h1>
        </div>
        <div class="row">
            <div class="box-container">
                <div class="box">
                    <img src="image/chicken-fried2.png" alt="">
                    <div class="detail">
                        <h3>Chicken Fried</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ducimus facilis nisi totam sint dignissimos tempora commodi qui. Nostrum vero porro provident rerum itaque? Architecto aut tempora deserunt explicabo nam.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/topokki.png" alt="">
                    <div class="detail">
                        <h3>Topokki</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ducimus facilis nisi totam sint dignissimos tempora commodi qui. Nostrum vero porro provident rerum itaque? Architecto aut tempora deserunt explicabo nam.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/reman.png" alt="">
                    <div class="detail">
                        <h3>Reman</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ducimus facilis nisi totam sint dignissimos tempora commodi qui. Nostrum vero porro provident rerum itaque? Architecto aut tempora deserunt explicabo nam.
                        </p>
                    </div>
                </div>
           

            <!-- <img src="image/reman.png" class="devider"> -->
            <div class="box">
                    <img src="image/kimbap.png" alt="">
                    <div class="detail">
                        <h3>Gimbap</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ducimus facilis nisi totam sint dignissimos tempora commodi qui. Nostrum vero porro provident rerum itaque? Architecto aut tempora deserunt explicabo nam.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/chicken-win2.png" alt="">
                    <div class="detail">
                        <h3>Chicken Wins</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ducimus facilis nisi totam sint dignissimos tempora commodi qui. Nostrum vero porro provident rerum itaque? Architecto aut tempora deserunt explicabo nam.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/chicken-stweeet-souce.png" alt="">
                    <div class="detail">
                        <h3>Chicken Sweet</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ducimus facilis nisi totam sint dignissimos tempora commodi qui. Nostrum vero porro provident rerum itaque? Architecto aut tempora deserunt explicabo nam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!--usage section end -->
    <!-- <div class="pride">
        <div class="detail">
            <h1>We pride Ourselves On <br> Exceptional Flavors.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis corrupti molestias quas ex officiis delectus, rem maxime eum, nihil vel dolor autem perferendis neque ducimus similique quos itaque atque ab?</p>
            <a href="menu.php" class="btn">show now</a>
        </div>
    </div> -->
    <!-- pride section end -->

    
    <?php include 'components/footer.php'; ?>
    <!--Sweetalert cdn link --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--custom js link -->
    <script src="js/user_script.js"> </script>


    <?php include 'components/alert.php'; ?>

</body>
</html>
