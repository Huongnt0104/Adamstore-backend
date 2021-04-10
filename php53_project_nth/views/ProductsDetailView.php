<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
  
 ?>
<img src="assets/frontend/images/aovest.jpg">
    <div class="sanphamcanmua">
      <div class="muasp">
        <div class="sp" style="width: 310px;">
           <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
          <ul>
            <li><img src="assets/upload/products/<?php echo $record->photo; ?>" onclick="ChangeImage('img1');" id="img1"></li>
          </ul>
        </div>
      </div>
      <div class="thongtinmuasp">
        <h3><?php echo $record->name; ?></h3><br>
        <strong id="giasp"><p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span></p>
      <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price-($record->price*$record->discount)/100); ?>₫ </span></span></p></strong><br>
        <strong id="loaisp">Loại: &nbsp;<span> <?php echo $this->getCategory($record->category_id); ?> </span></strong><br>
        <p id="chitietsp">Áo vest nam đen Adam Store may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam đen Adam Store có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi. Lưu ý: - Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu. - Adam Store có dịch vụ may đo riêng theo yêu cầu.</p><br>
        <div class="muahang">
          <div class="size">
            <div class="size1">
              SIZE:
            </div>
            <section class="size2">
              <button type="submit">49</button>
              <button type="submit">50</button>
              <button type="submit">51</button>
              <button type="submit">52</button>
              <button type="submit">53</button>
              <button type="submit">54</button>
              <button type="submit">55</button>
            </section>
          </div>
        </div>
        <div class="muangay">
          <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-primary">Cho vào giỏ hàng</a>
        </div>
      </div>
    </div>
    <div class="bosuutap">
      <h3>SẢN PHẨM ĐÃ XEM</h3>
    </div>
    <!-- ds1 -->
      <div class="list1">                
      <div class="owl-carousel owl-theme">
         <?php foreach($data as $rows): ?>
          <div class="item">
            <div style="position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: red; color:white; text-align: center;left:210px;"><?php echo $rows->discount; ?>%</div>
            <div class="item1">
              <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
            </div>
            <div class="item2" style="text-align: center;">
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
      <!-- /ds1 -->
   
