<!DOCTYPE html>
<html lang="<?=$config['website']['lang-doc']?>">
<head>
    <?php include TEMPLATE.LAYOUT."head.php"; ?>
    <?php include TEMPLATE.LAYOUT."css.php"; ?>
    <script>
        window.addEventListener('load', function () {
            var x = document.querySelector(".loading-page");
            x.style.display = "none";
        })
    </script>
</head>
<body>
    <?php
        include TEMPLATE.LAYOUT."seo.php";
        include TEMPLATE.LAYOUT."box_lang.php";
        include TEMPLATE.LAYOUT."loading_page.php";
        ?>
        <div class="wrap-head">
            <?php
                include TEMPLATE.LAYOUT."header.php";
                include TEMPLATE.LAYOUT."menu.php";
            ?>
            <div class="process" id="scroll-bar-top"></div>
        </div>
        <?php
        include TEMPLATE.LAYOUT."mmenu.php";
        if($source=='index') include TEMPLATE.LAYOUT."slide.php";
        else include TEMPLATE.LAYOUT."breadcrumb.php";
    ?>
    <div class="wrap-main <?=($source=='index')?'wrap-home':''?> w-clear"><?php include TEMPLATE.$template."_tpl.php"; ?></div>
    <?php
        include TEMPLATE.LAYOUT."footer.php";
        include TEMPLATE.LAYOUT."modal.php";
        include TEMPLATE.LAYOUT."js.php";
        // if($deviceType=='mobile') include TEMPLATE.LAYOUT."phone.php";
    ?>
</body>
</html>