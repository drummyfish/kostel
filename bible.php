<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
<?php

$urls = array(
    array("Gen", 5),
    array("Gen", 9),
    array("Exod", 2),
    array("Exod", 4),
);
$id = $urls[array_rand($urls)];
$url = 'http://www.biblenet.cz/app/b/'.$id[0].'/chapter/'.$id[1];

include "simple_html_dom.php";

$html = file_get_html($url);
$verses = $html->find("span[class=verseText]");

for($i = 0; $i < 10; ++$i) {
    $x = rand(0, count($verses)-1);
    echo $verses[$x] . ' <b>['. $id[0].' '. $id[1] .', '. ($x+1) .']</b><br><br>';
}

?>

</body>
</html>
