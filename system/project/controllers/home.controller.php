<?php

$navigation = new view("navigation"); // expected location of the file: /system/project/views/navigation.php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage | <?php echo config::get("site_title"); ?></title>
</head>
<body>

<?php echo $navigation?>


    I am on the homepage <br>

    The URL of this project is <?php echo config::get("base_url", "unknown"); ?>
</body>
</html>