<?php
$assetsprefix = (ENVIROMENT == 'dev') ? '?'.date("H-i-s") : '?v1.0.12';
$assetsmin = (ENVIROMENT == 'dev') ? '' : '.min';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$blackbox->getTitle();?></title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link rel="shortcut icon" href="<?=URL;?>favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:wght@300..800&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=URLCSS;?>reset<?=$assetsmin;?><?=ENVIROMENT_SUFFIX;?>.css<?=$assetsprefix;?>">
    <link rel="stylesheet" href="<?=URLCSS;?>style<?=$assetsmin;?><?=ENVIROMENT_SUFFIX;?>.css<?=$assetsprefix;?>">
    <?php
    $blackbox->printMetaData();
    if ($thiscss = $blackbox->get("css")) {
        foreach ($thiscss as $css){
            echo '<link rel="stylesheet" href="'.$css.$assetsprefix.'">';
        }
    }
    ?>
</head>
<body id="pg-<?=$blackbox->get("page");?>">
<?php
if($blackbox->get("normallayout")==true){
    include_once( VIEWS . 'header.php' );
}
?>
