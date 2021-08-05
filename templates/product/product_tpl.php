<div class="title-main"><span><?=(@$title_cat!='')?$title_cat:@$title_crumb?></span></div>
<div class="content-main w-clear">
    <?php if(isset($product) && count($product) > 0) { for($i=0;$i<count($product);$i++) { ?>
        <div class="product">
            <a class="box-product text-decoration-none" href="<?=$product[$i][$sluglang]?>" title="<?=$product[$i]['ten'.$lang]?>">
                <div class="pic-product scale-img relative">
                    <img class="lazy-img" onloadeddata="loading_p()" onerror="this.src='<?=THUMBS?>/270x270x2/assets/images/noimage.png';" data-src="<?=WATERMARK?>/product/270x270x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo']?>" alt="<?=$product[$i]['ten'.$lang]?>"/>
                    <div class="load-lazy none">
                        <div class="lds-dual-ring">
                            
                        </div>
                    </div>
                </div>
                <h3 class="name-product text-split"><?=$product[$i]['ten'.$lang]?></h3>
                <p class="price-product">
                    <?php if($product[$i]['giakm']) { ?>
                        <span class="price-new"><?=$func->format_money($product[$i]['giamoi'])?></span>
                        <span class="price-old"><?=$func->format_money($product[$i]['gia'])?></span>
                        <span class="price-per"><?='-'.$product[$i]['giakm'].'%'?></span>
                    <?php } else { ?>
                        <span class="price-new"><?=($product[$i]['gia']) ? $func->format_money($product[$i]['gia']) : lienhe?></span>
                    <?php } ?>
                </p>
            </a>
            <p class="cart-product w-clear">
                <span class="cart-add addcart transition" data-id="<?=$product[$i]['id']?>" data-action="addnow"><?=themgiohang?></span>
                <span class="cart-buy addcart transition" data-id="<?=$product[$i]['id']?>" data-action="buynow"><?=muangay?></span>
            </p>
        </div>
    <?php } } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>