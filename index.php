<!DOCTYPE html>
    <?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADVNTR</title>
    </head>

    <?php
    require_once('connection.php');

    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    } else {
        $controller = 'pages';
        $action = 'home';
    }

    require_once('views/layout.php');
    ?>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <header>
        <style>
            html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}

            html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:5}


            body {
                font-family: 'Montserrat', sans-serif;
                padding-top: 10px;
                background: #FAFAFA;

            }

            /* Header/Blog Title */
            .header {
                font-family: 'Josefin Sans', sans-serif;
                font-size: 500%;
                letter-spacing: 3px;
                padding-bottom: 100px;
                padding-top:150px;
                text-align: center;
                
                /*                    background: white;*/
            }

            /* Create two unequal columns that floats next to each other 
               posts and right */

            .posts {
                float: left;
                width: 75%;
                padding: 40px;
                overflow: auto;
            }
            /* Add a card effect for articles */
            .right {
                float: right;
                width: 25%;
                padding: 40px;
                overflow: auto;
            }
            /* image */
            .img {

                padding: 0px;
                position: centre;
            }
            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }


            /* Right column */
            /*                    .rightcolumn {
                                    float: right;
                                    width: 25%;
                                    padding: 5px;
                                    overflow: auto;
                                    text-align: centre;
                                }*/




            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                /*                background: #ddd;*/
                margin-top: 20px;
            }

            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 800px) {
                .leftcolumn, .rightcolumn {
                    width: 100%;
                    padding: 0;
                }
            }
            /*                .logo{
            
                            }*/
            .categoryButton{
                color: black;
            }
            .categoryButton a:hover{
                background-color: #ddd;
                color: #00A896;  
            }
            /* Style all font awesome icons */
            .fa {
                padding: 30px;
                font-size: 30px;
                width: 10px;
                text-align: center;
                text-decoration: none;

            }
            /* Add a hover effect if you want */
            .fa:hover {
                color: black;
                opacity: 0.7;
            }

            /* Set a specific color for each brand */

            /* Facebook */
            .fa-facebook {

                color: lightgrey;
            }

            /* Twitter */
            .fa-twitter {

                color: lightgrey;
            }
            /* Instagram */
            .fa-instagram {

                color: lightgrey;
            }
        </style>
    </header>
    <body>
        <div class="header">
<!--            <div class ="headerImg">
                <img src="logo1.png" class="img-fluid" >
            </div>-->
            <h1>Start your Advntr here!</h1>
        </div>
        <hr style="height:1px;border-width:0;color:gray;background-color:lightgrey">
        <div class="row">
            <div class="posts">

                <h2>Outdoor and Adventure Blog</h2>
                <h5>Sharing stories of outdoor adventures, articles and memories.</h5>
                <div class="img">
                    <img src= "HCH_1772.jpg" alt="image" style="width:100%;">
                </div>
                <hr style="height:1px;border-width:0;color:gray;background-color:gray">
                <!--                    <div class="readMore">
                                        <p><button class="button padding white border"><b>READ MORE »</b></button></p>-->
            </div>
            <div class="right">

                <h2>About Advntr</h2>
                <div class="img">
                    <img src= "Image1.png" alt="image" style="width:100%;">
                </div><br>
                <h5>Founded by 4 women, Hannah, Aman, Jo and Laura from Get Into Tech, Sky. Tell us about you and your adventures!</h5>
                <hr style="height:1px;border-width:0;color:gray;background-color:gray">
            </div>

            <div class="posts">
                <h2>7 Things You’ll Learn on your First Canyon Adventure</h2>
                <h5>Canyoning is an adventure and exploration sport where participants climb into a wetsuit and get themselves down a river, gorge or – you guessed it – canyon. It involves using a variety of techniques ranging from walking, jumping and scrambling to abseiling and rock climbing. Canyoning in itself is a bit of a multi-sport adventure.

                    If you’ve not done it before, the whole process can be a little daunting. But the good thing about canyoning is that it can often be as relaxing or as intense and adrenaline-fuelled as you want it to be. There are different routes depending on ability and confidence. Even within the same canyon there are often different options and a variety of ways back down.

                    At it’s best, canyoning isn’t just an adrenaline hit, it’s an inimitable and intimate way to explore and enjoy beautiful natural spaces in a manner that’s otherwise simply not possible.

                    Here are a few things that you’ll learn on your first canyoning trip, with the add-ins of a few epic places and ways to try it out. Sep 2, 2017</h5>
                <div class="img"></div>
                <img src= "canyoning.png" alt="image" style="width:100%;">

                <!--                <div class="Comment">-->
                <!--                    <div class="readMore">
                                        <p><button class="button padding white border"><b>READ MORE »</b></button></p>
                                    </div>-->
                <!--                    <div class="small">
                                        <p><span class="comment-button"><b>Comments  </b> <span class="tag">0</span></span></p>-->
                <!--                    </div>-->
            </div>
            <div class="right">
                <h2>Choose a Category</h2>
                <form action="" method = "POST" class="categoryButton" enctype="multipart/form-data" id="category" name= "categoryID">
                    <p>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=1'>Canyoning</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=2'>Climbing</a></button>  
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=3'>Hikes</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=4'>Wild Swimming</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=5'>Fell Running</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=6'>Kayaking</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=7'>Cycling</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=8'>Fishing</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=9'>Coasteering</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=10'>Camping</a></button>
                        <button class="btn"><a href='?controller=blogPost&action=category&specificCategory=11'>Family Trips</a></button>
                    </p>
                </form>
            </div>

        </div>
        <hr style="height:1px;border-width:0;color:gray;background-color:lightgrey">
        <div class="footer">
            <h2>Follow Us</h2>
            <!-- Add font awesome icons -->
            <a href="https://www.instagram.com/advntr.cc/" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/advntr.cc/" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/advntr.cc/" class="fa fa-instagram"></a>

        </div>
        <!--        <div class="right">
                    <h2>About Me</h2>-->
        <!--<div class="img">
           <img src= "https://localhost/MVC-Skeleton/views/images/HCH_1772.jpg" alt="image" style="width:100%;"> 
        </div>-->
<!--                        <h4><p><?php // echo $_SESSION ['aboutMe']                ?></p></h4>
        <h5><p><?php // echo $_SESSION ['intro']                ?></p></h5>-->
        <!--        </div>-->
        <!--                    <div class="card">
                                <h3>Popular Post</h3>
                                <div class="img">Image</div><br>
                                <div class="img">Image</div><br>
                                <div class="img">Image</div>
                            </div>-->




        <!--
                <div class="footer">
                    <h2>Home</h2>
                    <div class="logo" style="height:50px;"></div>
                </div> -->

        <!-- Labels / tags -->

        <!--            <div class="container">
                        <h4>Tags</h4>
                    </div>-->
        <!--            <div class="container-fluid">-->

        <!--    </div>
        </div>
        </div>-->
    </body>
</html>