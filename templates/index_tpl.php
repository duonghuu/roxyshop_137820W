<div class="spmoi-bg">
  <div class="container">
    <div class="idx-tit">
      <h4><a href="san-pham-moi.html">New Arrival</a></h4>
      <a href="san-pham-moi.html"><img src="images/arrow-right.png" alt="arrow"></a>
    </div>
    <div class="spnoibat-main">
      <?php foreach($spmoi as $key=>$value){
        showProduct($value, ["slick"=>1]);
      } ?>
    </div>
  </div>
</div>

<?php foreach ($product_danhmuc as $kdm => $vdm) { 
$clseven = (($kdm+1) % 2 == 0) ? 'even' : 'odd';
$link1 = "san-pham/".$vdm["tenkhongdau"]."-".$vdm["id"];
$img1 = _upload_sanpham_l.$vdm["photo"];
$spnoibat=get_result("select ten$lang as ten,tenkhongdau,id,type,gia,giakm,thumb,photo,size2 from
 #_product where type='san-pham' and id_danhmuc = '".$vdm["id"]."' and noibat>0 and hienthi>0 order by stt asc limit 0,3");
  ?>

  <div class="spnoibat-bg <?= $clseven ?>">
    <?php if($deviceType=="computer"){ ?>
    <div class="danhmuc-feature-img zoom_hinh">
      <a href="<?= $link1 ?>">
        <img src="<?= $img1 ?>" alt="<?= $vdm["ten"] ?>">
        <span class="feature-content">
          <p class="text-uppercase">Bộ sưu tập</p>
          <h2 class="text-capitalize"><?= $vdm["ten"] ?></h2>
        </span>
      </a>
    </div>
  <?php } ?>
    <div class="danhmuc-sanpham">
      <div class="danhmuc-sanpham-box">
        <div class="idx-tit">
          <h4><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a></h4>
          <a href="<?= $link1 ?>"><img src="images/arrow-right.png" alt="arrow"></a>
        </div>
        <div class="product-grid">
          <?php foreach ($spnoibat as $key => $value) {
            showProduct($value);
          } ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<div class="spmoi-bg">
  <div class="container">
    <div class="idx-tit">
      <h4><a href="san-pham-hot.html">Sản phẩm hot</a></h4>
      <a href="san-pham-hot.html"><img src="images/arrow-right.png" alt="arrow"></a>
    </div>
    <div class="spnoibat-main">
      <?php foreach($sptieubieu as $key=>$value){
        showProduct($value, ["slick"=>1]);
      } ?>
    </div>
  </div>
</div>

<div class="web-slider-main">
  <?php foreach($quangcao as $key=>$value){ 
    $img = _upload_hinhanh_l.$value["photo"];
    ?>
    <div class="qc-item"><a href="<?= $value["link"] ?>"><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></a></div>
  <?php } ?>
</div>
<div class="tinnb-bg">
  <div class="container">
    <div class="idx-tit">
      <h4><a href="tin-tuc.html">Blog thời trang</a></h4>
    </div>
   
    <div class="tinnb-main">
      <?php foreach ($tinnb as $key => $value) { 
        $img = _upload_tintuc_l.$value["photo"];
        ?>
        <div class="tinnb-item"><a href="<?= get_url($value, "tin-tuc") ?>">
            <figure><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
            <h5><?= $value["ten"] ?></h5>
            <hr>
            <p><?= catchuoi($value["mota"],150) ?><span class="dot">Xem thêm</span></p>
          </a></div>
      <?php } ?>
    </div>
  </div>
</div>

<div class="themanh-bg">
  <div class="container">
    <div class="themanh-main">
      <?php foreach ($themanh as $key => $value) { 
        $img = _upload_tintuc_l.$value["photo"];
        ?>
        <div class="themanh-item">
          <article>
            <figure><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
            <div class="info">
              <h6><?= $value["ten"] ?></h6>
              <span><?= $value["mota"] ?></span>
            </div>
          </article>
        </div>
      <?php } ?>
    </div>
  </div>
</div>