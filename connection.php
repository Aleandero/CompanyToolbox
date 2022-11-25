<html>
<?php
    $link = mysql_connect('sql7.freesqldatabase.com:3306', 'sql7580097', 'RWuYRdbM7h');
    $db_name = "sql7580097";  
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    mysql_close($link);
?>
</html>