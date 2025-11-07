<?php
$data = file_get_contents('php://input');
require_once "include/Bottele.php";
$bot = new Bot('6950411649:AAGnaFIKGF9NOewWKgojvWBjjsNqNI9It-Y');
$json = json_decode($data, true);
if (isset($json['message']['text'])) {
    $message = $json['message']['text'];
    $chatId = $json['message']['chat']['id'];
    $messageId = $json['message']['message_id'];
    require_once 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $dbHost = $_ENV['DB_HOST'];
    $dbName = $_ENV['DB_NAME'];
    $dbUser = $_ENV['DB_USER'];
    $dbPassword = $_ENV['DB_PASSWORD'];
    try {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
    }
    $messageWithoutSpaces = str_replace(' ', '', $message);
    if (filter_var($message, FILTER_VALIDATE_URL) && (strpos($message, 'facebook.com') !== false)) {
        $linkQuery = "SELECT * FROM cards WHERE linkfb = :linkToCheck";
        $linkStmt = $pdo->prepare($linkQuery);
        $linkStmt->bindParam(':linkToCheck', $message);
        $linkStmt->execute();
        $linkRows = $linkStmt->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($linkRows)) {
            $responseText = "🕵 Fb Real : \"" . $linkRows[0]['username'] . "\"\n⭐️ GDV Tại admmin100.info\n";
            foreach ($linkRows as $row) {
                $responseText .= "🎖 https://admmin100.info/profile/" . $row['code'] . "\n";
            }
            $bot->sendMessage($chatId, $responseText, $messageId);
        } else {
            $queryPos = strpos($message, '?');
            if ($queryPos !== false) {
                $linkWithoutQuery = substr($message, 0, $queryPos);
                $linkStmt->bindParam(':linkToCheck', $linkWithoutQuery);
                $linkStmt->execute();
                $linkRows = $linkStmt->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($linkRows)) {
                    $responseText = "🕵 Fb Real : \"" . $linkRows[0]['username'] . "\"\n⭐️ GDV Tại admmin100.info\n";
                    foreach ($linkRows as $row) {
                        $responseText .= "🎖 https://admmin100.info/profile/" . $row['code'] . "\n";
                    }
                    $bot->sendMessage($chatId, $responseText, $messageId);
                } else {
                    $idMatches = [];
                    if (preg_match('/[&?]id=(\d+)/', $message, $idMatches)) {
                        $idToCheck = $idMatches[1];
                        $idQuery = "SELECT * FROM cards WHERE id_fb = :idToCheck";
                        $idStmt = $pdo->prepare($idQuery);
                        $idStmt->bindParam(':idToCheck', $idToCheck);
                        $idStmt->execute();
                        $idRows = $idStmt->fetchAll(PDO::FETCH_ASSOC);
                        if (!empty($idRows)) {
                            $responseText = "🕵 Fb Real : \"" . $linkRows[0]['username'] . "\"\n⭐️ GDV Tại admmin100.info\n";
                            foreach ($idRows as $row) {
                                $responseText .= "🎖 https://admmin100.info/profile/" . $row['code'] . "\n";
                            }
                            $bot->sendMessage($chatId, $responseText, $messageId);
                        } else {
                            $bot->sendMessage($chatId, "🕵 Đây không phải là link FB của admin admmin100.info\n ⚠️ Hãy trung gian khi giao dịch để tránh bị scam !", $messageId);
                        }
                    } else {
                        $bot->sendMessage($chatId, "🕵 Đây không phải là link FB của admin admmin100.info\n ⚠️ Hãy trung gian khi giao dịch để tránh bị scam !", $messageId);
                    }
                }
            } else {
                $bot->sendMessage($chatId, "🕵 Đây không phải là link FB của admin admmin100.info\n ⚠️ Hãy trung gian khi giao dịch để tránh bị scam !", $messageId);
            }
        }
    } 
    if (filter_var($message, FILTER_VALIDATE_URL) && (strpos($message, 'admmin100.info') !== false)) {
    $profileUrlParts = explode('/profile/', $message);
    if (count($profileUrlParts) == 2) {
        $codeToCheck = $profileUrlParts[1];
        
        $linkQuery = "SELECT * FROM cards WHERE code = :codeToCheck";
        $linkStmt = $pdo->prepare($linkQuery);
        $linkStmt->bindParam(':codeToCheck', $codeToCheck);
        $linkStmt->execute();
        $linkRows = $linkStmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (!empty($linkRows)) {
            $responseText = "🕵 Link Real : \"" . $linkRows[0]['username'] . "\"\n⭐️ GDV Tại admmin100.info\n";
            foreach ($linkRows as $row) {
                $responseText .= "🔖 https://admmin100.info/profile/" . $row['code'] . "\n";
            }
            $bot->sendMessage($chatId, $responseText, $messageId);
        } else {
            $bot->sendMessage($chatId, "🕵 Đây Không Phải LINK GDV của admmin100.info\n ⚠️ Hãy trung gian khi giao dịch để tránh bị scam !", $messageId);
        }
    } else {
        $bot->sendMessage($chatId, "🕵 Không Phải Link GDV của admmin100.info", $messageId);
    }
} 
    elseif (ctype_digit($messageWithoutSpaces) && strpos($message, ' ') === false) {
        $query = "SELECT * FROM ticket WHERE sdt = :message OR stk = :message";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        $responseText = "🕵️ $message Chưa Có Đơn Tố Cáo Nào \n🛡 Tại : admmin100.info";
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($rows)) {
            $responseText = "🕵 $message Đã Có Đơn Tố Cáo 📛\n⚠️Hãy cảnh giác với stk, sđt này !!!\n";
            foreach ($rows as $row) {
                $responseText .= "🔖 https://admmin100.info/scams/" . $row['code'] . ".html\n";
            }
        }
        $bot->sendMessage($chatId, $responseText, $messageId);
    } 
}
?>