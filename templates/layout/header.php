<header class="hd-bg">
  <div class="hd-top">
    <div class="container">
      <div class="hd-top-flex">
        <div class="hd-top-left">
            <a href="" class="hd-name"><?= $company['ten'] ?></a>
            <p><i class="fas fa-phone-alt"></i><a href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
              <?= $company['dienthoai'] ?></a></p>
        </div>
        <marquee behavior="" direction=""><?= $company["slogan"] ?></marquee>
        <ul>
          <li><a href=""><?= _trangchu ?></a></li>
          <li><a href="gioi-thieu.html"><?= _gioithieu ?></a></li>
          <li><a href="chinh-sach-bo-si.html">Mua sỉ</a></li>
          <li><a href="tin-tuc.html">Blog</a></li>
          <li><a href="lien-he.html"><?= _lienhe ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="hd-bot">
    <div class="container">
      <div class="hd-bot-flex">
        <a href="" class="logo" ><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
        <div class="hd-mid">
          <?php if($deviceType=="computer"){ ?>
          <button class="openBtn timkiem_icon" ><i class="fas fa-search"></i></button>
          <div id="search">
            <div class="my-search">
              <input type="text" class="form-control keyword" required="true" 
              onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." 
              onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
              onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
              <span onclick="onSearch($(this));return false;" class="btn_search text-uppercase">
              <i class="fas fa-search"></i></span>
            </div>
          </div>
        <?php } ?>
          <a href="gio-hang.html" class="giohang_fix"><i class="fas fa-shopping-bag"></i>Giỏ hàng</a>
        </div>
      </div>
    </div>
    <?php include _template."layout/menu_top.php"; ?>
  </div>
</header>