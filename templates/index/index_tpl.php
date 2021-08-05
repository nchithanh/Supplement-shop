<?php if(count($slider_danhmuc)) { ?>
	<div class="sec1">
		<div class="wrap-brand">
			<div class="wrap-content d-flex align-items-center justify-content-between">
				<div class="owl-carousel owl-theme owl-sil-danhmuc">
					<?php foreach($slider_danhmuc as $v) { ?>
						<div>
							<a class="brand text-decoration-none" href="<?=$v["link"]?>" title="<?=$v['ten'.$lang]?>">
								<img style="width:167px;" onerror="this.src='<?=THUMBS?>/167x167x2/assets/images/noimage.png';" src="<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/>
								<p><?=$v['ten'.$lang]?></p>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<?php
	$index_banner = 0;
 	if(count($splistnb)) { foreach($splistnb as $vlist) { 
		$index_banner++;
	?>
	<div class="sec3">
		<div class="wrap-product wrap-content">
			<div class="title-main">
				<div class="d-flex align-items-center justify-content-between">
					<div class="left">
						<span><?=$vlist['ten'.$lang]?></span>
					</div>
					<div class="right">
						<?php
						$spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc limit 0,5",array($vlist['id']));
						foreach ($spcatmenu as $key => $value) {
							?>
							<a href="<?=$value[$sluglang]?>">
								<span><?=$value['ten'.$lang]?></span>
							</a>
							<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="paging-product-category paging-product-category-<?=$vlist['id']?>" data-list="<?=$vlist['id']?>" data-lang="<?=$_SESSION["lang"]?>"></div>
		</div>
	</div>
	<div class="wrap-content" style="margin-bottom: 20px;">
		<a href=""><img class="lazy-img" style="width:100%;" onerror="this.src='<?=THUMBS?>/730x120x2/assets/images/noimage.png';" data-src="<?=UPLOAD_PHOTO_L.$banner['photo']?>" src="assets/images/Spinner-1s-200px (1).gif"/></a>
	</div>
<?php } } ?>


<?php if(count($brand)) { ?>
	<div class="sec3">
		<div class="wrap-brand">
			<div class="wrap-content">
			<div class="title-main">
				<div class="d-flex align-items-center justify-content-between">
					<div class="left">
						<span>Thương hiệu</span>
					</div>
				</div>
			</div>
				<div class="owl-carousel owl-theme owl-brand">
					<?php foreach($brand as $v) { ?>
						<div>
							<a class="brand text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
								<img style="width:167px;" onerror="this.src='<?=THUMBS?>/167x167x2/assets/images/noimage.png';" src="<?=THUMBS?>/167x167x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/>
								<!-- <img style="height:100px;" onerror="this.src='<?=THUMBS?>/150x150x2/assets/images/noimage.png';" src="<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/> -->
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>



<?php /* if(count($pronb)) { ?>
	<div class="sec2">
		<div class="wrap-product wrap-content">
			<div class="title-main"><span>Sản phẩm nổi bật</span></div>
			<div class="paging-product"></div>
		</div>
	</div>
<?php } */ ?>


<?php if(count($newsnb) || count($videonb)) { ?>
	<div class="sec4">
	<div class="wrap-intro wrap-content d-flex align-items-start justify-content-between">
		<div class="left-intro">
			<p class="title-intro"><span>Tin tức mới</span></p>
			<div class="newshome-intro w-clear">
				<a class="newshome-best text-decoration-none" href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['ten'.$lang]?>">
					<p class="pic-newshome-best scale-img"><img onerror="this.src='<?=THUMBS?>/360x200x2/assets/images/noimage.png';" src="<?=WATERMARK?>/news/360x200x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['ten'.$lang]?>"></p>
					<h3 class="name-newshome text-split"><?=$newsnb[0]['ten'.$lang]?></h3>
					<p class="time-newshome">Ngày đăng: <?=date("d/m/Y",$newsnb[0]['ngaytao'])?></p>
					<p class="desc-newshome text-split"><?=$newsnb[0]['mota'.$lang]?></p>
					<span class="view-newshome transition"><?=xemthem?></span>
				</a>
				<div class="newshome-scroll">
					<ul>
						<?php foreach($newsnb as $v) { ?>
							<li>
								<a class="newshome-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
									<p class="pic-newshome-normal scale-img"><img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"></p>
									<div class="info-newshome-normal">
										<h3 class="name-newshome text-split"><?=$v['ten'.$lang]?></h3>
										<p class="time-newshome"><?=ngaydang?>: <?=date("d/m/Y",$v['ngaytao'])?></p>
										<p class="desc-newshome text-split"><?=$v['mota'.$lang]?></p>
									</div>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="right-intro">
			<p class="title-intro"><span>Video clip</span></p>
			<div class="videohome-intro">
				<?=$addons->setAddons('video-fotorama', 'video-fotorama', 10);?>
	            <?php /* $addons->setAddons('video-select', 'video-select', 10); */ ?>
			</div>
		</div>
	</div>
	</div>
<?php } ?>



<?php
/*
if(count($partner)) { ?>
	<div class="sec5">
	<div class="wrap-partner">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="control-carousel prev-carousel prev-partner transition"><i class="fas fa-chevron-left"></i></p>
			<div class="owl-carousel owl-theme owl-partner">
				<?php foreach($partner as $v) { ?>
					<div>
						<a class="partner text-decoration-none" href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>">
							<img onerror="this.src='<?=THUMBS?>/175x95x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/>
						</a>
					</div>
				<?php } ?>
			</div>
			<p class="control-carousel next-carousel next-partner transition"><i class="fas fa-chevron-right"></i></p>
		</div>
	</div>
	</div>
<?php }

*/?>