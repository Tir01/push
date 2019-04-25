<!DOCTYPE html>
<html lang="ru">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

<!-- wp:columns -->
<div class="wp-block-columns has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>123</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>123</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8">1 блок...</div>
<p>    </p><div class="col-xs-12 col-md-4">2 блок...</div>
<p>  </p></div>
</div>




<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->




</div>
<!-- /wp:columns -->




<div class="container">
  <div class="row">
   <div class="col-xs-12 col-md-12">
   
   
   
   
   
   
   </div>
<div class="col-xs-12 col-md-12">2 блок...</div>

</div>
</div> 






<button type="button" id="subscribe">Следить за изменениями</button>

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>


<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAqmIdlg_XDW3QvUaSRvqwVOiZHz0Rr8wo",
    authDomain: "meta-matrix-171611.firebaseapp.com",
    databaseURL: "https://meta-matrix-171611.firebaseio.com",
    projectId: "meta-matrix-171611",
    storageBucket: "meta-matrix-171611.appspot.com",
    messagingSenderId: "488422098631"
  };
  firebase.initializeApp(config);
</script>





 <script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase-app.js"></script>

 <script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase-messaging.js"></script>



<script type="text/javascript" src="firebase-messaging-sw.js"></script>
<script type="text/javascript" src="firebase_subscribe.js"></script>
<script type="text/javascript" src="messaging-sw.js"></script>
  <script type="text/javascript" src="messaging.js"></script>

<?php

?>


<?php





$url = 'https://fcm.googleapis.com/fcm/send';
$YOUR_API_KEY = 'AAAAcbg5xsc:APA91bFUCCgPf7bd_sCNmPXiugb056h-nfNSlOhluhhuRv9K7eHVjy0MKswRtcScnjLLZiTH_2DMV1j4kd8gxvortGWlirYUFFiFSGnxHTHwt1hkhb3RdywXomVrBzXasGOpYTod5b7a'; // Server key
$YOUR_TOKEN_ID = ''; // Client token id

$request_body = [
    'to' => $YOUR_TOKEN_ID,
    'notification' => [
        'title' => 'Ералаш',
        'body' => sprintf('Начало в %s.', date('H:i')),
        'icon' => 'https://eralash.ru.rsz.io/sites/all/themes/eralash_v5/logo.png?width=192&height=192',
        'click_action' => 'http://eralash.ru/',
    ],
];
$fields = json_encode($request_body);

$request_headers = [
    'Content-Type: application/json',
    'Authorization: key=' . $YOUR_API_KEY,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

?>


</body>
</html>



