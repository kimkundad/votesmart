<?php
header('Access-Control-Allow-Origin: *');
$image = 'https://graph.facebook.com/1556099071134652/picture?width=300&height=300';
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
//$src = 'data:'.mime_content_type($image).';base64,'.$imageData;
$src = 'data:image/jpeg;base64,'.$imageData;
// Echo out a sample image
echo '<img src="' . $src . '">';
 ?>
<!--<img src="//graph.facebook.com/{{$objs->provider_user_id}}/picture?width=300&height=300"  style=" height:350px; width:350px;" >-->
