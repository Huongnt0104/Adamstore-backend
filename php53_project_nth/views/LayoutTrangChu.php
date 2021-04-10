<!DOCTYPE html>
<html>
<head>
  <base href="http://localhost:81/PHP/php53_project_nth/">
  <title>Adam Store</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">
  <script type="text/javascript" src="jquery/jquery-3.5.1.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/frontend/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/frontend/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/frontend/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/frontend/owlcarousel/owl.carousel.min.js"></script>
</head>
<body>
<div class="wrapper">
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
  <!-- /header -->
  <div class="middle">
    <div class="box">
      <img class="imgShow" src="assets/frontend/images/3.jpg">
      <div class="prev"><i class="fa fa-chevron-left" onclick="Back();"></i></div>
      <div class="next"><i class="fa fa-chevron-right" onclick="Next();"></i></div>
    </div>
    <div class="mau">
      <div class="mau-img1">
        <img src="assets/frontend/images/mau-img1.jpg" class="image" >
        <div class="readmore">
          <div class="giayda">VEST NAM</div>
            <div class="text-img1"><a href="#">XEM THÊM</a></div>
        </div>
      </div>
      <div class="mau-img">
        <div class="mau-top">
          <div class="mau-img2">
            <img src="assets/frontend/images/mau-img2.jpg" class="image">
            <div class="readmore">
              <div class="giayda">ÁO DA</div>
                <div class="text-img2"><a href="#">XEM THÊM</a></div>
            </div>
          </div>
          <div class="mau-img2">
            <img src="assets/frontend/images/mau-img3.jpg" class="image">
            <div class="readmore">
              <div class="giayda">ÁO LEN</div>
                <div class="text-img2"><a href="#">XEM THÊM</a></div>
            </div>
          </div>
        </div>
        <div class="mau-bottom">
          <img src="assets/frontend/images/mau-img4.jpg" class="image">
          <div class="readmore">
            <div class="giayda">GIÀY DA</div>
              <div class="text-img1"><a href="#">XEM THÊM</a></div>
           </div>
        </div>
      </div>
    </div>
    <div class="video">
      <iframe width="1000" height="590" src="https://www.youtube.com/embed/w4c2b434yjg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <!-- main -->
        
        <?php echo $this->view; ?> 
        
        <!-- end main --> 
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
    $(document).ready(function(){
      // khai báo array chua danh sách ảnh
      var slide = Array();
      slide[0] = "assets/frontend/images/1.jpg";
      slide[1] = "assets/frontend/images/2.jpg";
      slide[2] = "assets/frontend/images/3.jpg";
      slide[3] = "assets/frontend/images/4.jpg";
      slide[4] = "assets/frontend/images/5.jpg";
      // khai báo biến key lưu vị trí của vị trí ảnh
      var key = 0;
      // bắt sự kiện click của class = next
      $(".next").click(function(){
        // ẩn thẻ html có id = imgShow
        $(".imgShow").fadeOut(function(){
          // thay giá trị thuộc tính src của class= imgShow
          $(".imgShow").attr("src",slide[key]);
          // hiển thị thẻ có class = imgShow
          $(".imgShow").fadeIn();
          // tăng key lên 1
          key++;
          // nếu đến vị trí cuối thì reset key =0
          if(key == slide.length){
            key = 0;
          }
        });
      });
      // bắt sự kiện click của class = prev
        $(".prev").click(function(){
        // ẩn thẻ html có id = imgShow
        $(".imgShow").fadeOut(function(){
            // nếu đến vị trí cuối thì reset key =0
          if(key == 0){
            key = slide.length -1;
          }
          // thay giá trị thuộc tính src của class= imgShow
          $(".imgShow").attr("src",slide[key]);
          // hiển thị thẻ có class = imgShow
          $(".imgShow").fadeIn();
          // tăng key lên 1
          key--;
        });
      });
    });
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