<?php
//login
//connect to database
//include("connection.php");
//set cookie and validate 
if (isset($_COOKIE["type"])) {
    header("location: bloggerLogin.php");
}
$message = '';
//check if the variable has been set, if not, echo warning message
if (isset($_POST["login"])) {
    if (empty($_POST["blogName"] || $_POST["email"]) || empty($_POST["password"])) {
        $message = "<div class='alert alert-danger'>Both Fields are required</div>";
    } else {
        $query = "
  SELECT * FROM register_table 
  WHERE email = :email
  ";
        $statement = $connect->prepare($query);
        $statement->execute(
                array(
                    'email' => $_POST["email"]
                )
        );
        $count = $statement->rowCount();
        if ($count > 0) {
            $result = $statement->fetchAll();
            foreach ($result as $row) {
                if (password_verify($_POST["password"], $row["password"])) {
                    setcookie("type", $row["username"], time() + 60);
                    header("location:index.php");
                } else {
                    $message = '<div class="alert alert-danger">Wrong Password</div>';
                }
            }
        } else {
            $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
        }
    }
}

//setcookie("$firstName", "$lastName", time() - 86400);
if (!isset($_SESSION['attempts'])){
   $_SESSION['attempts'] = 0;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADVNTR</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <!--        <link rel="stylesheet" href ="views/css/styles.css">
        -->        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <header>
        <style>
            body,h1,h2,h3,h4,h5 {font-family: 'Montserrat', sans-serif;
            }

            h1{
                text-align: centre; 
                color: black;
            }
            .login1{
                text-align: left; 
            }
            .blogName{
                text-align: left; 
            }
            .password{
                text-align: left; 
            }
              /* Header/Blog Title */
            .header {
/*                font-family: 'Josefin Sans', sans-serif;*/
                font-size: 500%;
/*                letter-spacing: 3px;*/
                padding-bottom: 50px;
                padding-top:100px;
                text-align: right;

                /*                    background: white;*/
            }

            /*        body, html {
                        height: 200%;
                        text-align: centre;
                    }*/

            /*            body {
                            box-sizing: border-box;
                        }*/

            .bg-img {
                /* The image used */
                background-image: url("http://localhost/MVC-Skeleton/views/images/HCH_1772.jpg");
                min-height: 900px;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                max-width: 100%;
            }
            /* Add styles to the form container */
            .container {
                position: absolute;
                right: 0;
                margin: 20px;
                max-width: 400px;
                padding: 15px;
                background-color: white;
                opacity: 0.9;
                text-align: left;
            }

            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Set a style for the submit button */
            .button {
                background-color: #F0F3BD;
                color: black;
                padding: 15px 12px;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 5;
            }

            .button:hover {
                opacity: 5;
                background-color: #028090; 
            }
        </style>
    </header>

    <div class="bg-img">
        <div class="header">
            <h1>Start your Advntr now...</h1>
        </div>
        <body>
            <div class="container">
                <form action="" method = "POST" class="containerlogin" enctype="multipart/form-data">
                    <h2 class="login1">Login</h2>

                    <label for="Blog Name"><b>Blog Name</b></label>
                    <input type="text" placeholder="Enter Blog Name" name="blogName" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" onClick="refreshPage();" class="button">Login</button>
                    <script>
                        function refreshPage() {
                            window.location.reload();
                        }
                    </script>
                </form>
            </div>

    </div>
</body>

</html>



