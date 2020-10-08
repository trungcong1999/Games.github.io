<?php
include_once("inc/head.php");
include_once("inc/top.php");
?>



<!-- <?php
        $products = new Product();
        $pdo = new DB();
        $pdo = $pdo->getPDO();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try { //tinh tona
            if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $count = 10;
            $offset = ($page - 1) * $count;
            //get lits products
            $list = $products->getAll($offset, $count);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        ?> -->
<?php
$listProducts = array();
if (isset($_GET['search_key']) && !empty($_GET['search_key'])) {
    $keyword = $_GET['search_key'];
    $product = new Product();
    $brand = new Brand();
    $category = new Cate();
    $resultSearch = $product->getListBySearch($keyword);
    // var_dump($resultSearch);
    $listProducts = $resultSearch;
}
?>




<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <h2>Kết quả tìm kiếm cho từ khóa :
                <?php
                echo $keyword;
                ?></h2>
            <!-- show listProducts -->
            <?php foreach ($listProducts as $product) { ?>
                <?php $listImg = $products->getImg($product['id']); ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img width="300" height="300" alt="IMG" class="shop_thumbnail" src="<?php echo 'admin/product/uploads/' . $listImg[1]['img'] ?>" alt="<?php echo $product['name'] ?>">
                        </div>
                        <h2><a href="single-product.php?product_id=<?php echo $product['id']; ?>"><?php echo $product['name'] ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php $sellprice = $product['price'] * (100 - $product['discount']) / 100;
                                    echo number_format($sellprice) . ' VND' ?></ins>
                            <del><?php if ($sellprice != $product['price']) echo number_format($product['price']) . ' VND' ?></del>
                        </div>
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1"" rel=" nofollow" href="?add-to-cart=<?php echo $product['id'] ?>">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

            <?php  } ?>

        </div>
        <!-- hien danh sach trang  -->

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