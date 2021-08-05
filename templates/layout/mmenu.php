<?php
/**<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword2');"/>
                <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
            
        </ul>
    </nav>
</div> */
?>
<div class="menu-res menu_mobi_add">
   <span class="close_menu">X</span>
   <ul>
      <li>
         <a class="transition active" href="trang-chu" title="<?=trangchu?>">
         <img onerror="this.src='<?=THUMBS?>/120x100x2/assets/images/noimage.png';" src="<?=THUMBS?>/110x62x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/>
         </a>
      </li>
      <li class="line"></li>
      <li>
         <a class="transition" href="gioi-thieu" title="<?=gioithieu?>">
            <h2><?=gioithieu?></h2>
         </a>
      </li>
      <li class="line"></li>
      <li>
         <a class="transition " href="san-pham" title="<?=sanpham?>">
            <h2><?=sanpham?></h2>
            <i class="fas fa-chevron-right"></i>
         </a>
         <ul>
            <?php
            foreach ($splistmenu as $key => $value) {
               ?>
               <li>
                  <span></span>
                  <a href="<?=$value[$sluglang]?>">
                     <h2><?=$value["ten".$lang]?></h2>
                  </a>
                  <ul>
                     <?php
                     foreach ($splistmenu as $key => $value) {
                        $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($value['id']));
                        foreach ($spcatmenu as $key1 => $value1) {
                           ?>
                              <li>
                                 <span></span>
                                 <a href="<?=$value1[$sluglang]?>">
                                    <h2><?=$value1["ten".$lang]?></h2>
                                 </a>
                              </li>
                           <?php
                        }
                     }
                     ?>
                  </ul>
               </li>
               <?php
            }
            ?>
         </ul>
      </li>
      <li class="line"></li>
      <li>
         <a class="transition " href="tin-tuc" title="Tin tức">
            <h2>Tin tức</h2>
         </a>
      </li>
      <li class="line"></li>
      <li>
         <a class="transition " href="tuyen-dung" title="<?=tuyendung?>">
            <h2><?=tuyendung?></h2>
         </a>
      </li>
      <li class="line"></li>
      <li>
         <a class="transition " href="thu-vien-anh" title="<?=thuvienanh?>">
            <h2><?=thuvienanh?></h2>
         </a>
      </li>
      <li class="line"></li>
      <li>
         <a class="transition " href="video" title="<?=video?>">
            <h2><?=video?></h2>
         </a>
      </li>
      <li class="line"></li>
      <li>
         <a class="transition " href="lien-he" title="Liên hệ">
            <h2>Liên hệ</h2>
         </a>
      </li>
   </ul>
</div>
<div class="menu_mobi w-clear">
   <!-- <marquee width="100%" behavior="alternate" style="color:black;font-size:14px;">  
      Đây là một ví dụ về scroll marquee 
   </marquee> -->
   <p class="menu_baophu" style="display: none;"></p>
   <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
   <a class="logo-mobi" href=""><img onerror="this.src='thumbs/120x100x2/assets/images/noimage.png';" class="lazy" data-src="thumbs/120x100x2/upload/photo/logo-2486.png" alt="Sneaker Shoes vi"></a>
   <a href="" title="<?=trangchu?>" style="background: none;">
           <img onerror="this.src='<?=THUMBS?>/51x45x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x45x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="">
       </a>
   <a class="search-res" href="gio-hang">
      <p class="icon-search transition"><i class="fab fa-opencart"></i>
         <span class="count-cart"><?=(isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0?></span>
      </p>
   </a>
   <div class="search-res search-res-m">
      <div class="search-res-m-c">
         <input type="text" name="keyword2" id="keyword2" placeholder="Nhập từ khóa cần tìm..." onkeypress="doEnter(event,'keyword2');">
         <p onclick="onSearch('keyword2');"><?=timkiem?></p>
      </div>
   </div>
</div>

<div class="toolbar">
    <ul>
        <li>
            <a id="goidien" href="tel:0989890954" title="title">
                <img src="assets/images/icon-t1.png" alt="Sneaker Shoes vi"><br>
                <span class="count-cart">Gọi điện</span>
            </a>
        </li> 
        <li>
            <a id="nhantin" href="sms:0989890954" title="title">
                <img src="assets/images/icon-t2.png" alt="images"><br>
                <span>Nhắn tin</span>
            </a>
        </li>
        <li>
            <a id="chatzalo" target="_blank" href="https://zalo.me/0989890954" title="title">
                <img src="assets/images/zl.png" alt="images"><br>
                <span>Chat zalo</span>
            </a>
        </li>
    </ul>
</div>