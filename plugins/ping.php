<?php
date_default_timezone_set('Asia/Tehran');
$times = date('H:i');
$enemy = file_get_contents('enemy.txt'); 
$year = date('Y-m-d', time());
$fosh = file_get_contents("https://clismart2.000webhostapp.com/fosh.php");
$me=$MadelineProto->get_self();

//ایدی عددی خود را (ربات سلف) مانند نمونه قرار دهید👇
//$admin = ایدی عددی شما; 
$admin =94326227  ; 



if(isset($data['answering'][$msg])){
$texx = $data['answering'][$msg];
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $texx, 'reply_to_msg_id' => $msg_id]);
}
if ((int)json_decode(file_get_contents('Config.json'))->Typing == 1) {

         $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];

              $m= $MadelineProto->messages->setTyping(['peer' => $chatID, 'action' =>$sendMessageTypingAction ]);
					
}
if(strpos($msg, "😐") !== false){
if ((int)json_decode(file_get_contents('Config.json'))->Poker == 1) {
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "😐", 'reply_to_msg_id' => $msg_id]);
}
}
if ($userID == $admin) {
if(strpos($msg , "/photo ") !== false or strpos($msg , "photo") !== false){
$matntrtoen1 =str_replace(['/photo ','photo'],'',$msg);
     
      $matntrtoen2 =str_replace(' ','+',$matntrtoen1);
      

copy("http://api.eliyateam.ir/texttophoto/?text=$matntrtoen2&font=2",'photo.png');
$MadelineProto->messages->sendMedia([ 
'peer' => $chatID ,'reply_to_msg_id' => $msg_id, 
'media' => [ '_' => 'inputMediaUploadedPhoto', 
'file' => 'photo.png'], 
'message' => "$matntrtoen1",
]);


}
if(strpos($msg , "/trFA ") !== false or strpos($msg , "trFA") !== false){

      $matntrtoen1 =str_replace(['/trFA ','trFA'],'',$msg);
     
      $matntrtoen2 =str_replace(' ','+',$matntrtoen1);
      
    $urltrans="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text=$matntrtoen2";
$jsurltrans=json_decode(file_get_contents($urltrans),true);
$texttrans=$jsurltrans['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" $texttrans
 ", 'parse_mode' => 'html' ]);

}

if(strpos($msg , "/trEN ") !== false or strpos($msg , "trEN") !== false){

      $matntrtoen1 =str_replace(['/trEN ','trEN'],'',$msg);
     
      $matntrtoen2 =str_replace(' ','+',$matntrtoen1);
      
    $urltrans="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=$matntrtoen2";
$jsurltrans=json_decode(file_get_contents($urltrans),true);
$texttrans=$jsurltrans['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" $texttrans
 ", 'parse_mode' => 'html' ]);

}
/*
if($msg ="delChat"){

 $MadelineProto->channels->deleteChannel(['channel' =>  $chatID, ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" پاک شد
 ", 'parse_mode' => 'html' ]);
}
*/
/*
if(strpos($msg , "CRGp ") !== false){
      $matntrtoen1 =str_replace('CRGP,'',$msg);
     
      $name = $matntrtoen1;
$Updates = $MadelineProto->messages->createChat(['users' =>["452706570"], 'title' => $name, ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" گروه ساخته شد👍
 ", 'parse_mode' => 'html' ]);
}
*/
if($msg == "toSuperGP"){

$Updates = $MadelineProto->messages->migrateChat(['chat_id' => $chatID, ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" گروه به سوپر گروه تبدیل شد
 ", 'parse_mode' => 'html' ]);
}
if($msg == "azan"){

$azan = file_get_contents("http://api-eliyatm.cf/azan.php?output=txt");
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" $azan
 ", 'parse_mode' => 'html' ]);

}
if(strpos($msg , "/font ") !== false or strpos($msg , "ساخت فونت ") !== false){
      $matntrtoen1 =str_replace(['/font ','ساخت فونت '],'',$msg);
     
      $matntrtoen2 =str_replace(' ','+',$matntrtoen1);
   $fonts=   file_get_contents("http://api.eliyateam.ir/font.php?output=txt&text=$matntrtoen2");
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" $fonts
 ", 'parse_mode' => 'html' ]);
}
if($msg == "getproxy"){

$urltrans="http://api.eliyateam.ir/proxy002json.php";
$jsurltrans1=json_decode(file_get_contents($urltrans),true);
$jsurltrans=$jsurltrans1['proxy'];
$tedad=sizeof($jsurltrans);
$kodom=rand(0,"$tedad");
$proxye=$jsurltrans["$kodom"];
$proxye=str_replace("amp;",'',$proxye);

$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"   🏷 $proxye
 پروکسی جدید دریافت شد🔐", 'parse_mode' => 'html' ]);

}
}
//--

//---------------------------------------------------------
/*
if (in_array($userID, $admin)){

$data = json_decode(file_get_contents("data.json"), true);

if(preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $msg)){
preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $msg, $text);
$data['Status'] = $text[2];
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => "Bot is $text[2] now parsa002 ", ]);
}
if($data['Status'] == "on"){
*/
if ($userID == $admin) {
if($msg == "monshiOn"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Monshi = 1;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' Monshi turned **ON** ✅', 'parse_mode' => 'MarkDown' ]);
}
//--
if($msg == "monshiOff"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Monshi = 0;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>'Monshi turned **OFF** ❌', 'parse_mode' => 'MarkDown' ]);
}
//--
if(strpos($msg,"setMonshi ") !== false){
$word = trim(str_replace("setmonshi ","",$msg));
   unlink("monshi.txt"); 
$myfile2 = fopen("monshi.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$word\n");
fclose($myfile2);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" >_ $word \nHas Seted Monshi Text 👌🏻",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
//--
if ((int)json_decode(file_get_contents('Config.json'))->Monshi == 1) {
if($update['update']['_'] == "updateNewMessage"){
if(!in_array($userID,$user['userlist'])){
$mee = $MadelineProto->get_full_info($userID);
$me = $mee['User'];
$first_name = $me['first_name'];
$MadelineProto->messages->sendMessage(['peer' => $userID, 'reply_to_msg_id' => $msg_id ,'message' =>" سلام [$first_name](tg://user?id=$userID) عزيز
$monshitext",$msg_id,'parse_mode' => 'MarkDown']);
$user["userlist"][] = $userID;
file_put_contents("user.txt",json_encode($user,true));
}
}
}
//--
if ($userID == $admin) {

if($msg == "markreadOn"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Markread = 1;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>'Markreading turned **ON** ✅ ', 'parse_mode' => 'MarkDown' ]);
}
//--
if($msg == "markreadOff"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Markread = 0;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' Markreading turned **OFF**  ❌', 'parse_mode' => 'MarkDown' ]);
}}
//--
if ((int)json_decode(file_get_contents('Config.json'))->Markread == 1) {
$msg_id = $update['update']['message']['id'];
if($chatID < 0){
$msg_id = $update['update']['message']['id'];
$MadelineProto->channels->readHistory(['channel' => $chatID, 'max_id' => $msg_id ]);
$MadelineProto->channels->readMessageContents(['channel' => $chatID, 'id' => [$msg_id] ]);
}else{
$MadelineProto->messages->readHistory(['peer' => $chatID , 'max_id' => $msg_id ]);
}
}
//--
if ((int)json_decode(file_get_contents('Config.json'))->Typing == 1) {
$sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
$m= $MadelineProto->messages->setTyping(['peer' => $chatID, 'action' =>$sendMessageTypingAction ]);				
}
if ($userID == $admin) {

if($msg =="typingOn" ||$msg=="Typing on" ||$msg=="Typing On"){
 $Conf = json_decode(file_get_contents('Config.json'));
                       
                        $Conf->Typing = 1;
                        file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **typing was succesfully turned on**❗️", 'parse_mode' => 'MarkDown' ]);
}
//--
 if($msg =="typingOff" ||$msg=="Typing Off" ||$msg=="Typing off"){
 $Conf = json_decode(file_get_contents('Config.json'));
                       
                        $Conf->Typing = 0;
                        file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **typing was succesfully turned off**❗️", 'parse_mode' => 'MarkDown' ]);
}
//--
if(strpos($msg,"clean")!==false){
if(!isset($update['update']['message']['reply_to_msg_id'])){
$del = str_replace("clean","",$msg);
if(is_numeric($del)){
for($i = $msg_id -1; $i>=$msg_id -1-$del;$i--){
$MadelineProto->channels->deleteMessages(['channel' => $chatID, 'id' => [$i]]);
}
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"$del Nember deleted ✅ \n
By => [$userID](tg://user?id=$userID)️
 ", 'parse_mode' => 'MarkDown' ]);
}else{
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"ERROR ❌ use number for delete \n
MR. »» [$userID](tg://user?id=$userID)️ 
", 'parse_mode' => 'MarkDown' ]);
}
}
}

//--
if($msg =="del" || $msg =="cl" || $msg =="/del" || $msg =="!del" || $msg =="پاکسازی" || $msg =="حذف"){
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->channels->getMessages(['channel' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
if($reply_from_id !== false){
$MadelineProto->channels->deleteUserHistory(['channel' => $chatID, 'user_id' => $reply_from_id, ]);
$MadelineProto->channels->deleteMessages(['channel' => $chatID, 'id' => [$msg_id,]]);
}
}
}
//--
if($msg == "pokerOn"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Poker = 1;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => "poker is **ON** ✅😐",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
//--
if($msg == "pokerOff"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Poker = 0;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => "poker is **OFF** 😐❌",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
	}
//--
if($msg == "me"){
$me = json_encode($MadelineProto->get_self());
$out = json_encode($me,true);
//$phone 	 = $me["phone"];
$my_name 	 = $me["first_name"];
$my_username = $me["user_name"];
$my_id 		 = $me["id"];
$me_status   = $me["status"]["_"];
$me_bio    	 = $me["full"]["about"];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => "
🎩<b>Name</b>: <a href='mention:$my_id'>$my_name</a> 
\n<b>Username</b>: @$my_username 
\n<b>User</b>🆔: $my_id 
\n<b>Status</b>🛂: $me_status 
\n<b>Bio</b>💭: $me_bio",'reply_to_msg_id' => $msg_id,'parse_mode' => 'HTML']);
}
//---
if($msg =="help" || $msg=="Help" || $msg=="راهنما" || $msg=="/help" || $msg=="!help"){
$ed = $MadelineProto->messages->editMessage(['peer' => }
//--
if($msg == "me"){
$me = json_encode($MadelineProto->get_self());
$out = json_encode($me,true);
//$phone 	 = $me["phone"];
$my_name 	 = $me["first_name"];
$my_username = $me["user_name"];
$my_id 		 = $me["id"];
$me_status   = $me["status"]["_"];
$me_bio    	 = $me["full"]["about"];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => "
🎩<b>Name</b>: <a href='mention:$my_id'>$my_name</a> 
\n<b>Username</b>: @$my_username 
\n<b>User</b>🆔: $my_id 
\n<b>Status</b>🛂: $me_status 
\n<b>Bio</b>💭: $me_bio",'reply_to_msg_id' => $msg_id,'parse_mode' => 'HTML']);
}
//---
if($msg =="help" || $msg=="Help" || $msg=="راهنما" || $msg=="/help" || $msg=="!help"){
$ed = $MadelineProto->messages->editMessage(['peer' => 
//--
if($msg == "me"){
$me = json_encode($MadelineProto->get_self());
$out = json_encode($me,true);
//$phone 	 = $me["phone"];
$my_name 	 = $me["first_name"];
$my_username = $me["user_name"];
$my_id 		 = $me["id"];
$me_status   = $me["status"]["_"];
$me_bio    	 = $me["full"]["about"];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => "
🎩<b>Name</b>: <a href='mention:$my_id'>$my_name</a> 
\n<b>Username</b>: @$my_username 
\n<b>User</b>🆔: $my_id 
\n<b>Status</b>🛂: $me_status 
\n<b>Bio</b>💭: $me_bio",'reply_to_msg_id' => $msg_id,'parse_mode' => 'HTML']);
}
//---
if($msg =="help" || $msg=="Help" || $msg=="راهنما" || $msg=="/help" || $msg=="!help"){
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"
seLF heLp
<b>به بزرگ/کوچکی دستورات توجه کنید</b>
^^^^^^^^^^^^
<---BOT--->
-> <code>bot on</code>
روشن كردن ربات 
-> <code>bot off</code> 
خاموش كردن ربات
<---MONSHI--->
-> <code>monshiOn</code>
روشن كردن منشي
-> <code>monshiOff</code>
خاموش كردن منشي
-> <code>setMonshi</code> <b>TEXT</b>
^^^^^^^^^^^^
<---MARKread & TYPE & 😐--->
-> <code>markreadOn</code>
روشن كردن حالت خواندن
-> <code>markreadOff</code>
خاموش كردن حالت خواندن
-> <code>typingOn</code>
روشن كردن حالت تايپ
-> <code>typingOff</code>
خاموش كردن حالت تايپ
-> pokerOn
روشن كردن پوكر
-> pokerOff
خاموش كردن پوكر
^^^^^^^^^^^^
<---Group--->
-> <code>clean</code> <b>NUMBER</b>
حذف چندين پيام
-> <code>del</code> 
حذف يك پيام
-> <code>ban</code> <b>REPLY</b>
مسدود كاربر
-> <code>pin</code> <b>REPLY</b>
سنجاق يك پيام
-> <code>unPin</code>
حذف سنجاق
-> <code>toSuperGP</code>
تبدیل گروه به سوپر گروه
^^^^^^^^^^^^
<---ENEMY--->
-> <code>setEnemy</code> <b>REPLY/ID</b>
افزودن دشمن
-> <code>delEnemy</code> <b>REPLY/ID</b>
حذف دشمن
-> <code>enemyOn</code>
روشن كردن دشمني
-> <code>enemyOff</code>
خاموش كردن دشمني
-> <code>enemyList</code>
ليست دشمنان
-> <code>cleanEnemy</code>
حذف ليست دشمنان
^^^^^^^^^^^^
<---رباتسازی ایلیا--->
-> <code>getproxy</code> 
دریافت پروکسی 
-> <code>azan</code> 
دریافت اوقات شرعی
-> <code>/trEN</code> <b>TEXT</b>
ترجمه متن به انگلیسی
-> <code>/trFA</code> <b>TEXT</b>
ترجمه متن به فارسی
-> <code>photo</code> <b>TEXT</b>
تبدیل متن به عکس
-> <code>/font</code> <b>TEXT</b>
دریافت فونت ها (انگلیسی)
-> <code>tr</code> <b>FA/EN/AR REPLY</b>
ترجمه متن به فارسي/انگليسسي/عربي
-> <code>like</code> <b>TEXT</b>
ساخت لايك
-> <code>downLoad</code> <b>LINK</b>
دانلود يك فايل
-> <code>joke</code>
جک
-> <code>google</code> <b>TEXT</b>
جست و جو یک متن در گوگل
-> <code>gif</code> <b>TEXT</b>
گیف
-> <code>pic</code> <b>TEXT</b>
¤عکس
-> <code>voice</code> <b>TEXT</b>
¤جست و جو ویس و تیکه آهنگ در ملوبات
-> <code>blue</code> <b>TEXT</b>
¤ابی شدن متن 
-> <code>hidden</code> <b>TEXT | USERNAME</b>
¤ساخت نجوا
-> <code>short</code> <b>URL</b>
¤کوتاخ کننده ی لینک
-> <code>apk</code> <b>TEXT</b>
¤برنامه ی اندروید
-> <code>calc</code> <b>+×÷/</b>
¤ماشین حساب
-> <code>sticker</code> <b>TEXT</b>
¤تبدیل متن یه استیکر
-> <code>time</code> <b>timeZoneEN</b>
¤دریافت زمان محلی
-> <code>weather</code> <b>COUNTRY</b>
¤اب و هوا
^^^^^^^^^^^^
~~~~~~~~~
<b>by:</b> <a href='http://t.me/'>parsa002</a>
~~~~~~~~~
<---AUTO ANSWER--->
-> <code>setAnswer</code> <b>TEXT | ANSWER</b>
افزدون پاسخ سريع
-> <code>delAnswer</code> <b>TEXT</b>
حذف پاسخ سريع
-> <code>answerList</code>
ليست پاسخ هاي سريع
-> <code>cleanAnswers</code>
حذف ليست پاسخ هاي سريع
^^^^^^^^^^^^
<---OTHER--->
-> <code>info</code> <b>REPLY</b>
مشخصات كاربر
-> <code>chats</code> 
آمار اكانت
-> <code>flood</code> <b>NUMBER | TEXT</b>
فلود
-> <code>spam</code> <b>NUMBER | TEXT</b>
اسپم
-> <code>save</code> <b>REPLY</b>
سيو پيام در saved message
-> <code>ping</code>
وضعيت ربات
-> <code>help</code>
راهنماي سلف
-> <code>me</code>
اطلاعات اكانت سلف
-> <code>sessions</code>
نشست هاي فعال
-> <code>chatID</code>
دريافت ايدي عددي
-> <code>left</code>
لف دادن 
-> <code>ser</code>
پينگ سرور
-> <code>tag</code> <b>ID</b>
تگ كردن كاربر
-> <code>Block</code> <b>USERNAME</b>
بلاك كردن
-> <code>unBlock</code> <b>USERNAME</b>
آنبلاك كردن
-> <code>setUsername</code> <b>USERNAME</b>
تغيير يوزرنيم بات
-> <code>profile</code> <b>NAME/LAST/BIO</b>
تغيير نام و نام خانوادگي و بيو اكانت
-> <code>number</code>
شمارش كردن و شات گرفتن
-> <code>time</code>
نمايش زمان تا 5 ثانيه
-> <code>MSG</code> <b>REPLY</b>
مشخصات پيام
-> <code>rem</code> <b>REPLY | PV</b>
پاكسازي پيام هاي يك پيوي
-> <code>webHook</code> <b>TOKEN | ADDRESS</b>
^^^^^^^^^^^^
", 'parse_mode' => 'HTML' ]);
$MadelineProto->channels->joinChannel(['channel' => '@Source']);
}

if(preg_match("/^[\/\#\!]?(sessions)$/i", $msg)){
$authorizations = $MadelineProto->account->getAuthorizations();
$txxt="";
foreach($authorizations['authorizations'] as $authorization){
$txxt .="
<b>hash</b>: <code>".$authorization['hash']."</code>
<b>device_model</b>: <code>".$authorization['device_model']."</code>
<b>platform</b>: <code>".$authorization['platform']."</code>
<b>system_version</b>: <code>".$authorization['system_version']."</code>
<b>api_id</b>: <code>".$authorization['api_id']."</code>
<b>app_name</b>: <code>".$authorization['app_name']."</code>
<b>app_version</b>: <code>".$authorization['app_version']."</code>
<b>date_created</b>: <code>".date("Y-m-d H:i:s",$authorization['date_active'])."</code>
<b>date_active</b>: <code>".date("Y-m-d H:i:s",$authorization['date_active'])."</code>
<b>ip</b>: <code>".$authorization['ip']."</code>
<b>country</b>: <code>".$authorization['country']."</code>
<b>region</b>: <code>".$authorization['region']."</code>
======================
";
}
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => " $txxt ️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'HTML']);
}
//--
if(strpos($msg,"setEnemy ") !== false){
$prima = trim(str_replace("setenemy ","",$msg));
$myfile2 = fopen("enemy.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$prima\n");
fclose($myfile2);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => " **User** : $prima
 **Is Enemy🖕🏻**
",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
//--
#REPLY
if($msg == "setEnemy"){
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->messages->getMessages(['peer' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
$myfile2 = fopen("enemy.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$reply_from_id\n");
fclose($myfile2);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => " **User** : $reply_from_id
 **Is Enemy🖕🏻**
",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
if($msg == "setEnemy"){
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->channels->getMessages(['channel' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
$myfile2 = fopen("enemy.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$reply_from_id\n");
fclose($myfile2);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => " **User** : $reply_from_id
 **Is Enemy🖕🏻**
",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
//--
if(strpos($msg,"delEnemy ") !== false){
$prima2 = trim(str_replace("delenemy ","",$msg));
$newlist = str_replace($prima2, "", $enemy);
file_put_contents("enemy.txt", $newlist);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **User** `:` $prima2
 **Is Not Enemy💋🍬** 
️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
//--
#REPLY
if($msg == "delEnemy"){
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->messages->getMessages(['peer' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
$newlist = str_replace($reply_from_id, "", $enemy);
file_put_contents("enemy.txt", $newlist);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **User** `:` $reply_from_id
 **Is Not Enemy💋🍬** 
️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
if($msg == "delEnemy"){
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->channels->getMessages(['channel' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
$newlist = str_replace($reply_from_id, "", $enemy);
file_put_contents("enemy.txt", $newlist);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **User** `:` $reply_from_id
 **Is Not Enemy💋🍬** 
️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
//--
if($msg == 'enemyList'){
$list = file_get_contents("$enemy.txt");
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **Enemy List** :
=============
`$enemy`
=============
",'parse_mode' => 'MarkDown' ]);
}
//--
if(preg_match("/^[\/\#\!]?(cleanEnemy)$/i", $msg)){ 
   unlink("enemy.txt"); 
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **EnemyList cleaned up✅** ', 'parse_mode' => 'MarkDown' ]);
}
//--
if($msg == "enemyOn"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Enemy = 1;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>'enemy is **ON** ✅', 'parse_mode' => 'MarkDown' ]);
}
if($msg == "enemyOff"){
 $Conf = json_decode(file_get_contents('Config.json'));
$Conf->Enemy = 0;
file_put_contents('Config.json', json_encode($Conf));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>'enemy **OFF** ❌', 'parse_mode' => 'MarkDown' ]);
}
}
//--
if ((int)json_decode(file_get_contents('Config.json'))->Enemy == 1) {
if(stripos($enemy, "$userID") !== false){
$MadelineProto->messages->deleteMessages([
'revoke'=>'Bool',
'peer' => $chatID,
'id' => [$msg_id]
]);
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id ,'message' =>
 $fosh,'parse_mode' => 'MarkDown']); 
}
}
//--
if ($userID == $admin) {

if(strpos($msg,"tr ") !== false){
$word = trim(str_replace("ترجمه ","",$msg));
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->channels->getMessages(['channel' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_to_msg_id = $update['update']['message']['reply_to_msg_id'];
$messag1 = $gmsg['messages'][0]['message'];
$messag = str_replace(" ","+",$messag1);
if($word == "FA"){
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text=$messag";
$jsurl=json_decode(file_get_contents($url),true);
$text9=$jsurl['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **Translate Fa** : 

`'.$text9.'`
 ', 'parse_mode' => 'MarkDown' ]);
}
if($word == "EN"){
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=$messag";
$jsurl=json_decode(file_get_contents($url),true);
$text9=$jsurl['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **Translate En** : 

`'.$text9.'`
 ', 'parse_mode' => 'MarkDown' ]);
}
if($word == "AR"){
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ar&text=$messag";
$jsurl=json_decode(file_get_contents($url),true);
$text9=$jsurl['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **Translate Ar** : 

`'.$text9.'`
 ', 'parse_mode' => 'MarkDown' ]);
}
}
}
if(strpos($msg,"tr ") !== false){
$word = trim(str_replace("translate ","",$msg));
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->channels->getMessages(['channel' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_to_msg_id = $update['update']['message']['reply_to_msg_id'];
$messag1 = $gmsg['messages'][0]['message'];
$messag = str_replace(" ","+",$messag1);
if($word == "fa"){
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text=$messag";
$jsurl=json_decode(file_get_contents($url),true);
$text9=$jsurl['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **Translate Fa** : 

`'.$text9.'`

 ', 'parse_mode' => 'MarkDown' ]);
}
if($word == "en"){
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=$messag";
$jsurl=json_decode(file_get_contents($url),true);
$text9=$jsurl['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **Translate En** : 

`'.$text9.'`

 ', 'parse_mode' => 'MarkDown' ]);
}
if($word == "ar"){
$url="https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ar&text=$messag";
$jsurl=json_decode(file_get_contents($url),true);
$text9=$jsurl['text'][0];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **Translate Ar** : 

`'.$text9.'`

 ', 'parse_mode' => 'MarkDown' ]);
}
}
}
//--
if(preg_match('/^[\/\!\#]?(تگ کن|[Tt]g) (.*)$/i',$msg,$id)){
$first_name = $me['first_name'];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"
[$id[2]](tg://user?id=$id[2])
",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']); 
}
//--
if(stristr($msg,'run ')){
    $cod = substr($msg, 4);
file_put_contents('co.php','<?php' . PHP_EOL . $cod);
include 'co.php';
$dominname= $_SERVER['SERVER_NAME'];
	$kojasfile=$_SERVER['PHP_SELF'];
	$kofile=str_replace("index.php",'',$kojasfile);
$koga="http://$dominname$kofile";

$b = file_get_contents("$kogaco.php");
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message'=> "**CODE:**
`$cod`

**RESULT:**
`$b`", 'parse_mode' => 'markdown']);
}
//--

if(stristr($msg,'MD ')){
  $c = substr($msg, 3);
 file_put_contents('c.php','<?php' . PHP_EOL . $c);

include 'c.php';

} 
//--
if(preg_match("/^[\/\#\!]?(Block) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(block) (.*)$/i", $msg, $text);
$MadelineProto->contacts->block(['id' => $text[2], ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **User:** $text[2] **Blocked**❌", 'parse_mode' => 'MarkDown' ]);
}
//--
 if(preg_match("/^[\/\#\!]?(unBlock) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $msg, $text);
$MadelineProto->contacts->unblock(['id' => $text[2], ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" **User** `:` $text[2] **Unblocked!**✅", 'parse_mode' => 'MarkDown' ]);
}
//--
if($msg =="بن" || $msg =="مسدود" || $msg =="/ban" || $msg =="!ban" || $msg =="ban" || $msg =="اخراج"){
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->channels->getMessages(['channel' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
if($reply_from_id !== false){
$channelBannedRights = ['_' => 'channelBannedRights', 'view_messages' => true, 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'until_date' => 0];
$MadelineProto->channels->editBanned(['channel' => $chatID, 'user_id' => $reply_from_id, 'banned_rights' => $channelBannedRights, ]);
$meee = $MadelineProto->get_full_info($reply_from_id);
$meeee = $meee['User'];
$first_name1 = $meeee['first_name'];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"**User**: $reply_from_id **Banned**❗️️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
}
//--
if($msg =="سنجاق" || $msg=="pin" || $msg=="/pin" || $msg=="!pin"){
$repid = $update['update']['message']['reply_to_msg_id'];
if(isset($update['update']['message']['reply_to_msg_id'])){
$type = $MadelineProto->get_info($chatID);
$typ = $type['type'];
$Updates = $MadelineProto->channels->updatePinnedMessage(['silent' => false, 'channel' => $chatID, 'id' => $repid, ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" Pinned✅",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
if($msg =="سنجاق" || $msg=="pin" || $msg=="/pin" || $msg=="!pin"){
$repid = $update['update']['message']['reply_to_msg_id'];
if(isset($update['update']['message']['reply_to_msg_id'])){
$type = $MadelineProto->get_info($chatID);
$typ = $type['type'];
$Updates = $MadelineProto->channels->updatePinnedMessage(['silent' => false, 'channel' => $chatID, 'id' => $repid, ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" Pinned✅",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
//--
if($msg =="حذف سنجاق" || $msg=="unPin" || $msg=="/unpin" || $msg=="!unpin"){
$MadelineProto->channels->updatePinnedMessage(['silent' => false, 'channel' => $chatID, 'id' => 0, ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" UnPinned❌",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}

//

//---
 if(strpos($msg,"setUsername ") !== false){
$ip = trim(str_replace("setusername ","",$msg));
$ip = explode("|",$ip."|||||");
$id = trim($ip[0]);
$User = $MadelineProto->account->updateUsername(['username' => "$id", ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' • **New userName Set** : 
@'.$id.'✅','parse_mode' => 'MarkDown']);
 }
if(strpos($msg,"profile ") !== false){
$ip = trim(str_replace("profile ","",$msg));
$ip = explode("|",$ip."|||||");
$id1 = trim($ip[0]);
$id2 = trim($ip[1]);
$id3 = trim($ip[2]);
$User = $MadelineProto->account->updateProfile(['first_name' => "$id1", 'last_name' => "$id2", 'about' => "$id3", ]);
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id ,'message' =>"
 **🎩First Name** : `$id1`

**🍙Last Name** : `$id2`

**🎐Bio** : $id3
",'parse_mode' => 'MarkDown']);
}
//--
if($msg == "number"){
 
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' 1⃣️ ', 'parse_mode' => 'MarkDown' ]);
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +1,'message' =>' 2⃣ ','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +2,'message' =>' 3⃣ ','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +3,'message' =>' 4⃣','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +4,'message' =>'5⃣  ','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +5,'message' =>'6⃣  ','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +6,'message' =>' 7⃣','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +7,'message' =>' 8⃣ ','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +8,'message' =>' 9⃣ ','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +9,'message' =>' 1⃣0⃣ ','parse_mode' => 'MarkDown']); 
 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' =>
 $msg_id +10,'message' =>' پخخخ بای بای فرزندم شات شدی ','parse_mode' => 'MarkDown']);
$Updates = $MadelineProto->messages->sendScreenshotNotification(['peer' => $chatID, 'reply_to_msg_id' => $msg_id, ]); 
}
//--
if($msg == 'time'){
for ($i=0; $i <= 5; $i++){
$ed =  $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => date('H:i:s'),]);
sleep(1);
}
}
//--
if(strpos($msg,"setAnswer ") !== false){
$ip = trim(str_replace("setanswer ","",$msg));
$ip = explode("|",$ip."|||||");
$txxt = trim($ip[0]);
$answeer = trim($ip[1]);
if(!isset($data['answering'][$txxt])){
$data['answering'][$txxt] = $answeer;

file_put_contents("data.txt", json_encode($data));

$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" `$txxt` 👉 `$answeer` **Add To AnswerList**✔️ ️ ", 'parse_mode' => 'MarkDown' ]);
} else{
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>" `$txxt` 👉 `$answeer` **Alerdy AnswerList **✖️️ ", 'parse_mode' => 'MarkDown' ]);
}
}
//--
if(preg_match("/^[\/\#\!]?(delAnswer) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $msg, $text);
$txxt = $text[2];
if(isset($data['answering'][$txxt])){
unset($data['answering'][$txxt]);
file_put_contents("data.json", json_encode($data));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => "$txxt **Delete To Answer List** ️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
} else{
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id,'message' => "$txxt **Not Found AnswerList** ️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
//--
if(preg_match("/^[\/\#\!]?(answerList)$/i", $msg)){
if(count($data['answering']) > 0){
$txxxt = "Answer List: 
";
$counter = 1;
foreach($data['answering'] as $k => $ans){
$txxxt .= "$counter: $k => $ans \n";
$counter++;
}
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => $txxxt]);
} else{
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' **No Answer** :(', 'parse_mode' => 'MarkDown' ]);
}
}
//--
if(preg_match("/^[\/\#\!]?(cleanAnswers)$/i", $msg)){
$data['answering'] = [];
file_put_contents("data.json", json_encode($data));
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>' Answer List is empty', 'parse_mode' => 'MarkDown' ]);
}
//--
if($msg == "MSG"){
$msgid = $update['update']['message']['reply_to_msg_id'];
$mah = $MadelineProto->messages->getMessages(['peer' => $chatID, 'id' => [$msgid]]);
$date = $mah['messages'][0]['date'];
$date = date('m/d/Y H:i:s',$date);
$message = $mah['messages'][0]['message'];
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->messages->getMessages(['peer' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
$meee = $MadelineProto->get_full_info($reply_from_id);
$meeee = $meee['User'];
$first_name1 = $meeee['first_name'];
$usernam = $meeee['user_name'];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"
 🔷#F_Name = $first_name1
🔶#User_Id = $reply_from_id
🔸Message = $message
🔹Time message = $date
️",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
   }
}
//--
if($msg == "rem"){
if(isset($update['update']['message']['reply_to_msg_id'])){
$msgid = $update['update']['message']['reply_to_msg_id'];
$pv = $MadelineProto->messages->getHistory(['peer' => $chatID, 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => $msgid, 'max_id' => 0, 'min_id' => 0, 'hash' => 0 ]);
foreach($pv['messages'] as $message){
$MadelineProto->messages->deleteMessages([
'revoke'=>'Bool',
'peer' => $chatID,
'id' => [$message['id']]
]);
}
}}
//--
if($msg == "MSG"){
$msgid = $update['update']['message']['reply_to_msg_id'];
$mah = $MadelineProto->channels->getMessages(['channel' => $chatID, 'id' => [$msgid]]);
$datee = $mah['messages'][0]['date'];
$datee = date('m/d/Y H:i:s',$datee);
$messages = $mah['messages'][0]['message'];
if(isset($update['update']['message']['reply_to_msg_id'])){
$gmsg = $MadelineProto->messages->getMessages(['peer' => $chatID, 'id' => [$update["update"]["message"]["reply_to_msg_id"]]]);
$reply_from_id = $gmsg['messages'][0]['from_id'];
$meee = $MadelineProto->get_full_info($reply_from_id);
$meeee = $meee['User'];
$first_name1 = $meeee['first_name'];
$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>"
 🔷#F_Name = $first_name1
🔶#User_Id = $reply_from_id
🔸Message = $messages
🔹Time message = $datee
",'reply_to_msg_id' => $msg_id,'parse_mode' => 'MarkDown']);
}
}
if(preg_match("/^[\/\#\!]?(like) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(like) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@like", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//--
if(preg_match("/^[\/\#\!]?(webHook) (.*) (.*)$/i", $msg)){
	preg_match("/^[\/\#\!]?(webHook) (.*) (.*)$/i", $msg, $text);
$token = $text[2];$adress =  $text[3];
file_get_contents('https://api.telegram.org/bot'.$token.'/setWebhook?url='.$adress.'');
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => " $adresa-$token webhooked✅"]);
}
}
//--
if($userID == $admin){
if($msg == 'ping' || $msg == '/ping' or $msg =="Ping" or $msg =='ربات'){
$MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => "<a href='mention:$userID'>im for U parsa002:></a>",'parse_mode' => 'html']);
}
}
//--
$me_id = $me['id'];
if ($userID == $admin) {

if ($msg =="chatID" ||$msg =="/chatID" ||$msg=="!chatID" ||$msg=="#chatID"){ 
      $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' =>  "<b>ChatID:</b> <code>$chatID</code>\n <b>YourID:</b> <a href='mention:$userID'>$me_id</a>",'parse_mode' => 'MarkDown']); 
} 
}
//--
if($userID == $admin){
if($msg == 'ser' || $msg == 'سرور' || $msg == '!Condition' || $msg == '/Condition' || $msg == 'Condition'){
$load = sys_getloadavg();
$MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => "*server ping:* $load[0]",'parse_mode' => 'markdown']);
}
}
//--
if ($userID == $admin) {
if(strpos($msg,"/download ") !== false){
         $req = trim(str_replace("/download ","",$msg));
         $req = explode("|",$req."|");
         $link = trim($req[0]);
         $name = trim($req[1]);
         $header = get_headers($link,true);
         if(isset($header['Content-Length'])){
          $file_size = $header['Content-Length'];
         }else{
          $file_size = -1;
         }
         $sizeLimit = ( 40 * 1024 * 1024);
         if($name==""){
          $name=explode("/",$link);
          $name = $name[sizeof($name)-1];
         }
         if($file_size > 0 && $file_size <= $sizeLimit ){
          $txt = "⏳ <i>Downloading Wait...</i> ".$name."";
          $m = $MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $mid , 'message' => $txt, 'parse_mode' => 'HTML' ]);
          if(isset($m['updates'][0]['id'])){
           $mid = $m['updates'][0]['id'];
          }else{
           $mid = $m['id'];
          }
          
          $file = file_get_contents($link);
          $localFile = 'JD/'.$name;
          file_put_contents($localFile,$file);
          $txt = "⏳ <b>Uploading...</b> ".$name."";
          $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $mid, 'message' => $txt, 'parse_mode' => 'html' ]);
          $caption = 'Create by parsa002 :>'.$name.'|@Source';
          
          $inputFile = $MadelineProto->upload($localFile);
          $txt = "Just a moment to sending...: <i>".$name."</i>";
          $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $mid, 'message' => $txt, 'parse_mode' => 'html' ]);
          $inputMedia = ['_' => 'inputMediaUploadedDocument', 'file' => $inputFile, 'mime_type' => mime_content_type($localFile), 'caption' => $caption, 'attributes' => [['_' => 'documentAttributeFilename', 'file_name' => $name]]];
          
          $p = ['peer' => $chatID, 'media' => $inputMedia];
          $res = $MadelineProto->messages->sendMedia($p);
          unlink($localFile);
          
          $txt = "<i>Sent!</i> 😉";
          $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $mid, 'message' => $txt, 'parse_mode' => 'html' ]);
          
          
         }else{
          $text = "❌ Max File Size: <b>".($sizeLimit / 1024 /1024 )."MB</b> but your file is <b>".round(($file_size/1024/1024),2)."MB</b>";
         }
}
//--
if ($userID == $admin) {

if(preg_match("/^[\/\#\!]?(خروج|left)$/i", $msg)){
  $type = $MadelineProto->get_info($chatID);
  $type3 = $type['type'];
  if($type3 == "supergroup"){
    $MadelineProto->messages->sendMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => "Bye parsa002 :>"]);
    $MadelineProto->channels->leaveChannel(['channel' => $chatID, ]);
  }else{
    $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => "use this in SuperGroup X.X"]);
  }
}
}
//--
if(preg_match("/^[\/\#\!]?(save)$/i", $msg) && isset($update['update']['message']['reply_to_msg_id'])){
$me = $MadelineProto->get_self();
$me_id = $me['id'];
$MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $me_id, 'id' => [$update['update']['message']['reply_to_msg_id']], ]);
$MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => "Saved "]);
}
//--
if(preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $msg, $text);
$count = $text[2];
$txt = $text[3];
$spm = "";
for($i=1; $i <= $count; $i++){
$spm .= "$txt \n";
}
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => $spm]);
}
//--
if(preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $msg, $text);
$count = $text[2];
$txt = $text[3];
for($i=1; $i <= $count; $i++){
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $txt]);
}
}
//--
if(preg_match("/^[\/\#\!]?(chats)$/i", $msg)){
$dialogs = json_encode($MadelineProto->get_dialogs());
$MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => $dialogs]);
}
//--
if(preg_match("/^[\/\#\!]?(info) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(info) (.*)$/i", $msg, $text);
$mee = $MadelineProto->get_full_info($text[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_status = $me['status']['_'];
$me_bio = $mee['full']['about'];
$me_common = $mee['full']['common_chats_count'];
$me_name = $me['first_name'];
$me_uname = $me['username']; 
$MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id, 'message' => "🎩<b>Name</b>: <a href='mention:$userID'>$me_name</a> \n<b>Username</b>: @$me_uname \n<b>User</b>🆔: $me_id \n<b>Status</b>🛂: $me_status \n<b>Bio</b>💭: $me_bio \n<b>Common Groups Count</b>👥: $me_common",'parse_mode' => 'MarkDown']);
}
//--
if(preg_match("/^[\/\#\!]?(blue) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(blue) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@TextMagicBot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(strpos($msg,"hidden ") !== false){
$ip = trim(str_replace("/hidden ","",$msg));
$ip = explode("|",$ip."|||||");
$txxt = trim($ip[0]);
$answeer = trim($ip[1]);
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@nnbbot", 'peer' => $chatID, 'query' => "$txxt $answeer", 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//--
if(preg_match("/^[\/\#\!]?(short) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(short) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@ylinkpro_bot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(preg_match("/^[\/\#\!]?(apk) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(apk) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@apkdl_bot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//--
if(preg_match("/^[\/\#\!]?(calc) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(calc) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@MACLBot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
if(preg_match("/^[\/\#\!]?(sticker) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(sticker) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@big_text_bot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(preg_match("/^[\/\#\!]?(time) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(time) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@ClockBot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(preg_match("/^[\/\#\!]?(weather) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(weather) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@raindropsbot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(preg_match("/^[\/\#\!]?(joke)$/i", $msg)){
preg_match("/^[\/\#\!]?(joke)$/i", $msg, $text);
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $chatID, 'query' => '', 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(preg_match("/^[\/\#\!]?(google) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(google) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@GoogleDEBot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(preg_match("/^[\/\#\!]?(gif) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(gif) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@gif", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
							}
//---
if(preg_match("/^[\/\#\!]?(pic) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(pic) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@pic", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//---
if(preg_match("/^[\/\#\!]?(voice) (.*)$/i", $msg)){
preg_match("/^[\/\#\!]?(voice) (.*)$/i", $msg, $text);
$txxxt = $text[2];
$messages_BotResults = $MadelineProto->messages->getInlineBotResults(['bot' => "@melobot", 'peer' => $chatID, 'query' => $txxxt, 'offset' => '0', ]);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
$MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $chatID, 'reply_to_msg_id' => $msg_id, 'query_id' => $query_id, 'id' => "$query_res_id", ]);
}
//--.
}
if($msg =="contactsOn" ||$msg=="Contacts On" ||$msg=="Contacts on"){
$data["data"]["contacts"] = "yes";
file_put_contents("data.json",json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'DONE','parse_mode' => "markdown"]);

$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id + 1, 'message' =>'saving contacts is **ON**✅', 'parse_mode' => 'html' ]);
}
//--
 if($msg =="contactsOff" ||$msg=="Contacts Off" ||$msg=="Contacts off"){
$data["data"]["contacts"] = "no";
file_put_contents("data.json",json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'DONE','parse_mode' => "markdown"]);

$ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id + 1, 'message' =>'saving contacts is **OFF**✅', 'parse_mode' => 'html' ]);
}
