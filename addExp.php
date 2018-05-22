<?php include 'include/db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
$userid = 123123;
$expid = getToken(6);
$date = date('Y-m-d', strtotime($_POST['dated']));
$cat = $_POST['categ'];
$exps = $_POST['expen'];

if(isset($_POST['categ'])){

    $sql = "INSERT INTO expense_list (expid,userid,`date`,expense_category, expenses)
VALUES ('$expid', '$userid', '$date','$cat',$exps)";

if ($conn->query($sql) === TRUE) {
    header("Location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

function getToken($length)
{
    $token = "";
    
    $codeAlphabet= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    
    return $token;
}


function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}








?>

