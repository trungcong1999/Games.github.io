<?php
include_once("inc/head.php");
include_once("inc/top.php");
?>
<div style="clear:both;padding-top:20px;"></div>
<div class="container" style="border:1px solid #000;width: 50% !important;">

    <div class="cskh">
        <form method="post" enctype="multipart/form-data" action="" onsubmit="return check_field()"
            style="padding: 10px;">
            <div class="button-cart">
            </div>
            <h2>Nạp tiền vào tài khoản</h2>
            <p>Số tiền cần nạp thêm để thanh toán đơn hàng:</p>
            <p>Phương thức nạp tiền *</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <p>Vui lòng chọn phương thức thanh toán cho đơn hàng này</p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('Garena', this)"> Nạp thẻ Garena</p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('nganhang', this)"> Chuyển khoản ngân
                hàng</p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('', this)"> Thanh toán qua ví VTC</p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('', this)"> Nạp thẻ tự động bằng thẻ
                ngân hàng
            </p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('', this)"> Chuyển khoản MoMo - Nạp
                tiền tại
                FPT Shop,TGDĐ,ĐMX,Circle K</p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('', this)">Nạp tiền tại điểm giao
                dịch Viettel
                - Viettelpay</p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('', this)"> Giao dịch trực tiếp</p>
            <p><input type="radio" name="garena" class="tablink" onclick="openCity('', this)"> Nộp tiền tại nhà</p>

        </form>
    </div>
</div>
<div style="clear:both;padding-top:20px;"></div>
<div class="showpayment">
    <div id="Garena" class="tabcontent">
        <h1>Cần nạp 600.000 VNĐ Thẻ Garena</h1>
        <p>Phí Nạp thẻ garena là 25%</p>
        <input type="submit" value="Nạp" onclick="openpay();">
        

    </div>

    <div id="nganhang" class="tabcontent">
        <h1>Vui lòng chọn ngân hàng bạn muốn *</h1>
        <p><img src="img/"></p>
    </div>
</div>
<script>
</div>
<div style="clear:both;padding-top:30px;"></div>
<?php
include_once("inc/footer.php");
?>