<div class="page-title page-title-default title-size-small title-design-centered color-scheme-light" style="">
  <div class="container">
    <div class="text-center entry-header">
      <h1 class="entry-title"><?= $company["ten"] ?></h1> 
    </div>
    </div>
  </div>
<div class="container">
  <div class="first-article">
    <?= $firstarticle["noidung"] ?>
  </div>

  <div class="product-danhmuc">
    <?php foreach ($product_danhmuc as $key => $value) { 
      $link = "san-pham/".$value["tenkhongdau"]."-".$value["id"];
      ?>
      <h2><a href="<?= $link ?>"><?= $value["ten"] ?></a></h2>
    <?php } ?>
  </div>
  <div class="diachi-cuahang">
    <figure><img src="images/diachi.png" alt="diachi"></figure><strong><?= _diachi ?>:</strong><?= $company["diachi"] ?>
  </div>
  <div class="diachi-cuahang">
    <figure><img src="images/giomo.png" alt="giomo"></figure><strong>Giờ làm việc:</strong><?= $thuoctinh["giomo"] ?>
  </div>

  <div class="vechungtoi-bg">

    <div class="idx-tit text-center text-uppercase"><h4><span>Về chúng tôi</span></h4></div>
    <div class="vechungtoi-grid">
      <?php foreach ($thuvien as $key => $value) {
        $img_large = _upload_hinhthem_l.$value["photo"];
        $img = _upload_hinhthem_l.$value["thumb"]; 
        ?>
        <div class="vechungtoi-item"><a data-fancybox="gallery27" href="<?= $img_large ?>">
            <figure class="zoom_hinh"><img src="<?= $img ?>" alt="Về chúng tôi"></figure>
          </a></div>
      <?php } ?>
    </div>
  </div>

  <div class="vechungtoi-bg">
    <div class="idx-tit text-center text-uppercase"><h4><span>Sản phẩm - quần áo giá sỉ</span></h4></div>
    <div class="product-grid">
      <?php foreach ($spnoibat as $key => $value) {
        showProduct($value);
      } ?>
    </div>
  </div>
</div>
<div class="thongtin-chinhsach-bg">
  <div class="container">
    <div class="idx-tit text-center text-uppercase"><h4><span>Thông tin &amp; Chính sách</span></h4></div>
    <div class="content">
      <?= $thongtinchinhsach["noidung"] ?>
    </div>
    
    <div class="link-chinhsach-flex">
      <div class="link-chinhsach bg-xanh"><img src="images/chinhsach-right.png" alt="link"><a href="chinh-sach-bo-si.html">
        Xem chính sách bỏ sỉ quần áo
      </a></div>
      <div class="link-chinhsach bg-do"><img src="images/chinhsach-right.png" alt="link"><a href="so-sanh-cac-cho-si.html">
        So sánh với các chợ sỉ
      </a></div>
    </div>
    <div class="btn-dangkymuasi">

      <a rel="nofollow" href="">
        <h6>ĐĂNG KÝ MUA SỈ</h6>
        <p>tư vấn mua sỉ - không thích không mua</p>
      </a>
    </div>

    <ul class="link-zalo">
      <?php foreach ($zalo as $key => $value) { ?>
      <li>
        <figure><img src="images/linkzalo.jpg" alt="zalo"></figure>
        <span>KH ZALO: <a href="//zalo.me/<?=preg_replace('/[^0-9]/','',$value['link']);?>"><?= $value['link'] ?></a></span>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
<div class="quangcao-bg">
  <div class="container">
    <div class="quangcao-main">
      <?php foreach ($quangcao as $key => $value) { 
        $img = _upload_hinhanh_l.$value["thumb"]; 
        ?>
        <div class="quangcao-item"><a href="<?= $value["link"] ?>"><img src="<?= $img ?>"
         alt="<?= $value["ten"] ?>"></a></div>
      <?php } ?>
    </div>
  </div>
</div>