<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "http://m-i-s-t-e-r-g.com/";
$title = "mLabs";

$var = array(
        "1" => array(
                  "titulo" => "Jingle",
                  "image" => "https://static.wixstatic.com/media/5fdb3e_31f03fc5a07e43e991e60bc29f132aef~mv2.png/v1/fill/w_76,h_49,al_c,usm_0.66_1.00_0.01/5fdb3e_31f03fc5a07e43e991e60bc29f132aef~mv2.png"
                  ),
        "2" => array(
                  "titulo" => "Spot",
                  "image" => "https://static.wixstatic.com/media/5fdb3e_2f57026b8d1c419d86adb1f05f62602d~mv2.png/v1/fill/w_65,h_65,al_c,usm_0.66_1.00_0.01/5fdb3e_2f57026b8d1c419d86adb1f05f62602d~mv2.png"
                  ),
        "3" => array(
                  "titulo" => "Sound Branding",
                  "image" => "https://static.wixstatic.com/media/5fdb3e_6108ade923744f4192028fca53a08e4b~mv2.png/v1/fill/w_67,h_66,al_c,usm_0.66_1.00_0.01/5fdb3e_6108ade923744f4192028fca53a08e4b~mv2.png"
                  ),
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>
