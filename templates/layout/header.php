<header class="hd-bg">
  <div class="hd-top">
    <div class="container">
      <div class="hd-top-flex">
        <div class="hd-top-left">
          <?php foreach ($hotline as $key => $value) { ?>
            <p><i class="fas fa-phone-alt"></i><a href="tel:<?=preg_replace('/[^0-9]/','',$value['link']);?>">
              <?= $value['link'] ?></a></p>
          <?php } ?>
        </div>
        <marquee behavior="" direction=""><i class="fas fa-map-marker-alt"></i><?= $company["diachi"] ?></marquee>
      </div>
    </div>
  </div>
  <div class="hd-bot">
    <div class="container">
      <div class="hd-bot-flex">
        <a href="" class="logo" ><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
        <div class="hd-mid">
          <div id="search">
            <div class="my-search">
              <input type="text" class="form-control keyword" required="true" 
              onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." 
              onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
              onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
              <span onclick="onSearch($(this));return false;" class="btn_search text-uppercase">
              <?= _timkiem ?></span>
            </div>
          </div>
          <?php include _template."layout/menu_top.php"; ?>
        </div>
        <span class="text-uppercase" id="humber_valak">Menu<i class="fas fa-bars"></i></span>
      </div>
    </div>
  </div>
</header>