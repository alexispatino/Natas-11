$defaultdata = array( "showpassword"=>"no", "bgcolor"=>"#ffffff");
$cookie = "ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw=";

function xor_encrypt($in, $defaultdata) {
    $key = $defaultdata;
    $text = $in;
    $outText = '';
  
    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
        $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}

echo xor_encrypt(base64_decode($cookie), json_encode($defaultdata));
