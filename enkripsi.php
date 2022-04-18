<?php
$str = $_POST['string'];
$base64enkripsi = base64_encode($str);
echo "Hasil Enkripsi : $base64enkripsi";
?> 
