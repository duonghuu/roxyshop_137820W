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
    $str.='<ul class="sub-menu megaMenu">';
    for($j=0;$j<count($danhmuc_cap2);$j++){
      if($link_id){
        $link2 = 'san-pham/'.$danhmuc_cap2[$j]["tenkhongdau"].'-'.$danhmuc_cap2[$j]["id"].'/';
      }else{
        $link2 = $danhmuc_cap2[$j]["tenkhongdau"];  
      }
      $img = _upload_sanpham_l.$danhmuc_cap2[$j]["photo"];
      $str.='<div class="megaMenuItem"><a href="'.$link2.'">
          <figure><img src="'.$img.'" alt="'.$danhmuc_cap2[$j]["ten"].'"></figure>
          <h2>'.$danhmuc_cap2[$j]["ten"].'</h2>
        </a></div>';
    }
    $str.='</ul>';
  }
  $str.='</li>';
}
echo $str;
 ?>
<?php /*<li class="<?php if($source=='index') echo 'active'; ?>"><a href=""> <i class="fas fa-home"></i> 
<?php echo _trangchu ?></a></li>*/?>
<?php /* <li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
  <?= _gioithieu ?></a></li> 
<li class="<?php if($com=='san-pham') echo 'active'; ?>"><a href="san-pham.html"><?= _sanpham ?></a>
  <?= for2cap('product_danhmuc','product_list','san-pham','san-pham','','/')?>
</li>
*/?>
<?php /* 
<li class="<?php if($source == 'contact') echo 'active'; ?>"><a href="lien-he.html"><?= _lienhe ?>
  </a></li>
<?= for1('news_danhmuc','nang-luc','nang-luc','')?>  */?>