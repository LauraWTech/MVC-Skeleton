<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<html>
    <body>
        <style> 

            /* Add a card effect for articles */
            .posts {
                float: left;
                background-color: white;
                width:75%; 
                padding: 40px;
                margin-top: 20px;
                image-orientation: centre;
                overflow: auto;
            }
        </style>

        <div class="header">
            <h1>All Advntr Posts</h1>
        </div>
        <hr style="height:1px;border-width:0;color:gray;background-color:lightgrey">

        <div class="posts">

            <?php
            foreach ($posts as $p) {
                ?>
                <h3><?php echo$p->title . PHP_EOL; ?></h3>

                <?php echo$p->content . PHP_EOL; ?> 
                <?php
                if ($p->postImage !== NULL) {
                    //$path = dirname(__DIR__) . "\\images\\"; 
                    $path = __DIR__ . "/../../views/images/";
                    //$path = __DIR__;
                    //$pathArray = explode ('/', $path);
                    //$length = count($pathArray);


                    $file = $path . $p->postImage;
                    //echo $file;
                    if (file_exists($file)) {
                        //need to use local path name to display images full name doesnt work
                        $img = "<img src='views/images/$p->postImage' width='800' height = '600' />";   //added /../
                        echo $img;
                    } else {
                        echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
                    }
                }
                echo$p->publishedAt . PHP_EOL;
            }
            ?>
            &nbsp;
            <div class="img">
                <img class="img" alt="image" style="width:100%;"">
                <!--                    </div>-->
            </div>
        </div>

    </body>
</html>
