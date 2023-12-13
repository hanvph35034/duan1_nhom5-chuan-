<?php
header('Content-type: text/html; charset=utf-8');

$config = file_get_contents('../config.json');
$array = json_decode($config, true);

function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

$endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";


$partnerCode = $array["partnerCode"];
$accessKey = $array["accessKey"];
$secretKey = $array["secretKey"];
$orderInfo = "Thanh toán qua MoMo ATM";
$amount = "10000";
$orderId = time() ."";
$returnUrl = "http://localhost:8000/atm/result_atm.php";
$notifyurl = "http://localhost:8000/atm/ipn_momo.php";
// Lưu ý: link notifyUrl không phải là dạng localhost
$bankCode = "SML";

if (!empty($_POST)) {
    $partnerCode = $_POST["partnerCode"];
         $accessKey = $_POST["accessKey"];
         $serectkey = $_POST["secretKey"];
         $orderid = time()."";
         $orderInfo = $_POST["orderInfo"];
         $amount = $_POST["amount"];
         $bankCode = $_POST['bankCode'];
         $returnUrl = $_POST['returnUrl'];
         $requestId = time()."";
         $requestType = "payWithMoMoATM";
         $extraData = "";
         //before sign HMAC SHA256 signature
         $rawHashArr =  array(
                        'partnerCode' => $partnerCode,
                        'accessKey' => $accessKey,
                        'requestId' => $requestId,
                        'amount' => $amount,
                        'orderId' => $orderid,
                        'orderInfo' => $orderInfo,
                        'bankCode' => $bankCode,
                        'returnUrl' => $returnUrl,
                        'notifyUrl' => $notifyurl,
                        'extraData' => $extraData,
                        'requestType' => $requestType
                        );
         // echo $serectkey;die;
         $rawHash = "partnerCode=".$partnerCode."&accessKey=".$accessKey."&requestId=".$requestId."&bankCode=".$bankCode."&amount=".$amount."&orderId=".$orderid."&orderInfo=".$orderInfo."&returnUrl=".$returnUrl."&notifyUrl=".$notifyurl."&extraData=".$extraData."&requestType=".$requestType;
         $signature = hash_hmac("sha256", $rawHash, $serectkey);

         $data =  array('partnerCode' => $partnerCode,
                        'accessKey' => $accessKey,
                        'requestId' => $requestId,
                        'amount' => $amount,
                        'orderId' => $orderid,
                        'orderInfo' => $orderInfo,
                        'returnUrl' => $returnUrl,
                        'bankCode' => $bankCode,
                        'notifyUrl' => $notifyurl,
                        'extraData' => $extraData,
                        'requestType' => $requestType,
                        'signature' => $signature);
         $result = execPostRequest($endpoint, json_encode($data));
         $jsonResult = json_decode($result,true);  // decode json
         
         error_log( print_r( $jsonResult, true ) );
         header('Location: '.$jsonResult['payUrl']);
}
?>