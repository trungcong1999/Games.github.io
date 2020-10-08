<?php
require_once('./models/brand.php');
require_once('./models/cate.php');
require_once('./models/products.php');
require_once('./models/slider.php');
require_once('./models/order.php');
session_start();
//get title for head
$_SESSION['title'] = 'Game is Life';
$actual_link = $_SERVER['PHP_SELF'];
switch ($actual_link) {
  case '/localhost/Games/index.php':
    $_SESSION['title'] = 'Game is Life ';
    break;
  case '/Games/shop.php':
    $_SESSION['title'] = 'Tất cả Sản Phẩm';
    break;
  case '/Games/cart.php':
    $_SESSION['title'] = 'Giỏ Hàng Của Bạn';
    break;
  case '/Games/checkout.php':
    $_SESSION['title'] = 'Check out';
    break;
  case '/Games/single-product.php':
    $_SESSION['title'] = 'Chi tiết Sản Phẩm';
    break;
  case '/Games/checkout.php':
    $_SESSION['title'] = 'Check out';
    break;
  case '/Games/category.php':
    $_SESSION['title'] = 'Danh mục Sản Phẩm';
    break;
  case '/Games/brand.php':
    $_SESSION['title'] = 'Thương hiệu';
    break;
  case '/Games/orders.php':
    $_SESSION['title'] = 'Danh Sách Đơn Hàng';
    break;
  default:
    $_SESSION['title'] = 'Game is Life';
    break;
}

if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == '') {
  header('Location:login.php');
}
if (isset($_GET['logout']) && $_GET['logout'] == true) {
  $_SESSION['user_login'] = '';
  $_SESSION['user_id'] = '';
  $_SESSION['cart'] = array();
  header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $_SESSION['title'] ?></title>

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" href="faicon.png">
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>