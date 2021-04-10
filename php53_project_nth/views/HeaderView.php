<style type="text/css">
  .login li .customer a{
    text-decoration:none;
    color:black;
  }
  .login li .customer{
    float: right;
    padding-top: 10px;
    padding-right: 20px;
  }
  .login li{
    list-style: none;
    padding-bottom: 30px;
  }
  .login{
    background: #f6f6f6;
  }
</style>
<div class="header">
  <div class="login">
        <li><div class="customer"> 
        <?php if(isset($_SESSION["customer_email"]) == false): ?>
        <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a>
        <?php else: ?>
          <a href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a>
        <?php endif; ?>
         </div></li>
      </div>
    <div class="banner">
      <div class="banner-logo">
        <a href="trang-chu"><img src="assets/frontend/images/logo.jpg"></a>
      </div>
      <div class="banner-timkiem">
        <ul>
          <li><a href="#">Hệ thống cửa hàng</a></li>
          <li><a href="#">Liên hệ</a></li>
          <li><div class="banner-timkiemcon">
            <ul>
              <li><select name="select" id="select">
                  <option selected="selected" value="0">Sản phẩm</option>
                  <option value="1">Bài viết</option>
                  <option value="2">Hàng hóa</option>
                </select></li>
                <li class="search">
                   <div class="col-xs-12 col-sm-12 col-md-6 header-search"> 
      <!--<form method="post" id="frm" action="">-->
                <div style="margin-top:25px; position: relative;">
                  <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
                  <button style="margin-top:5px;border:0px;background: none;" type="submit"> <i class="fa fa-search" id="se" onclick="return search();" style="position: absolute; top:3px;"></i> </button>
                  <div class="smart-search">
                    <ul>
                    </ul>
                  </div>
                </div>
                      <style type="text/css">
                        .smart-search img{width: 70px; margin-right: 5px;}
                        .smart-search{
                            position: absolute;width: 100%; 
                          z-index: 1; 
                          display: none; 
                          max-height: 350px; overflow: scroll;
                        }
                        .smart-search ul{
                          padding:0px; margin:0px; list-style: none;

                        }
                        .smart-search ul li{background: white; 
                          display: inline-block;
                          border-bottom: 1px solid #dddddd;}
                        .search{
                          margin-top:-24px;
                        }
                        #se{
                          padding-bottom: 10px;
                        }
                      </style>
                      <script type="text/javascript">
                        $(document).ready(function(){
                          //khi go phim vao o textbox
                          $("#key").keyup(function(){
                            //lay gia tri vua nhap vao
                            var strKey = $("#key").val();
                            //ham trim() loai bo khoang trang
                            strKey = strKey.trim();
                            if(strKey != ""){
                              //hien thi the html co class=smart-search
                              $(".smart-search").attr("style","display:block");
                              //---
                              //ajax de lay du lieu
                              $.ajax({
                                url: "index.php?controller=products&action=ajax&key="+strKey,
                                success: function( result ) {
                                  //clear tat ca cac the li
                                  $(".smart-search ul").empty();
                                  //them ket qua vua tim thay
                                  $(".smart-search ul").append(result);
                                }
                              });
                              //---
                            }else
                              $(".smart-search").attr("style","display:none");
                          });
                        });
                      </script>
                      <!--</form>--> 
                    </div>
                   </li>

              </ul>
            </div>
          </li>
          <li><a href="gio-hang"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
    <nav class="menu">
        <ul>
          <li><a href="#">HỆ THỐNG  <img id="so" src="assets/frontend/images/71.jpg"width="25"> CỬA HÀNG</a></li>
          <li><a href="#">GIỚI THIỆU <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="submenu">
              <li><a href="#">GIỚI THIỆU</a></li>
              <li><a href="#">ADAM & KHÁCH HÀNG</a></li>
              <li><a href="#">ƯU ĐÃI ĐỐI TÁC ADAM</a></li>
            </ul>
          </li>
          <li><a href="#">SẢN PHẨM <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="submenu">
              <?php 
              //load cap 1
              $categories = $this->modelGetCategories();
           ?>
           <?php foreach($categories as $rows): ?>
            <li><a href="index.php?controller=products&action=categories&category_id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
              <?php 
                //load cap 2
                $categoriesSub = $this->modelGetCategoriesSub($rows->id);
             ?>
             <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;"><a href="index.php?controller=products&action=categories&category_id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?>
            <?php endforeach; ?>
            </ul>
          </li>
          <li><a href="index.php?controller=cart">LOOKBOOK</a></li>
          <li><a href="tin-tuc">GÓC ADAM</a></li>
          <li><a href="index.php?controller=contact">ADAMSTORE 360 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="submenu">
              <li><a href="#">NEWS</a></li>
              <li><a href="#">KHUYẾN MÃI</a></li>
              <li><a href="#">ADAM VÀ BÁO CHÍ</a></li>
              <li><a href="#">ƯU ĐÃI ĐỐI TÁC ADAM</a></li>
              <li><a href="#">SAO VIỆT VÀ KHÁCH HÀNG</a></li>
              <li><a href="#">ADAM'S VIDEOS</a></li>
            </ul>
          </li>
        </ul>
      </nav>
  </div>