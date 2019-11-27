<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Kode tiket anda: <?php echo $_POST["tiket"]; ?><br>
Kode pelayanan fasilitas anda: <?php

    $tiket=$_POST["tiket"];
    $key="P R A X I S A C O L L E C T I O N O F";

    function encrypt($str, $key)
    {   
        $out = "";
        for ($i=0; $i<strlen($str); $i++)
        {
            $base = ord($str[$i]) - 65; // take index of base string
            echo $base;
            $offset = ord($key[$i]) - 65; // take index of key
            $ascii = ($base + $offset) % 26; // add indices and wrap around 26
            $out .= chr(65 + $ascii); // add 65 to indices to display ASCII
        }
        return $out;
    }

    encrypt($tiket,$key);


?>

Kode tiket anda kembali :
<?php

    $str=$out;
    $key="P R A X I S A C O L L E C T I O N O F";

    function decrypt($str,$key)
    {
    $out = "";
    for ($i=0; $i<strlen($str); $i++)
    {
    $base = ord($str[$i]) - 65; // take index of base string
    $offset = ord($key[$i]) - 65; // take index of key

    // Perform reverse "wrapping"
    $ascii = ($base - $offset);
    if ($ascii < 0) $ascii = 26 + $ascii;

    $out .= chr(65 + $ascii); // add 65 to indices to display ASCII
    }
    return $out;
    }

    decrypt($tiket,$key);


?>
</body>
</html>