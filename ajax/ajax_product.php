<?php 

	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
	$lang = htmlspecialchars($_GET['lang']);
	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";

	/* Math url */
	if($idList)
	{
		$tempLink .= "&idList=".$idList;
		$where .= " and id_list = ".$idList;
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	// lang
	if($lang=="en"){
		define("themgiohang","Add cart");
		define("muangay","Buy now");
	}else{
		define("themgiohang","Thêm");
		define("muangay","Mua ngay");
	}

	/* Get data */
	$sql = "select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo, gia, giamoi, giakm, type from #_product where type='san-pham' $where and noibat > 0 and hienthi > 0 order by id asc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->getCache($sqlCache,'result',7200);

	/* Count all data */
	$countItems = count($cache->getCache($sql,'result',7200));

	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if($countItems) { ?>
	<div class="grid-page w-clear">
		<?php for($i=0;$i<count($items);$i++) { ?>
			<div class="product">
				<a class="box-product text-decoration-none" href="<?=$items[$i][$sluglang]?>" title="<?=$items[$i]['ten'.$lang]?>">
					<p class="pic-product scale-img"><img onerror="this.src='<?=THUMBS?>/270x270x2/assets/images/noimage.png';" data-src="<?=WATERMARK?>/product/270x270x1/<?=UPLOAD_PRODUCT_L.$items[$i]['photo']?>" src="assets/images/Spinner-1s-200px (1).gif" alt="<?=$items[$i]['ten'.$lang]?>"/></p>
					<h3 class="name-product text-split"><?=$items[$i]['ten'.$lang]?></h3>
					<p class="price-product">
						<?php if($items[$i]['giakm']) { ?>
							<span class="price-new"><?=$func->format_money($items[$i]['giamoi'])?></span>
							<span class="price-old"><?=$func->format_money($items[$i]['gia'])?></span>
							<span class="price-per"><?='-'.$items[$i]['giakm'].'%'?></span>
						<?php } else { ?>
							<span class="price-new"><?=($items[$i]['gia']) ? $func->format_money($items[$i]['gia']) : lienhe?></span>
						<?php } ?>
					</p>
				</a>
				<p class="cart-product w-clear">
					<span class="cart-add addcart transition" data-id="<?=$items[$i]['id']?>" data-action="addnow"><?=themgiohang?></span>
					<span class="cart-buy addcart transition" data-id="<?=$items[$i]['id']?>" data-action="buynow"><?=muangay?></span>
				</p>
			</div>
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?=$pagingItems?></div>
<?php } ?>

<script>
	// IntersectionObserver

if(!!window.IntersectionObserver){
    let observer = new IntersectionObserver((entries, observer) => { 
        // entries : Danh sách các đối tượng chúng ta theo dỏi
        entries.forEach(entry => {
        // Kiểm tra ảnh của chúng ta có trong vùng nhìn thấy không
        if(entry.isIntersecting){
            console.log(entry.target)
                //  Lấy dử liệu từ data-src mà chúng ta đã gán trước đó sau đó gàn vào thuộc
                // tính src của ảnh , lúc này thì ảnh mới bắt đầu tải về  
            entry.target.src = entry.target.dataset.src;
            observer.unobserve(entry.target);
        }
        });
    }, {rootMargin: "0px 0px -200px 0px"});
    document.querySelectorAll('.product .pic-product img').forEach(img => { observer.observe(img) });
}
else document.querySelector('#warning').style.display = 'block';
</script>