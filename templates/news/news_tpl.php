<div class="title-main"><span><?=(@$title_cat!='')?$title_cat:@$title_crumb?></span></div>
<div class="content-main w-clear">
    <?php if(count($news)>0) { for($i=0;$i<count($news);$i++) { ?>
        <a class="news text-decoration-none w-clear" href="<?=$news[$i][$sluglang]?>" title="<?=$news[$i]['ten'.$lang]?>">
            <p class="pic-news scale-img"><img onerror="this.src='<?=THUMBS?>/160x120x2/assets/images/noimage.png';" src="<?=UPLOAD_NEWS_L.$news[$i]['photo']?>" alt="<?=$news[$i]['ten'.$lang]?>"></p>
            <div class="info-news">
                <h3 class="name-news"><?=$news[$i]['ten'.$lang]?></h3>
                <p class="time-news"><?=ngaydang?>: <?=date("d/m/Y h:i A",$news[$i]['ngaytao'])?></p>
                <div class="desc-news text-split"><?=$news[$i]['mota'.$lang]?></div>
            </div>
        </a>
    <?php } } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>