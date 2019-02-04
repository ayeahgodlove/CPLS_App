<!DOCTYPE html>
<!--Ayeah Godlove Akoni-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(@$_GET['page'])
            {
                $url = $_GET['page'].".php";
                if(is_file($url))
                {
                    include $url;
                }
                else
                {
                    echo 'request file is not found !';
                }
            }
            else
            {
                //include 'page.php';
            }
                    
        ?>

    </body>
</html>
