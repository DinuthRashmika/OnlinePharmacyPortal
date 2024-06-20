<!DOCTYPE html>
<html>

<head>
    <title>Online Pharmacy Portal</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Head Part -->
    <header class="header">
        <div id="logo">
            <img src="LOGO.png" height="60px" width="350px">
            <h4>Medi Good <br>Pharmacy</h4>
        </div>

        <nav class="navbar">
            <a href="#" class="highlight">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>

        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars icn"></div>
            <div id="cart-btn" class="fas fa-cart-shopping icn"></div>
            <div id="login-btn" class="fas fa-user icn"></div>
        </div> <!-- icons -->

        <form method="get" action="https://www.youtube.com/" class="search-form">
            <input type="search" placeholder="search here..." id="search-box">
            <button class="fas fa-search"></button>
        </form>
    </header> <!-- header end -->

    <!-- Welcome Part -->
    <div class="welcome-bar">
        <h1>WELLCOME TO OUR <br> MEDI GOOD PHARMACY</h1>
        <p><b> Medi Good Pharmacy Portal provides individuals with quality products to ensure a quality lifestyle.It is
                build in a user-friendly manner for the easy access and reliability for customers.It has a simple
                ordering process and provides efficient delivery</b></p>
        <p><b>You need to login or register to avail the services available here</b></p>

        <form class="welcome-login logto" action="login.php" method="get">
            <button type="submit">Sign In</button>
        </form>

        <form id="reg" class="welcome-register logto" action="regform.php" method="get">
            <button type="submit">Register</button>
        </form>

    </div> <!-- welcome-bar end-->

    <!-- Product Part-->
    <section id="prod-rev">
        <!-- View Product Part -->
        <div id="view-product">
            <h1 class="topic1">Visit Our Products...</h1>

            <div class="goods">
                <div class="gds">
                    <img src="coversyl.jpeg">
                    <h4>COVERSYL 2.5MG</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 35.30</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-1 -->

                <div class="gds">
                    <img src="zem-caps.jpeg">
                    <h4>[P]ZEM XL 90MG</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 19.19</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-2 -->

                <div class="gds prod-3">
                    <img src="vitamic.jpeg">
                    <h4>CIMUNE C VITAMIN</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 34.42</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-3 -->

                <div class="gds prod-4">
                    <img src="forehead.jpeg">
                    <h4>INFARED FOREHEAD</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 10,000.00</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-4 -->

                <div class="gds prod-5">
                    <img src="telescope.jpeg">
                    <h4>LITTMAN TELESCOPE</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 67,140.00</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-5 -->

                <div class="gds prod-6">
                    <img src="scale.jpeg">
                    <h4>SALTER SCALE</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 3,770</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-6 -->

                <div class="gds prod-8">
                    <img src="fast-acting.jpeg">
                    <h4>GNC TRIFLEX FAST</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 9,900.00</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-8 -->

                <div class="gds prod-9">
                    <img src="high -protein.jpeg">
                    <h4>PROGAIN PROTIEN</h4>
                    <p id="prc">Unit Price</p>
                    <p id="amount">LKR 2,790.00</p>
                    <form class="btn-crt" action="#" method="get">
                        <button type="submit"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                    </form>
                </div> <!-- prod-9 -->

                <form class="more-see" action="product.html" method="get" id="pro-more">
                    <button type="submit">See More...<i class="fa-solid fa-location-arrow"></i></button>
                </form>
            </div><!-- goods -->
        </div> <!-- view-product -->
    </section> <!-- product part end-->

    <!-- Review Part -->
    <div class="riviv">
        <div id="review-topic">
            <h1 class="topic2">What Our Client's Say</h1>
        </div>

        <section class="review">
            <div class="revs">
                <img src="../images/review/img_1.png">
                <h5>Sadun Ramawickrama</h5>
                <h5>Graphic Designer</h5> <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt architecto, beatae doloribus
                    itaque, maiores odit voluptatem quae minima debitis ipsum non corrupti mollitia. Accusantium
                    excepturi iusto facilis blanditiis. Ullam ea dolorum soluta, velit labore eum omnis quos
                    perspiciatis commodi incidunt.</p>
            </div>

            <div class="revs">
                <img src="../images/review/img_2.png">
                <h5>Imalshani Tharumuthu</h5>
                <h5>Lecturer in SLIIT</h5> <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt architecto, beatae doloribus
                    itaque, maiores odit voluptatem quae minima debitis ipsum non corrupti mollitia. Accusantium
                    excepturi iusto facilis blanditiis. Ullam ea dolorum soluta, velit labore eum omnis quos
                    perspiciatis commodi incidunt.</p>
            </div>

            <div class="revs">
                <img src="../images/review/img_3.png">
                <h5>Nethmi Sithara</h5>
                <h5>Singer</h5> <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt architecto, beatae doloribus
                    itaque, maiores odit voluptatem quae minima debitis ipsum non corrupti mollitia. Accusantium
                    excepturi iusto facilis blanditiis. Ullam ea dolorum soluta, velit labore eum omnis quos
                    perspiciatis commodi incidunt.</p>
            </div>
        </section>

        <form class="more-see" action="review.html" method="get">
            <button type="submit">See More...<i class="fa-solid fa-location-arrow"></i></button>
        </form>
    </div><!-- review part end -->

    <!-- Foot Part -->
    <div class="footer">
        <div class="foot">
            <div class="qr">
                <img src="../images/qr code.png" alt="qr">
            </div> <!-- qr -->

            <div class="call-us">
                <h3>Call Us</h3>
                <p>Tel : +9411243156</p>
                <p>Fax : +9411243156</p>
                <p>Email : medigoodpharmacy5.2@gmail.com</p>
            </div> <!-- call-us -->

            <div class="address">
                <h2>Medi Good</h2>
                <p>Online Pharmacy Service</p>
                <p id="p-1">No. 12/3, Galle Road,</p>
                <p id="p-2">Colombo 07.</p>
            </div> <!-- address -->

            <div class="socail-media">
                <hr id="line">
                <a href="#"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g fa-2x"></i></a>

            </div> <!-- social-media -->

            <div class="badje">
                <img src="../images/badje.png" alt="logo">
            </div> <!-- badje -->
        </div> <!-- foot -->

        <div class="copy-right">
            <p>Copyright &copy 2021 MediGoodPharmacy</p>
        </div> <!-- copy-right -->
    </div> <!-- footer end -->

</body>

</html>