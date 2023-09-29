<?
// require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$token = $_POST['token'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => "6LdT4V0oAAAAALUdg0oI-dMz660tkRhIi6-dG4A7", 'response' => $token)));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$captcha_result = curl_exec($ch);
$captcha_result = json_decode($captcha_result);
curl_close($ch);

if (!$captcha_result->success) {
    http_response_code(405);

    echo json_encode(array($captcha_result));

    die();
}

function cleanPostData($value = "")
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

$email = cleanPostData($_POST['email']);
$name = cleanPostData($_POST['name']);
$phone = cleanPostData($_POST['number']);
$message = cleanPostData($_POST['message']);

// if (!$email || !$name || !$phone || !$message) {
//     http_response_code(405);

//     echo json_encode(array('success' => 'false'));

//     die();
// }

CEvent::Send(
    'FORM_SEND',
    's1',
    array(
        'PHONE' => $phone,
        'EMAIL' => $email,
        'NAME' => $name,
        'MESSAGE' => $message
    )
);

http_response_code(200);
echo json_encode(array($email));
die();
