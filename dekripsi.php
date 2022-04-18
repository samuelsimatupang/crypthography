<?php
$str = $_POST['string'];
$base64dekripsi = base64_decode($str);
echo "Plain textnya  : $base64dekripsi";
?> 