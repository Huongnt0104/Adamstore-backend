<!DOCTYPE html>
<html>
<head>
  <base href="http://localhost:81/PHP/php53_project_nth/">
  <title>Adam Store</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/muasp-style.css">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/chitietsp-style.css">
  <script type="text/javascript" src="jquery/jquery-3.5.1.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/frontend/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/frontend/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/frontend/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/frontend/owlcarousel/owl.carousel.min.js"></script>
</head>
<style type="text/css">
  .trangchu{
    padding-bottom: 20px;
  }
</style>
<body class="index">
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6061ba37f7ce18270934fa8a/1f1ururgd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- header -->
<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>
 <div class="trangchu">
      <ul>
        <li><img src="assets/frontend/images/connha.jpg"><a href="">Trang chủ</a></li>
        <li><a href="">BST SUIT ADAM STORE 2020</a></li> 
        <strong>Áo vest Adam be 2 hàng khuy-256</strong>
      </ul>
    </div>
<!-- end header -->
<div class="middle">
  <!-- main -->
    <?php echo $this->view; ?>
    <!-- /main -->
  <div class="footer">
    <div class="footer-top">
      <div class="thongtin">
        <img src="assets/frontend/images/footer-logo.jpg">
        <div class="sdt">
          <img src="assets/frontend/images/icon-dt.jpg">
          <strong>0984025104</strong>
        </div>
        <div class="sdt">
          <img src="assets/frontend/images/icon-mail.jpg">
          <strong>huongnt.it.haui@gmail.com</strong>
        </div>
      </div>
      <div class="dvkh">
        <h4>DỊCH VỤ KHÁCH HÀNG</h4>
        <ul>
          <li><a href="">NEWS</a></li>
          <li><a href="">KHUYẾN MÃI</a></li>
          <li><a href="">ADAM VÀ BÁO CHÍ</a></li>
          <li><a href="">ƯU ĐÃI ĐỐI TÁC ADAM</a></li>
          <li><a href="">SAO VIỆT VÀ KHÁCH HÀNG</a></li>
          <li><a href="">ADAM'S VIDEOS</a></li>
        </ul>
      </div>
      <div class="dvkh">
        <h4>DỊCH VỤ KHÁCH HÀNG</h4>
        <ul>
          <li><a href="">BST SUIT 2020</a></li>
          <li><a href="">SƠ MI NAM</a></li>
          <li><a href="">ÁO DA ADAM</a></li>
          <li><a href="">ÁO KHOÁC</a></li>
        </ul>
      </div>
      <div class="dvkh2">
        <ul>
          <li><a href="">ÁO LEN</a></li>
          <li><a href="">GIÀY DA NAM</a></li>
          <li><a href="">QUẦN ÂU NAM</a></li>
          <li><a href="">ÁO PHÔNG NAM</a></li>
        </ul>
      </div>
      <div class="dvkh2">
        <ul>
          <li><a href="">QUẦN NÓT NAM</a></li>
          <li><a href="">THẮT LƯNG NAM</a></li>
          <li><a href="">PHỤ KIỆN VEST</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      Copyrights © 2018 by <a href="">Adamstore</a>
    </div>
  </div>
</div>
<script type="text/javascript">
    // owl car
    var owl = $('.owl-carousel');
      owl.owlCarousel({
          items:4,
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:1500,
          autoplayHoverPause:true
      });
      $('.play').on('click',function(){
          owl.trigger('play.owl.autoplay',[1000])
      })
      $('.stop').on('click',function(){
          owl.trigger('stop.owl.autoplay')
      })
  </script>
</body>
</html>