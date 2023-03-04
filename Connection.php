<html>
    <head>
        <title>PHP connect with MySQL</title>
    </head>
    <body>
        <?php
           $conn=mysqli_connect('localhost','root','','fruit');
            if(!$conn){
                die("Connection Faild : ".mysqli_connect_error());
            }
        ?>
    </body>
</html>