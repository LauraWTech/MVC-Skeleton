<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

        <!--Link to the search button-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <h3>Sidebar</h3>
    <!--    <div id="sidebarIcon">
            <div class="toggle-btn" onclick="myFunction(this). menuList()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <style>
                .toggle-btn {
                    display: inline-block;
                    cursor: pointer;
                }
    
                .bar1, .bar2, .bar3 {
                    width: 35px;
                    height: 3px;
                    background-color: #333;
                    margin: 6px 0;
                    transition: 0.4s;
                }
    
                .change .bar1 {
                    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
                    transform: rotate(-45deg) translate(-9px, 6px);
                }
    
                .change .bar2 {opacity: 0;}
    
                .change .bar3 {
                    -webkit-transform: rotate(45deg) translate(-8px, -8px);
                    transform: rotate(45deg) translate(-8px, -8px);
                }
                .toggle-btn {
                    Padding: 10px;
                }
            </style>
            <script>
                function myFunction(x) {
                    x.classList.toggle("change");
                }
            </script>-->
    <div class="sidebar" id="mySidebar"style="display:none">
        <button class="toggle-btn" onclick="close()">☰</button>
        <button>&#9776</button>

        <!--        <div class="sidebar">-->
        <a href='?controller=blogger&action=create'>Register</a>
        <!--            <li><a href='?controller=blogger&action=login'>Login</a></li>
                    <li><a href='?controller=blogPost&action=create'>Create New Post</a></li>
                    <li><a href='?controller=blogPost&action=readAll'>Posts</a></li>
                    <li><a href='?controller=blogPost&action=search&category=1'>Popular Posts</a></li>
        
                    <a href='?controller=blogPostComment&action=create'>Add Comment</a>
                </ul>-->
        <div id="mySidebar"class="sidenav">
            <button class="toggle-btn" onclick="open()">☰</button>
        </div>
        <!--        </div>-->
        <style> 
            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }

        </style>
        <script>
            function open() {
                document.getElementbyId("sidebar").style.width = "250px";
            }
            function close() {
                document.getElementbyId("sidebar").style.width = "0";
            }
        </script>
    </div>