<div id="valak_mmenu">
  <div class="logomini-box">
    <a href="" class="valak-home"><i class="fas fa-home"></i></a>
    <div class="logomini_valak">
      <a href="">
        <strong>MENU</strong> 
        <?php /* <img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"> */?>
      </a>
   </div>
    <a id="humber_valak" href="javascript:;"><i class="fas fa-bars"></i></a>
  </div>
<?php /*
  */?>
  <?php /* <div class="logomini-box-right">
       <a class="valak-phone" href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
       <i class="fas fa-phone-alt"></i> <?= $company["dienthoai"] ?></a> 
      </div> */?>
  <?php /* <div id="valak_lang"> <a href="index.php?com=ngonngu&lang=en" title="English">
  <img src="images/en.png" alt="English" /> </a> <a href="index.php?com=ngonngu&lang=" title="Việt Nam">
  <img src="images/vi.png" alt="Việt Nam" /></a> </div><!--END #lang--> */?>
  <?php /* <?php if($deviceType!="computer"){ ?>
          <a href="gio-hang.html" class="giohang_fix"><i></i><span><?= count($_SESSION["cart"]) ?></span></a>
        <?php } ?> */?>
        <?php if($deviceType!="computer"){ ?>
    <div class="valak-search"> <input type="text" id="txtCountry2" class="form-control keyword placeholder-1"
         required="true" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...')
         {this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
         <span onclick="onSearch($(this));return false;" class="btn_search"><i class="fas fa-search"></i></span> </div> 
        <?php } ?>
</div>
<div id="valak_openmmenu">
  <div id="valak_main">
    <div id="close_valak"></div>
    <div class="scroll_menu_valak">
      <div class="logo_valak">MENU<?php /* 
      <img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"> */?></div>
      <div class="linebrk_valak"></div>
      <div class="main_manu_valak">
        <ul >
          <?php //include _template."layout/menu_content.php";?>
          <?php 
          $str='';
          for($i=0;$i<count($danhmuc_cap1);$i++){
            $claa = ($id_danhmuc == $danhmuc_cap1[$i]["id"]) ? 'class="active"' : "";
            if($link_id){
              $link1 = 'san-pham/'.$danhmuc_cap1[$i]["tenkhongdau"].'-'.$danhmuc_cap1[$i]["id"];
            }else{
              $link1 = $danhmuc_cap1[$i]["tenkhongdau"];  
            }

            $str.='<li '.$claa.'><a href="'.$link1.'">'.$danhmuc_cap1[$i]["ten"].'</a>';
            $danhmuc_cap2= get_result("select id,ten$lang as ten,tenkhongdau,type,thumb,photo from #_product_list where hienthi=1 and
             type='san-pham' and id_danhmuc='".$danhmuc_cap1[$i]["id"]."' order by stt,id asc");
            if(count($danhmuc_cap2)>0){
              $str.='<ul class="sub-menu">';
              for($j=0;$j<count($danhmuc_cap2);$j++){
                if($link_id){
                  $link2 = 'san-pham/'.$danhmuc_cap2[$j]["tenkhongdau"].'-'.$danhmuc_cap2[$j]["id"].'/';
                }else{
                  $link2 = $danhmuc_cap2[$j]["tenkhongdau"];  
                }
                $str.='<li><a href="'.$link2.'">'.$danhmuc_cap2[$j]["ten"].'</a></li>';
              }
              $str.='</ul>';
            }
            $str.='</li>';
          }
          echo $str;
           ?>
        </ul>
      </div>
      <div class="linebrk_valak"></div>
      <div class="valak_mmenuf">
        <h2><?=$company['ten']?></h2>
        <p><?=_diachi?>: <?=$company['diachi']?></p>
        <p>Email: <?=$company['email']?></p>
        <p><?=_dienthoai?>: <?=$company['dienthoai']?></p>
        <?php /* <p>Fax: <?=$company['fax']?></p> */?>
        <p>Website: <?=$company['website']?></p>
      </div>
    </div>
  </div>
  <div class="mask_menu"></div>
</div>
<?php /* <script>
  $(document).ready(function() {
    $('.main_manu_valak ul li').each(function(index, el) {
      if($(this).children("ul").length) {
        $(this).prepend('<div class="btn_expand_menu_valak"></div>');
      }
    });
  });
  $(document).on('click', '#humber_valak', function(event) {
    event.preventDefault();
    $("#valak_openmmenu").addClass('expand_menu');
  });
  $(document).on('click', '#close_valak', function(event) {
    event.preventDefault();
    $("#valak_openmmenu").removeClass('expand_menu');
  });
  $(document).on('click', '.btn_expand_menu_valak', function(event) {
    event.preventDefault();
    if($(this).hasClass('more')) {
      $(this).removeClass('more');
    }
    else {
      $(this).addClass('more');
    }
    $(this).parent('li').children('ul').toggle();
  });
  $(window).scroll(function() {
    if($(window).scrollTop() >= $(".hd-bg").height()) 
      // if($(window).scrollTop() >= 50) 
    {
      // $("div.menu").css({position:"fixed",left:'0px',right:'0px',top:'0px',zIndex:'999',
      //height:"45px",background:"#86186F"});
      $("#valak_mmenu").css({position:"fixed",left:'0px',right:'0px',top:'0px',zIndex:'999'});
      // $(".logo").css({top:"8px",width:"130px"});
    }
    else
    {
      // $("div.menu").css({position:"static",height:"95px",background:"#fff"});
      $("#valak_mmenu").css({position:"relative"});
      // $(".logo").css({top:"18px",width:"auto"});
    }
  });
</script> */?>