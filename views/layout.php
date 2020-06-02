<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="views/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <title>ADVNTR</title>
    </head>

    <header class="topnav">
        <div class="form-inline">

            <style>

                .topnav {
                    /*overflow: hidden;*/
                    background-color: lightgrey;
                    top: 0;
                    left: 0;
                    width: 100%;
                    position: fixed;
                    z-index: 10; 
                }

                /* Links - change color on hover */
                .topnav a:hover {
                    background-color: #ddd;
                    color: #00A896;
                } 
                .logo {
                    position: relative;
                    height:auto;
                    width:auto;
/*                    line-height: 30px;*/
                    max-height: 3%;
                    max-width: 3%;
                    float: right;
                    padding: 0;
                }
                .h3 {
                    position: relative;
                    text-align: centre;
                }
                .login{
                    float: right;
                    text-align: right;
                }
                .home{
                    letter-spacing: 3px;
                }
            </style>

            <style>
                /* Sidenav with javascript */
                .sidenav {
                    height: 100%;
                    width: 0;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    left: 0;
                    background-color: #111;
                    overflow-x: hidden;
                    transition: 0.8s;
                    padding-top: 60px;
                }

                .sidenav a {
                    padding: 6px 200px 6px 6px;
                    text-decoration: none;
                    font-size: 20px;
                    color: #818181;
                    display: block;
                    transition: 0.5s;
                }

                .sidenav a:hover {
                    color: #f1f1f1;
                }

                .sidenav .closebtn {
                    position: absolute;
                    top: 0;
                    right: 0px;
                    font-size: 34px;
                    margin-left: 0px;
                }

                @media screen and (max-height: 450px) {
                    .sidenav {padding-top: 15px;}
                    .sidenav a {font-size: 18px;}
                }
                .hamburger{
                    text-align: centre;
                    left:5px;
                    top: 5px;
                    bottom:5px;
                }
            </style>

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
                <a href='?controller=blogger&action=create'>Register</a><br>
                <a href='?controller=blogger&action=login'>Login</a><br>
                <a href='?controller=blogger&action=logout'>Logout</a><br>
                <a href='?controller=blogPost&action=create'>Create&nbsp;new&nbsp;post</a><br>
                <a href='?controller=blogPost&action=readAll'>Posts</a><br>
                <a href='?controller=blogPost&action=search&category=1'>Popular&nbsp;Posts</a><br>
            </div>

            <span class="hamburger" style="font-size:35px;cursor: pointer; display: inline-block; text-align: centre" onclick="openNav()">&#9776;</span>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>
            <h3><a class ="home" style="display: inline-block;" href='?controller=pages&action=home'>ADVNTR</a></h3>
            <div class ="logo">
                <img src="logo1.png" class="img-fluid" >
            </div>
                            <div class="login"<p><?php
                    if (isset($_SESSION["blogName"])) {
                        echo $_SESSION['blogName'] . " " . $_SESSION['lastLogin'];
                    }
                    ?></p>
                </div>
            
                </div>
        

        

    </header
    
    <div class="w3-container w3-pink">
        <?php require_once('routes.php'); ?>
        </<div>

            
                <footer >
<!--     Copyright &COPY; <?//= date('Y'); ?>-->
                </footer>
        </div>
    </body>
</html>