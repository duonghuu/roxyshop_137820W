<li class="<?php if($source=='index') echo 'active'; ?>"><a href=""><?php /* <i class="fas fa-home"></i> */?>
<?php echo _trangchu ?></a></li>
<?php /* <li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
  <?= _gioithieu ?></a></li> */?>
<li class="<?php if($com=='hang-moi') echo 'active'; ?>"><a href="hang-moi.html">Hàng mới về</a></li>
<li class="<?php if($com=='san-pham') echo 'active'; ?>"><a href="san-pham.html"><?= _sanpham ?></a>
  <?= for2cap('product_danhmuc','product_list','san-pham','san-pham','','/')?>
</li>
<li class="<?php if($com=='huong-dan') echo 'active'; ?>"><a href="huong-dan.html">Hướng dẫn
  </a></li>
<li class="<?php if($com=='gia-si') echo 'active'; ?>"><a href="gia-si.html">Giá sỉ
  </a></li>
<li class="<?php if($source == 'contact') echo 'active'; ?>"><a href="lien-he.html"><?= _lienhe ?>
  </a></li>
<?php /* 
<?= for1('news_danhmuc','nang-luc','nang-luc','')?>  */?>