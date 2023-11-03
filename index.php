<?php
error_reporting(0);
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
if (!file_exists('Config.json')) {
  file_put_contents('Config.json', '{"Monshi":0,"Markread":0,"Typing":1,"Poker":0,"Enemy":0}');
}
define('MADELINE_BRANCH', 'deprecated');
include "madeline.php"
	function closeConnection($message = 'in running @Source ')
{
    if (php_sapi_name() === 'cli' || isset($GLOBALS['exited'])) {
        return;
    }

$token = 'YOUR_BOT_TOKEN';
<?php
$question = 'Favorite color?';
$poll = [
    'chat_id' => $chat_id,
    'options' => json_encode($options)
];

file_get_contents("https://api.telegram.org/bot$token/sendPoll?" . http_build_query($poll));
?>

file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
?>

	<?php
$chat_id = 'TARGET_CHAT_ID';
$url = "https://api.telegram.org/bot$token/sendMessage";
$data = array(
    'chat_id' => $chat_id
);

file_get_contents($url . '?' . http_build_query($data));
?>

    @ob_end_clean();
    header('Connection: close');
    ignore_user_abort(true);:
    header("Content-Length: $size");
    header('Content-Type: text/html');
    ob_end_flush();
<?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$message = 'Hello, Telegram!';

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message");
?>

    flush();
}
function shutdwn_function($lock)
{
    $a = fsockopen((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'tls' : 'tcp').'://'.$_SERVER['SERVER_NAME'], $_SERVER['SERVER_PORT']);
    fwrite($a, $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n".'Host: '.$_SERVER['SERVER_NAME']."\r\n\r\n");
    flock($lock, LOCK_UN);
    fclose($lock);
}
if (!file_exists('bot.lock')) {
    touch('bot.lock');
}
$lock = fopen('bot.lock', 'r+');

$try = 1;
$locked = false;
while (!$locked) {
    $locked = flock($lock, LOCK_EX | LOCK_NB);
    if (!$locked) {
        closeConnection();

        if ($try++ >= 30) {
            exit;
        }
        sleep(1);
    }
}
$MadelineProto = new \danog\MadelineProto\API('parsa002.madeline');
$MadelineProto->start();
$offset = 0;

register_shutdown_function('shutdown_function', $lock);
closeConnection();

while (true) {
    $updates = $MadelineProto->get_updates(['offset' => $offset, 'limit' => 50, 'timeout' => 0]);
    \danog\MadelineProto\Logger::log($updates);
    foreach ($updates as $update) {
$conn = mysqli_connect("localhost", "username", "password", "database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
     $up = $update['update']['_'];
                if ($up == 'updateNewMessage' or $up == 'updateNewChannelMessage' or $up == 'updateEditChannelMessage') {
$chatID = $MadelineProto->get_info($update['update']);
$type = $chatID['type'];
$chatID = $chatID['bot_api_id'];
$userID = $update['update']['message']['from_id'];
                try {

	include 'plugins/ping.php';
	unlink("MadelineProto.log");
	
}catch(Exception $e){
	}
	catch(\danog\MadelineProto\RPCErrorException $e){
		$MadelineProto->messages->sendMessage(['peer' => 73552175, 'message' => $e]);
	}
	catch(\danog\MadelineProto\Exception $e){
	}
	catch(\danog\MadelineProto\TL\Conversion\Exception $e){
	}
}
}
}
