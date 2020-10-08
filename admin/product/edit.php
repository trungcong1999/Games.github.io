<?php

require_once('./../commons/head.php');
require_once('./../../models/products.php');
require_once('./../../lib/upload.php');
require_once('./../../models/brand.php');
require_once('./../../models/cate.php');
if (isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
$brand = new Brand();
$listbrand =  $brand->getAllNoLimit();
$cate = new Cate();
$listcate = $cate->getAllnoLimit();
$product = new Product();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        $contents = $product->getContentProduct($id);
        //  var_dump($contents);
        $obj = $product->getProductById($id);
        //get  cate by product id
        $catesOfProduct = $cate->getCatesByProductId($id);
        if ($catesOfProduct == NULL) {
            $catesOfProduct = array(0, 0, 0);
        }
    } else {
        header('Location:index.php');
    }
}
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $count = $product->update($_POST);
    $_SESSION['success'] = "Sua thanh cong " . ' san pham';
    header('Location:edit.php?id=' . $id);
}
?>

<body>
    <?php
    require_once('./../commons/nav_menu.php');
    ?>
    <div class="container">
        <?php
        if (isset($_SESSION['success'])) {
        ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $_SESSION['success'] ?>
            </div>
        <?php
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="hidden" value="<?php echo $obj['id'] ?>" name="id" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tên</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj['name'] ?>" name="productName" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Giá</label>
                <div class="col-sm-10">
                    <input type="number" value="<?php echo $obj['price'] ?>" name="price" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Thương Hiệu</label>
                <div class="col-sm-10">
                    <select name="brand_id">

                        <?php foreach ($listbrand as $brand) {
                        ?>
                            <option <?php if ($brand['id'] == $obj['brand_id']) echo 'selected'; ?> value="<?php echo $brand['id']  ?>"><?php echo $brand['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <!-- 3 category -->
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">The Loai</label>
                <div class="col-sm-10">
                    <select name="cate_id[]">
                        <option value="0">Chon the loai</option>
                        <?php foreach ($listcate as $cate) {
                        ?>
                            <option <?php if ($cate['id'] == $catesOfProduct[0]['cate_id']) echo 'selected'; ?> value="<?php echo $cate['id'];  ?>"><?php echo $cate['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <?php
                    //     $numImg = $product->countNumImgOfProduct($obj['id']);
                    $listImg = $product->getImg($obj['id']);
                    foreach ($listImg as $r) { ?>
                        <img height="300px" width="400px" src="<?php echo 'uploads/' . $r['img'] ?>" alt="">
                    <?php } ?>
                    <br>
                    <input type="file" name="files[]" multiple />
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj['short_desc'] ?>" name="short_desc" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Keyword</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj['keyword'] ?>" name="keyword" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Giảm giá</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj['discount'] ?>" name="discount" placeholder="Bao nhiêu %">
                </div>
            </div>
            <h3>Đặc Điểm Nổi Bật</h3>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tiêu đề 1</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php if (count($contents) > 0)  echo $contents[0]['title'] ?>" name="title1">
                    <img height="300px" width="400px" src="<?php echo 'uploads/' . $contents[0]['img'] ?>" alt="">
                    <input type="file" name="file1" id="">
                    <textarea name="content1" cols="50" rows="10"><?php if (count($contents) > 0)  echo $contents[0]['content']; ?></textarea>
                </div>
            </div>
           
            <input type="submit" name="submit" value="Up Load" class="btn btn-primary"></input>
        </form>
    </div>
</body>
<?php
require_once('./../commons/footer.php');
?>