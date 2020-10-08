<?php
include_once("inc/head.php");
include_once("inc/top.php");
?>

<?php
// hient trên tràng này
// lay so trang der phan trang
$products = new Product();
$pdo = new DB();
$pdo = $pdo->getPDO();
$cates = new Cate();
if (isset($_GET['cate']) && is_numeric($_GET['cate'])) {
    $id = $_GET['cate'];
    $cate = $cates->getCateById($id);
    $list = $products->getListProductByCategory($id);
}

?>



<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php foreach ($list as $product) { ?>
                <?php $listImg = $products->getImg($product['id']); ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img height="250px" width="300px" src="<?php echo 'admin/product/uploads/' . $listImg[1]['img'] ?>" alt="<?php echo $product['name'] ?>">
                        </div>
                        <h2><a href="single-product.php?product_id=<?php echo $product['id']; ?>"><?php echo $product['name'] ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php $sellprice = $product['price'] * (100 - $product['discount']) / 100;
                                    echo number_format($sellprice) . ' VND' ?></ins>
                            <del><?php if ($sellprice != $product['price']) echo number_format($product['price']) . ' VND' ?></del>
                        </div>
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" rel="nofollow" href="?cate=<?php echo $id ?>&&add-to-cart=<?php echo $product['id'] ?>">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

            <?php  } ?>
        </div>

    </div>
</div>

<style>
    .pagenum {
        color: black
    }
</style>
<?php
include_once("inc/footer.php")
?>