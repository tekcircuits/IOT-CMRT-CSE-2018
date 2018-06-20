<?php
require_once 'config.inc.php';


$ms = $_POST['msg'];

function encrypt_string($string = '', $salt = '8638FD63E6CC16872ACDED6CE49E5A270ECDE1B3B938B590E547138BB7F120EA') {
    $key = pack('H*', $salt);    
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $string, MCRYPT_MODE_CBC, $iv);
    return base64_encode($iv . $ciphertext);
}
function decrypt_string($encodedText = '', $salt = '8638FD63E6CC16872ACDED6CE49E5A270ECDE1B3B938B590E547138BB7F120EA') {
    $key = pack('H*', $salt);
    $ciphertext_dec = base64_decode($encodedText);
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
    $ciphertext_dec = substr($ciphertext_dec, $iv_size);
    return mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
}
 $encodedText  = encrypt_string('Ashwanth', '8638FD63E6CC16872ACDED6CE49E5A27');
 //echo $encodedText;
$decode= decrypt_string($encodedText , '8638FD63E6CC16872ACDED6CE49E5A27');
//echo $decode;
//echo encrypt_string($encodedText , '8638FD63E6CC16872ACDED6CE49E5A27');

$query="INSERT INTO `encrypt`(`user_id`, `data`) VALUES (1,'$encodedText')";
//echo $query;
$result = mysqli_query($con,$query);
//print_r($result);

?>