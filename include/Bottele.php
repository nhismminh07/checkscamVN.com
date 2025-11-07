<?php
class Bot {
    private $bot=NULL;
    function __construct($token){
        $this->bot = $token;
    }
    public function sendMessage($chatId, $text, $reply=""){
        return $this->GET('sendMessage?chat_id='.$chatId.'&text='.urlencode($text).'&reply_to_message_id='.$reply.'&allow_sending_without_reply=true')["ok"];
    }
    private function GET($param){
        $url = "https://api.telegram.org/bot".$this->bot."/".$param;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        return json_decode($resp,1);
    }
}
?>