<?php  
	if(!defined('SOURCES')) die("Error");

	$popup = $d->rawQueryOne("select ten$lang, photo, link, hienthi from #_photo where type = ? and act = ? limit 0,1",array('popup','photo_static'));
    $slider = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide'));
    $slider_danhmuc = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide-product'));
    $brand = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo, noibat > 0 from #_product_brand where type = ? and hienthi > 0 order by stt,id desc",array('san-pham'));
    $pronb = $d->rawQuery("select id from #_product where type = ? and noibat > 0 and hienthi > 0",array('san-pham'));
    $splistnb = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_list where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));
    $newsnb = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('tin-tuc'));
    $videonb = $d->rawQuery("select id from #_photo where noibat > 0 and type = ? and hienthi > 0",array('video'));
    $partner = $d->rawQuery("select ten$lang, link, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('doitac'));

    /* SEO */
    $seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
    $seo->setSeo('url',$func->getPageURL());
    $img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $logo['photo']))
    {
        $img_json_bar = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$logo['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->setSeo('photo:width',$img_json_bar['w']);
        $seo->setSeo('photo:height',$img_json_bar['h']);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }
?>