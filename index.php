<?php
/*
 * M.Ali.Abbaspor
 * Desc: show dahua cctv image camera in web page
 * and refresh every time
 *
 * https:;//intellsoft.ir/
 *
 * Model: DH-IPC-HDBW1320EP-AS-0360B
 * Firmware Version: 2.400.0000.21.R, build : 2015-12-15

 * note: only work in dahua network camera
 */

require_once ("Config.php");

$camera_Image =  '<img id="myImage" width="'.$output_Image_Width.'" height="'.$output_Image_height.'" src="cctv.php">';

?>
<html>
<head>
    <title>بارگزاری تصویر دوربین مداربسته dahua در صفحه سایت</title>
</head>
<body>

<?php echo $camera_Image; ?>
<script>

    var intervalId = window.setInterval(function(){
        refreshImage();
    }, <?php echo $Load_Interval; ?>);


    function refreshImage(){
        document.getElementById("myImage").src = "cctv.php"+ `?v=${new Date().getTime()}`;
    }
</script>

</body>
</html>
