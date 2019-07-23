<?php 
    require('functions.php');
 ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <meta name="description" content="Honor - Creative Portfolio HTML Template" />
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/ico/favicon-16x16.png"/>
        <link rel="icon" type="image/png" href="assets/images/ico/favicon-32x32.png"/>
        <link rel="icon" type="image/png" href="assets/images/ico/favicon-96x96.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
        <!-- Page Title -->
        <title>Honor - Creative Portfolio HTML Template</title>
        <!-- Plugins -->
        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <!-- Custom css file -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="ms-preloader"></div>
        <!-- Wrapper -->
            <div class="ms-main-container">

                <!-- Header -->
                <header class="ms-header">
                    <nav class="ms-nav">
                        <div class="ms-logo">
                            <a href="index.html" data-type="page-transition">
                                <img src="assets/images/SVGLogo.svg" alt="logo">
                            </a>
                        </div>
                        <!-- Mobile Menu Button -->
                            <button class="nav__btn">
                                <span class="burger">
                                    <span class="burger__line"></span>
                                    <span class="burger__line"></span>
                                    <span class="burger__line"></span>
                                </span>
                                <span class="cross">
                                    <span class="cross__line"></span>
                                    <span class="cross__line"></span>
                                </span>
                            </button>
                        <!-- Mobile Menu Button -->
                        <ul class="ms-navbar">
                            <li class="ms-nav-item link active">
                                <a href="index.html">Browse Bakery</a>
                            </li>
                            <li class="ms-nav-item link">
                                <a href="about.html" data-type="page-transition">About</a>
                            </li>
                            <li class="ms-nav-item link">
                                <a href="post-single-page.html" data-type="page-transition">FAQ</a>
                            </li>
                            <li class="ms-nav-item link">
                                <a href="contact.html" data-type="page-transition">Contact</a>
                            </li>
                            <li class="ms-nav-item link">
                                <a href="work-single-page.html" data-type="page-transition"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </nav>
                </header>
                <!-- /Header -->




                <!-- Container -->
                    <main class="ms-container">

                        <!-- Hero area -->
                        <!-- Make hero area static  -->
                        <div class="ms-hero ms-hero__poster">
                            <div class="ms-hero__caption-poster">
                                <div class="ms-hero__title-poster">
                                    <div class="ms-hero__title">
                                        <h1>Kreative Keto Kitchen</h1>
                                        <p class="ms-hero__subtitle">LCHF Keto goodies made to order and despatched for overnight delivery nationwide.</p>
                                    </div>
                                </div>
                                <div class="ms-hero__image">
                                    <div class="box-cover" style="background-image: url(assets/images/about.JPG)"></div>
                                    <div class="box-overlay"></div>
                                <div id="sticker" class="ms-hero__links">
                                     
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="ms-section__block about__content">
                            <p>Here at Kreative Keto Kitchen, we supply you over night nationwide loaves and treats to satisfy your bread /toast / sweet cravings and will have you coming back for more. Our mission is to deliver you the freshest and lowest in carb loaves and treats to your door! There is nothing more satisfying than having our customers delight in the deliciousness of our low carb loaves and treats.</p>
                            <p>Don't hesitate, look down below at our bakery selection and browse our goodies.</p>
                        </div>
                        <!-- /Hero area -->

                        <!-- Popup -->
                        <div class="ms-popup_cart">

                                <i class="fas fa-arrow-circle-right"></i>

                                <div class="options">

                                    <?php foreach ($products as $key=>$product): ?>                

                                        <div class="option <?php echo $key ?>" data-choice="<?php echo $key ?>" data-price="19">
                                                <div class="product">
                                                        <h3><?php echo $product['title'] ?> | $<?php echo number_format($product['price'],2) ?></h3>    
                                                        <h6><?php echo $product['category'] ?></h6>  
                                                    </div>
                        
                                                    <div class="product-details">
                                                        <h4>Product details</h4>
                        
                                                        <p>
                                                            <?php echo $product['details'] ?>
                                                        </p>
                                                    </div>

                                                    <div>

                                                        <form action="addToCart.php" method="post">

                                                            <div class="col-md-12 amount">
                                                                <label for="text">Quantity<input type="text" name="Quantity" value="1"></label>
                                                            </div>
                                                            <input type="hidden" name="product-key" value="<?php echo $key ?>">

                                                            <div class="col-md-6">
                                                                <div class="ms-btn__square submit-check">
                                                                    <input type="submit" value="Add to Cart">
                                                                </div>
                                                            </div>
                                                            

                                                        </form>
                                                       
                                                    </div>

                                        </div>

                                    <?php endforeach ?>
                        
                                </div>
    
                            </div>
                        <!-- /Popup -->

                        <!-- Works Grid -->
                            <section class="ms-section">

                            <!-- Sort -->
                                <ul class="filtr-btn">
                                    <li data-filter="*" class="active"><h6 class="ms-btn">all</h6></li>
                                    <li data-filter=".design"><h6 class="ms-btn">loaves</h6></li>
                                    <li data-filter=".art"><h6 class="ms-btn">cookies + brownie</h6></li>
                                    <li data-filter=".development"><h6 class="ms-btn">sweet treats</h6></li>
                                </ul>
                            <!-- /Sort -->
                            
                            <!-- Grid -->
                                <div class="ms-section__block ms-grid">
                                <div class="col-md-1 col-xs-12 grid-sizer"></div>

                
                            <!-- /Work Item -->

                                <?php foreach ($products as $key=>$product): ?>
                        
                                                           <!-- Work Item -->
                                    <div class="grid-item anime-item work-item col-md-6 col-xs-12 design" data-target=".<?php echo $key ?>">
                                        <a href="#" class="box work-image" data-type="page-transition">
                                            <div class="box-cover">
                                                <div class="box-img" style="background-image: url(assets/images/works/<?php echo $product['image'] ?>)"></div>
                                                <div class="box-hover"></div>
                                            </div>
                                        </a>
                                        <a href="#" data-type="page-transition">
                                        <div class="work-info">
                                            <div class="box-inner">
                                                <span class="box-inner__cat"><?php echo $product['category'] ?></span>
                                                <h4 class="box-inner__title"><?php echo $product['title'] ?>| $<?php echo number_format($product['price'],2) ?></h4>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
             


                                </div>
                            <!-- Grid -->
                            <div class="ms-section__block ms-align-center">
                                <a href="#" class="ms-btn__square" data-type="page-transition">load more</a>
                            </div>
                            </section>
                        <!-- /Works Grid -->

                        <!-- Back to top button -->
                        <a href="#" class="back-top"><i class="material-icons">arrow_upward</i></a>
                    </main>
                <!-- /Container --> 






                <!-- Footer -->
                <footer class="ms-footer">
                    <ul class="footer-socials">
                        <li><a class="ms-btn" href="https://www.facebook.com/pg/kreativeketokitchen">facebook</a></li>
                        <li><a class="ms-btn" href="https://www.instagram.com/kreativeketokitchen/">instagram</a></li>
                    </ul>
                    <div class="copyright">© 2019 All Rights Reserved | Kreative Keto Kitchen</div>
                </footer>
                <!-- /Footer -->

            </div>
        <!-- /Wrapper -->
    <!-- JS -->
    <!-- jquery-2.1.3.min js -->
        <script src='assets/js/jquery-3.2.1.min.js'></script>
    <!-- Plugins -->
        <script src='assets/js/plugins.min.js'></script>       
    <!-- Main js -->
        <script src="assets/js/main.js"></script>
    </body>
</html>