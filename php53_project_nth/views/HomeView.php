<?php 
	//load LayoutTrangChu.php
	$this->layoutPath = "LayoutTrangChu.php";
 ?>
<div class="bosuutap">

      <h3>BỘ SƯU TẬP</h3>
      <div class="bst-list">
        <ul>
          <li><a href="#">BST SUIT ADAM STORE 2020</a></li>
          <li><a href="#">SƠ MI NAM ADAM STORE</a></li>
          <li><a href="#">GIÀY DA ADAM STORE</a></li>
          <li><a href="#">QUẦN ÂU ADAM STORE</a></li>
        </ul>
      </div>
    </div>
    <div class="list1">
      <?php $products = $this->modelHotProducts(); ?>
                
      <div class="owl-carousel owl-theme">
         <?php foreach($products as $rows): ?>
          <div class="item">
            <div style="position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: red; color:white; text-align: center;left:210px;"><?php echo $rows->discount; ?>%</div>
            <div class="item1">
              <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
            </div>
            <div class="item2">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a><br>
              <strong style="color:red;"><p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?> </span>₫ </span> </p></strong>
                      <div class="action-btn">
                        <form >
                          <a style="background: red;color:white;align-items: center;margin-left: 10px;" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Thêm vào giỏ hàng</a>
                        </form>
                      </div>
                      <style type="text/css">
                        .item2 a:hover{
                          color: red;
                        }
                      </style>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
      <div class="xemsp">
        <a href="#">XEM TẤT CẢ SẢN PHẨM</a>
      </div>
    </div>
    <div class="bosuutap">
      <h3>KHUYẾN MÃI</h3>
    </div>
    <div class="list2">
      <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list2.1.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">INDEPENDENCE DAY - SALE UP TO 50%</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list2.2.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">𝗖𝗛𝗘𝗖𝗞 𝗜𝗡 𝗧𝗢 𝗛𝗔𝗣𝗣𝗜𝗡𝗘𝗦𝗦 𝗧𝗮̣̆𝗻𝗴 𝗻𝗴𝗮𝘆 𝗯𝗼̣̂ 𝗾𝘂𝗮̀ 𝘁𝗮̣̆𝗻𝗴 𝘁𝗿𝗶̣ 𝗴𝗶𝗮́ 𝟭.𝟮𝟬𝟬.𝟬𝟬𝟬 𝗩𝗡Đ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list2.3.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">QUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list2.4.png"></a>
            </div>
            <div class="item3"><a href="">SẮM VEST SANG - NHẬN NGAY QUÀ VÀNG LÊN ĐẾN 30 TRIỆU VNĐQUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list2.5.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">SĂN SALE GIẢI NHIỆT UP TO 50%</a><br>
            </div>
          </div>
      </div>
      <div class="xemsp">
        <a href="#">XEM THÊM</a>
      </div>
    </div>
    <div class="bosuutap">
      <h3>ADAM STORE 360</h3>
    </div>
    <div class="list2">
      <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list3.1.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">INDEPENDENCE DAY - SALE UP TO 50%</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list3.2.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">𝗖𝗛𝗘𝗖𝗞 𝗜𝗡 𝗧𝗢 𝗛𝗔𝗣𝗣𝗜𝗡𝗘𝗦𝗦 𝗧𝗮̣̆𝗻𝗴 𝗻𝗴𝗮𝘆 𝗯𝗼̣̂ 𝗾𝘂𝗮̀ 𝘁𝗮̣̆𝗻𝗴 𝘁𝗿𝗶̣ 𝗴𝗶𝗮́ 𝟭.𝟮𝟬𝟬.𝟬𝟬𝟬 𝗩𝗡Đ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list3.3.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">QUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list3.4.jpg"></a>
            </div>
            <div class="item3"><a href="">SẮM VEST SANG - NHẬN NGAY QUÀ VÀNG LÊN ĐẾN 30 TRIỆU VNĐQUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list3.5.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">SĂN SALE GIẢI NHIỆT UP TO 50%</a><br>
            </div>
          </div>
      </div>
      <div class="xemsp">
        <a href="#">XEM THÊM</a>
      </div>
    </div>
    <div class="bosuutap">
      <h3>KHÁCH HÀNG VÀ SAO VIỆT</h3>
    </div>
    <div class="list2">
      <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list4.1.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">INDEPENDENCE DAY - SALE UP TO 50%</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list4.2.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">𝗖𝗛𝗘𝗖𝗞 𝗜𝗡 𝗧𝗢 𝗛𝗔𝗣𝗣𝗜𝗡𝗘𝗦𝗦 𝗧𝗮̣̆𝗻𝗴 𝗻𝗴𝗮𝘆 𝗯𝗼̣̂ 𝗾𝘂𝗮̀ 𝘁𝗮̣̆𝗻𝗴 𝘁𝗿𝗶̣ 𝗴𝗶𝗮́ 𝟭.𝟮𝟬𝟬.𝟬𝟬𝟬 𝗩𝗡Đ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list4.3.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">QUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list4.4.jpg"></a>
            </div>
            <div class="item3"><a href="">SẮM VEST SANG - NHẬN NGAY QUÀ VÀNG LÊN ĐẾN 30 TRIỆU VNĐQUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list4.5.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">SĂN SALE GIẢI NHIỆT UP TO 50%</a><br>
            </div>
          </div>
      </div>
      <div class="xemsp">
        <a href="#">XEM THÊM</a>
      </div>
    </div>
    <div class="bosuutap">
      <h3>LOOKBOOK</h3>
    </div>
    <div class="list2">
      <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list5.1.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">INDEPENDENCE DAY - SALE UP TO 50%</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list5.2.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">𝗖𝗛𝗘𝗖𝗞 𝗜𝗡 𝗧𝗢 𝗛𝗔𝗣𝗣𝗜𝗡𝗘𝗦𝗦 𝗧𝗮̣̆𝗻𝗴 𝗻𝗴𝗮𝘆 𝗯𝗼̣̂ 𝗾𝘂𝗮̀ 𝘁𝗮̣̆𝗻𝗴 𝘁𝗿𝗶̣ 𝗴𝗶𝗮́ 𝟭.𝟮𝟬𝟬.𝟬𝟬𝟬 𝗩𝗡Đ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list5.3.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">QUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list5.4.jpg"></a>
            </div>
            <div class="item3"><a href="">SẮM VEST SANG - NHẬN NGAY QUÀ VÀNG LÊN ĐẾN 30 TRIỆU VNĐQUAY TAY CHƠI HAY TRÚNG DỄ</a><br>
            </div>
          </div>
          <div class="item">
            <div class="item1">
              <a href="#"><img src="assets/frontend/images/list5.5.jpg"></a>
            </div>
            <div class="item3">
              <a href="#">SĂN SALE GIẢI NHIỆT UP TO 50%</a><br>
            </div>
          </div>
      </div>
      <div class="xemsp">
        <a href="#">XEM THÊM</a>
      </div>
    </div>
  </div>