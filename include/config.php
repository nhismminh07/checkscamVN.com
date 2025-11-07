<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
session_start();
$developer = false;
define("DATABASE", $_ENV['DB_NAME']);
define("USERNAME", $_ENV['DB_USER']);
define("PASSWORD", $_ENV['DB_PASSWORD']);
$duykhanhdevDir = __DIR__ . '/../duykhanh';
if (!file_exists($duykhanhdevDir)) {
    die('duykhanh.dev Notification: vào file config thay ten đê cu (duykhanh)');
}
$ketnoi = mysqli_connect("localhost", USERNAME, PASSWORD, DATABASE);
$ketnoi->set_charset("utf8mb4");
date_default_timezone_set('Asia/Ho_Chi_Minh');

$_SESSION['session_request'] = time();
$site = $ketnoi->query("SELECT * FROM setting")->fetch_array();
$cc = $ketnoi->query("SELECT * FROM lienhe")->fetch_array();
$khanh = $ketnoi->query("SELECT * FROM bangchung")->fetch_array();
$user = $ketnoi->query("SELECT * FROM users")->fetch_array();
$row = $ketnoi->query("SELECT * FROM cards")->fetch_array();
$duykhanh = $ketnoi->query("SELECT * FROM ticket")->fetch_array();
$concac = $ketnoi->query("SELECT * FROM lienhe")->fetch_array();
$ccc = $ketnoi->query("SELECT * FROM baotri")->fetch_array();

function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = ["png", "jpeg", "jpg", "PNG", "JPEG", "JPG", "gif", "GIF", "webp"];
    if (in_array($ext, $valid_ext)) {
        return true;
    }
}
function curl_get_api_dailysieure($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);

    curl_close($ch);
    return $data;
}

function xoadau($strTitle)
{
    $strTitle = strtolower($strTitle);
    $strTitle = trim($strTitle);
    $strTitle = str_replace(' ', '-', $strTitle);
    $strTitle = preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ễ|É|È|Ẻ|Ẽ|Ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strTitle);
    $strTitle = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strTitle);
    $strTitle = str_replace('đ', 'd', $strTitle);
    $strTitle = str_replace('Đ', 'd', $strTitle);
    $strTitle = preg_replace("/[^-a-zA-Z0-9]/", '', $strTitle);
    return $strTitle;
}


$baotri = $site['baotri'];
$name = $ccc['name'];
$color_phitg_atm = $concac['color_phitg_atm'];
$color_dvtg = $concac['color_dvtg'];
$color = $site['color'];

$site_tenweb = $site['site_tenweb'];
$gmail_ad = $site['gmail_ad'];
$site_mota = $site['site_mota'];
$site_logo = $site['site_logo'];
$site_sdt_momo = $site['sdt_admin'];
$facebook = $site['facebook'];
$tele_chatid = '';
$sdt = $cc['sdt'];
$tele = $cc['tele'];


$config = [
    'tacgia'       => 'DichVuRight.Com',
    'version'       => '4.0',
    'max_time_load' => 4
];

if ($developer == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
function random($string, $int)
{
    return substr(str_shuffle($string), 0, $int);
}
function sendTele($message)
{
    global $tele_token,$tele_chatid;
    $data = http_build_query([
        'chat_id' => $tele_chatid,
        'text' => $message,
    ]);
    $url = 'https://api.telegram.org/bot' . $tele_token . '/sendMessage';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    if ($data) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function templateTele($content)
{
    return "🔔 THÔNG BÁO
📝 Nội dung: " .
        $content .
        "
🕒 Thời gian: " .
        date('d/m/Y H:i:s');
}
function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}


$sdcolor = $site['sdcolor'];
$music = $site['music'];
$musicadmin = $site['musicadmin'];
$tele_token = '';
$mess = $cc['mess'];
$money = $row['money'];
$image = $row['image'];

function MinhChien($urlFb) {
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://id.traodoisub.com/api.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        $headers = array(
            "authority: id.traodoisub.com",
            "accept: application/json, text/javascript, */*; q=0.01",
            "accept-language: vi,vi-VN;q=0.9",
            "content-type: application/x-www-form-urlencoded; charset=UTF-8",
            "origin: https://id.traodoisub.com",
            "referer: https://id.traodoisub.com/",
            "sec-ch-ua: \"Not/A)Brand\";v=\"99\", \"Google Chrome\";v=\"115\", \"Chromium\";v=\"115\"",
            "sec-ch-ua-mobile: ?0",
            "sec-ch-ua-platform: \"Windows\"",
            "sec-fetch-dest: empty",
            "sec-fetch-mode: cors",
            "sec-fetch-site: same-origin",
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
            "x-requested-with: XMLHttpRequest",
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $data = array(
            "link" => $urlFb,
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
}
function hideCharactersInURL($url, $hiddenCharacters = 5) {
    if (strlen($url) > $hiddenCharacters) {
        $hiddenURL = substr($url, 0, -$hiddenCharacters) . str_repeat('*', $hiddenCharacters);
    } else {
        $hiddenURL = str_repeat('*', strlen($url));
    }

    return $hiddenURL;
}



?>
