<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
            <div class="footer-menu">
                    <h2 class="footer-wid-title">Chuyên mục </h2>
                    <ul>
                        <li><a href="#">Game Online</a></li>
                        <li><a href="#">Game Offline</a></li>
                        <li><a href="#">Game Steam</a></li>
                        <li><a href="#">Game Garena</a></li>
                        
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Thông tin </h2>
                    <ul>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Game bản quyển là gì</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Điều khoản dịch vụ</a></li>
                        
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Chăm sóc khách hàng</h2>
                    <ul>
                        <li><a href="#">Hỏi và trả lời</a></li>
       
                        <li><a href="#">Bảo hành</a></li>
                  
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
            <div class="footer-menu">
                    <h2 class="footer-wid-title">Liên hệ </h2>
                    <ul>
                        <li><a href="#">FaceBook</a></li>
                        <li><a href="#">Google+</a></li>
                        <li><a href="#">Youtobe</a></li>
                        <li><a href="#">Discord</a></li>
                        <li><a href="#">1900000</a></li>
                        <li><a href="#">thichladuoc@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="footer-menu">
                    <h2 class="footer-wid-title">Vị trí </h2>
                    <ul > 
                        <li><iframe style="height:350px;width:500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3012672182463!2d105.78717781440655!3d20.980557394799106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acce43a64245%3A0xdb176021a520454d!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBLaeG6v24gVHLDumMgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1601463992003!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></li>
                    </ul>
                </div>
            </div>
    </div>
    
</div> <!-- End footer top area -->


<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="js/bxslider.min.js"></script>
<script type="text/javascript" src="js/script.slider.js"></script>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
   
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 
     $('html, body').animate({scrollTop:0}, 'slow');
}</script>
<script>
function openCity(cityName,elmnt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";

}
// Get the element with id="defaultOpen" and click on it



function openpay(){
    alert("Quý khách vui lòng kiểm tra email, mọi thông báo (thẻ nạp thành công, thẻ bị sai) sẽ được gửi về email");
    window.location="index.php";
}
</script>
<script type="text/javascript">
      function animateNumber(finalNumber, duration = 5000, startNumber = 0, callback) {
  let currentNumber = startNumber
  const interval = window.setInterval(updateNumber, 17)
  function updateNumber() {
    if (currentNumber >= finalNumber) {
      clearInterval(interval)
    } else {
      let inc = Math.ceil(finalNumber / (duration / 17))
      if (currentNumber + inc > finalNumber) {
        currentNumber = finalNumber
        clearInterval(interval)
      } else {
        currentNumber += inc
      }
      callback(currentNumber)
    }
  }
}

document.addEventListener('DOMContentLoaded', function () {
  animateNumber(4000000, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('transaction-count').innerText = formattedNumber
  })
  
  animateNumber(5000, 3000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('customer-count').innerText = formattedNumber
  })
})
    </script>
</body>

</html>