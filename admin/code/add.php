<?php

require_once('./../commons/head.php');
require_once('./../../models/cate.php');
if (isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
if (isset($_POST['name'])) {
    $cates = new Cate();
    $count = $cates->insert($_POST);
    if ($count == 1) {
        $_SESSION['success'] = 'Thêm thành công';
    }
}


?>