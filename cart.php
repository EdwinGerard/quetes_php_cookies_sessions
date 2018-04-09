<?php
session_start();

$cookieName = 'cart';
if (empty($_SESSION['loginname'])){
    header('Location: /login.php');
}
if (!empty($_POST['product'])){
    $_SESSION['cart'][] = $_POST['product'];
    $cookieValue[] = $_SESSION['cart'];
    setcookie($cookieName, serialize($cookieValue),time() + 365*24*3600, null, null, false, true);
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            if (isset($_COOKIE[$cookieName])) {
                ?>
                Les produits dans le panier sont:
                <ul>
                    <?php
                    foreach ($_SESSION['cart'] as $product) {
                        ?>
                        <li><?= $product; ?></li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            }else{
                echo 'Le panier est vide!';
            }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
