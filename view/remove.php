<?php

require_once '../controller/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM product WHERE id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Remove Product</title>
    </head>
    <body>

    <h3>Do you really want to remove ?</h3>
    <form action="../controller/remove.php" method="post">

        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
        <button type="submit">Save Changes</button>
        <a href="produits.php"><button type="button">Back</button></a>
    </form>

    </body>
    </html>

    <?php
}
?>