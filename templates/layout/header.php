<div class="header">
	<div class="header-top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="info-header"><marquee><?=$slogan['ten'.$lang]?></marquee></p>
			<p class="info-header"><i class="fas fa-envelope"></i>Email: <?=$optsetting['email']?></p>
			<p class="info-header"><i class="fas fa-phone-square-alt"></i>Hotline: <?=$optsetting['hotline']?></p>
			<ul class="social social-header">
				<?php for($i=0;$i<count($social1);$i++) { ?>
					<li><a href="<?=$social1[$i]['link']?>" target="_blank"><img src="<?=UPLOAD_PHOTO_L.$social1[$i]['photo']?>" alt="<?=$social1[$i]['ten'.$lang]?>"></a></li>
				<?php } ?>
			</ul>
			<div class="lang-header">
	            <a href="ngon-ngu/vi/"><img src="assets/images/vi.jpg" alt="Tiếng Việt"></a>
	            <a href="ngon-ngu/en/"><img src="assets/images/en.jpg" alt="Tiếng Anh"></a>
	        </div>
	        <?php if(array_key_exists($login_member, $_SESSION) && $_SESSION[$login_member]['active'] == true) { ?>
	        	<div class="user-header">
		        	<a href="account/thong-tin">
		        		<span>Hi, <?=$_SESSION[$login_member]['username']?></span>
		        	</a>
		        	<a href="account/dang-xuat">
		        		<i class="fas fa-sign-out-alt"></i>
		        		<span><?=dangxuat?></span>
		        	</a>
		        </div>
	        <?php } else { ?>
	        	<div class="user-header">
		        	<a href="account/dang-nhap">
		        		<i class="fas fa-sign-in-alt"></i>
		        		<span><?=dangnhap?></span>
		        	</a>
		        	<a href="account/dang-ky">
		        		<i class="fas fa-user-plus"></i>
		        		<span><?=dangky?></span>
		        	</a>
		        </div>
	        <?php } ?>
		</div>
	</div>
	<div class="header-bottom">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<a class="logo-header" href=""><img onerror="this.src='<?=THUMBS?>/120x100x2/assets/images/noimage.png';" src="<?=THUMBS?>/110x62x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a>
			<div class="search w-clear">
                <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
                <p onclick="onSearch('keyword');"><?=timkiem?></p>
            </div>
			<!-- <a class="banner-header" href=""><img onerror="this.src='<?=THUMBS?>/730x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/730x120x2/<?=UPLOAD_PHOTO_L.$banner['photo']?>"/></a> -->
			<?php
				 /*
				 <a class="hotline-header">
				<p>Hotline hỗ trợ:</p>
				<span><?=$optsetting['hotline']?></span>
			</a>
				 */
			?>
			<a class="cart-header" href="gio-hang">
				<div> 
					<i class="fab fa-opencart"></i><?=giohang?> 
					<span class="count-cart"><?=(isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0?></span>
				</div>
			</a>
		</div>
	</div>
</div>