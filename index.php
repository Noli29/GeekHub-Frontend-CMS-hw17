<?php $title = "HomeWork17"; ?>

<?php include "scripts/head.php";?>

<main class="m-page">
        <div class="template">
            <div class="container">
                <h1>Free PSD Template</h1>
                <p>A long time ago in a galaxy far far away...</p>
            </div>
        </div>
        <div class="pink">
            <div class="container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud.</p>
            </div>

        </div>
        <div class="about-us" id="about">
            <div class="container">
                <div class="text">
                    <div class="btn-text">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud.
                            Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud.
                            Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud.
                            Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud.
                            Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud.
                            Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
                <div class="content">
                    <a href="#" class="btn btn-lg button ">Read more</a>
                </div>
            </div>
        </div>

        <div class="slider" id="video">
            <div class="container">
                <h2>Check out last articles</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div id="owl">
                    <div class="item"><img src="images/image1.png" alt="Owl Image"></div>
                    <div class="item"><img src="images/image2.png" alt="Owl Image"></div>
                    <div class="item"><img src="images/image3.png" alt="Owl Image"></div>
                    <div class="item"><img src="images/image4.png" alt="Owl Image"></div>
                    <div class="item"><img src="images/image5.png" alt="Owl Image"></div>
                    <div class="item"><img src="images/image6.png" alt="Owl Image"></div>
                    <div class="item"><img src="images/image7.png" alt="Owl Image"></div>
                    <div class="item"><img src="images/image8.png" alt="Owl Image"></div>
                </div>
                <div>
                    <div class="slider-icon">
                        <?php include('scripts/slider-items.php') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="ellipse" id="ellipse">
            <div class="container">

                <div class="lorem">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="circle">
                        <div class="circle2">
                            70
                        </div>
                    </div>
                    <div class="circle">
                        <div class="circle2">
                            400
                        </div>
                    </div>
                    <div class="circle">
                        <div class="circle2">
                            250
                        </div>
                    </div>
                </div>

                <div class="first">
                    <div class="text">
                        <h2>First impression about Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <?php include('scripts/block_lorem.php') ?>

                </div>
            </div>
        </div>
    </main>


<?php include "scripts/footer.php";?>
