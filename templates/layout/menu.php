<div class="menu">
   <ul class="d-flex align-items-center justify-content-between wrap-content">
        <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><h2><?=trangchu?></h2></a></li>
        <li class="line"></li>
        <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><h2><?=gioithieu?></h2></a></li>
        <li class="line"></li>
        <li>
            <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="<?=sanpham?>"><h2><?=sanpham?></h2></a>
            <?php if(count($splistmenu)) { ?>
                <ul>
                    <?php for($i=0;$i<count($splistmenu); $i++) {
                        $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($splistmenu[$i]['id'])); ?>
                        <li>
                            <a class="transition" title="<?=$splistmenu[$i]['ten'.$lang]?>" href="<?=$splistmenu[$i][$sluglang]?>"><h2><?=$splistmenu[$i]['ten'.$lang]?></h2></a>
                            <?php if(count($spcatmenu)>0) { ?>
                                <ul>
                                    <?php for($j=0;$j<count($spcatmenu);$j++) {
                                        $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id'])); ?>
                                        <li>
                                            <a class="transition" title="<?=$spcatmenu[$j]['ten'.$lang]?>" href="<?=$spcatmenu[$j][$sluglang]?>"><h2><?=$spcatmenu[$j]['ten'.$lang]?></h2></a>
                                            <?php if(count($spitemmenu)) { ?>
                                                <ul>
                                                    <?php for($u=0;$u<count($spitemmenu);$u++) {
                                                        $spsubmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_sub where id_item = ? and hienthi > 0 order by stt,id desc",array($spitemmenu[$u]['id'])); ?>
                                                        <li>
                                                            <a class="transition" title="<?=$spitemmenu[$u]['ten'.$lang]?>" href="<?=$spitemmenu[$u][$sluglang]?>"><h2><?=$spitemmenu[$u]['ten'.$lang]?></h2></a>
                                                            <?php if(count($spsubmenu)) { ?>
                                                                <ul>
                                                                    <?php for($s=0;$s<count($spsubmenu);$s++) { ?>
                                                                        <li>
                                                                            <a class="transition" title="<?=$spsubmenu[$s]['ten'.$lang]?>" href="<?=$spsubmenu[$s][$sluglang]?>"><h2><?=$spsubmenu[$s]['ten'.$lang]?></h2></a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <li class="line"></li>
        <li>
            <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><h2><?=tintuc?></h2></a>
            <?php if(count($ttlistmenu)) { ?>
                <ul>
                    <?php for($i=0;$i<count($ttlistmenu); $i++) {
                        $ttcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_news_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($ttlistmenu[$i]['id'])); ?>
                        <li>
                            <a class="transition" title="<?=$ttlistmenu[$i]['ten'.$lang]?>" href="<?=$ttlistmenu[$i][$sluglang]?>"><h2><?=$ttlistmenu[$i]['ten'.$lang]?></h2></a>
                            <?php if(count($ttcatmenu)>0) { ?>
                                <ul>
                                    <?php for($j=0;$j<count($ttcatmenu);$j++) {
                                        $ttitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_news_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($ttcatmenu[$j]['id'])); ?>
                                        <li>
                                            <a class="transition" title="<?=$ttcatmenu[$j]['ten'.$lang]?>" href="<?=$ttcatmenu[$j][$sluglang]?>"><h2><?=$ttcatmenu[$j]['ten'.$lang]?></h2></a>
                                            <?php if(count($ttitemmenu)) { ?>
                                                <ul>
                                                    <?php for($u=0;$u<count($ttitemmenu);$u++) {
                                                        $ttsubmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_news_sub where id_item = ? and hienthi > 0 order by stt,id desc",array($ttitemmenu[$u]['id'])); ?>
                                                        <li>
                                                            <a class="transition" title="<?=$ttitemmenu[$u]['ten'.$lang]?>" href="<?=$ttitemmenu[$u][$sluglang]?>"><h2><?=$ttitemmenu[$u]['ten'.$lang]?></h2></a>
                                                            <?php if(count($ttsubmenu)) { ?>
                                                                <ul>
                                                                    <?php for($s=0;$s<count($ttsubmenu);$s++) { ?>
                                                                        <li>
                                                                            <a class="transition" title="<?=$ttsubmenu[$s]['ten'.$lang]?>" href="<?=$ttsubmenu[$s][$sluglang]?>"><h2><?=$ttsubmenu[$s]['ten'.$lang]?></h2></a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <li class="line"></li>
        <li><a class="transition <?php if($com=='tuyen-dung') echo 'active'; ?>" href="tuyen-dung" title="<?=tuyendung?>"><h2><?=tuyendung?></h2></a></li>
        <li class="line"></li>
        <li><a class="transition <?php if($com=='thu-vien-anh') echo 'active'; ?>" href="thu-vien-anh" title="<?=thuvienanh?>"><h2><?=thuvienanh?></h2></a></li>
        <li class="line"></li>
        <li><a class="transition <?php if($com=='video') echo 'active'; ?>" href="video" title="Video"><h2>Video</h2></a></li>
        <li class="line"></li>
        <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><h2><?=lienhe?></h2></a></li>
        <li>
            <!-- <div class="search w-clear">
                <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
            </div> -->
        </li>
    </ul>
</div>