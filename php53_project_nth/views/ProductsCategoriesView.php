<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong1.php";
  $category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
 ?>
 <style type="text/css">
   .item2 a{
    margin-left: -55px;
   }
   .item2 p{
    margin-left: -23px;
    color:red;
   }
   .sott{
    margin-top:10px;
   }
 </style>
<img src="assets/frontend/images/aovest.jpg">
    <div class="dssp">
      <div class="select">
        Sắp xếp:
        <select name="SortBy" id="SortBy" onchange="location.href = 'index.php?controller=products&action=categories&category_id=<?php echo $category_id; ?>&order='+this.value;">
            <option value="manual">Tùy chọn</option>
            <option value="best-selling">Sản phẩm bán chạy</option>
            <option value="nameAsc">Theo bảng chữ cái từ A-Z</option>
            <option value="nameDesc">Theo bảng chữ cái từ Z-A</option>
            <option value="priceAsc">Giá từ thấp tới cao</option>
            <option value="priceDesc">Giá từ cao tới thấp</option>
            <option value="created-descending">Mới nhất</option>
            <option value="created-ascending">Cũ nhất</option>
        </select>
      </div>
      <h3><?php echo $this->getCategory($category_id); ?></h3>
      <!-- ds1 -->
      <div class="owl-carousel owl-theme">
         <?php foreach($data as $rows): ?>
          <div class="item">
            <div style="position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: red; color:white; text-align: center;left:210px;"><?php echo $rows->discount; ?>%</div>
            <div class="item1">
              <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
            </div>
            <div class="item2" style="padding-left:40px; ">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a><br>
              <strong><p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?> </span>₫ </span> </p></strong>
                      <div class="action-btn">
                        <form >
                          <a style="background: black;color:white;align-items: center;margin-left: -40px;" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Thêm vào giỏ hàng</a>
                        </form>
                      </div>
            </div>

          </div>
          <?php endforeach; ?>
      </div>
      <!-- /ds1 -->
      <!-- trang -->
      <div class="sott">
        <ul>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">></a></li>
          <li><a href="#">>></a></li>
        </ul>
      </div>
      <!-- /trang -->
    </div>
    <div class="bosuutap">
      <h3>SẢN PHẨM ĐÃ XEM</h3>
    </div>
    
   <div class="list1">                
      <div class="owl-carousel owl-theme">
         <?php foreach($data as $rows): ?>
          <div class="item">
            <div style="position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: red; color:white; text-align: center;left:210px;"><?php echo $rows->discount; ?>%</div>
            <div class="item1">
              <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
            </div>
            <div class="item2" style="text-align: center;margin-left: 10px;">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a><br>
              <strong><p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?> </span>₫ </span> </p></strong>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
      <div class="xemsp">
        <a href="#">XEM TẤT CẢ SẢN PHẨM</a>
      </div>
    </div>