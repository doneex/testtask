<html>
<head>
    <meta charset="utf-8">
    <title>Test task</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="../assets/sss.min.js"></script>
    <link rel="stylesheet" href="../assets/sss.css" type="text/css" media="all">
    <script>
        jQuery(function($) {
            $('.slider').sss({
            });
        });
    </script>
</head>
<body>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/app/Slider.php';
$slider_xml = new Slider('https://raw.githubusercontent.com/nickua/testtaskfiles/master/images.xml', 'xml');
$slider_xml->renderSlider();
?>
<br>
<?php
$slider_json = new Slider('https://raw.githubusercontent.com/nickua/testtaskfiles/master/images.json', 'json');
$slider_json->renderSlider();
?>
</body>
</html>
