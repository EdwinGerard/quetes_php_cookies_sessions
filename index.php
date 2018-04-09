<?php
session_start();
if (!empty($_POST['loginname'])){
    $_SESSION['loginname'] = $_POST['loginname'];
}
if (!empty($_POST['loggout'])){
    session_unset();
    session_destroy();
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <?php
            if (!empty($_SESSION['loginname'])) {
            ?>
                <form action="/cart.php?add_to_cart=46" method="post">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <input type="hidden" name="product" value="Pecan nuts">
                    <input type="submit" value="Add to cart" class="btn btn-primary">
                </form>
                <?php
            }
            ?>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <?php
            if (!empty($_SESSION['loginname'])) {
                ?>
                <form action="/cart.php?add_to_cart=36" method="post">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <input type="hidden" name="product" value="Chocolate chips">
                    <input type="submit" value="Add to cart" class="btn btn-primary">
                </form>
                <?php
            }
            ?>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <?php
            if (!empty($_SESSION['loginname'])) {
                ?>
                <form action="/cart.php?add_to_cart=58" method="post">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <input type="hidden" name="product" value="Chocolate cookie">
                    <input type="submit" value="Add to cart" class="btn btn-primary">
                </form>
                <?php
            }
            ?>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <?php
            if (!empty($_SESSION['loginname'])) {
                ?>
                <form action="/cart.php?add_to_cart=32" method="post">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <input type="hidden" name="product" value="M&M's&copy; cookies">
                    <input type="submit" value="Add to cart" class="btn btn-primary">
                </form>
                <?php
            }
            ?>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
