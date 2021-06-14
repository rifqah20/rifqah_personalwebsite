<html>
    <head>
        <title>Php handling </title>
</head>
<body>
    <?php
    pre_r($_POST)
    ?>
    <form action="" method="POST">
        <input type="text" name="firstname" value=""></p>
        <input type="text" name="lastname" value=""></p>
        <input type="submit" name="submit" value="submit">
        </form>
</body>
</html>

<?php

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>
