<?php include "db.php";
      include "functions.php";
      require('header.php');

require 'vendor/autoload.php'; 

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;


if(isset($_POST['submit'])){
    
    
    $cname = $_POST['name'];
    $cnum = $_POST['email'];
    $cexp = $_POST['address'];
    
    $bill = $_SESSION['bill'];
    
    
   /* $_SESSION['cname'] =  $cname;
    $_SESSION['cnum'] =  $cnum;
    $_SESSION['cexp'] =  $cexp;*/
       
}  

define("AUTHORIZENET_LOG_FILE","phplog");

  /*  $cname = $_SESSION['cname'];
    $cnum = $_SESSION['cnum'];
    $cexp = $_SESSION['cexp'];
    $order_id = $_SESSION['order_id'];
    $bill = $_SESSION['bill'];
    */



// Common setup for API credentials  
  $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();   
  $merchantAuthentication->setName("858HtGzXNbQ");   
  $merchantAuthentication->setTransactionKey("7U3Mn247dFcxTF4U");   
  $refId = 'ref' . time();

// Create the payment data for a credit card
  $creditCard = new AnetAPI\CreditCardType();
  $creditCard->setCardNumber("$cnum" );  
  $creditCard->setExpirationDate( "$cexp");
  $paymentOne = new AnetAPI\PaymentType();
  $paymentOne->setCreditCard($creditCard);

// Create a transaction
  $transactionRequestType = new AnetAPI\TransactionRequestType();
  $transactionRequestType->setTransactionType("authCaptureTransaction"); 

  $transactionRequestType->setAmount($bill);

  $transactionRequestType->setPayment($paymentOne);
  $request = new AnetAPI\CreateTransactionRequest();
  $request->setMerchantAuthentication($merchantAuthentication);
  $request->setRefId( $refId);
  $request->setTransactionRequest($transactionRequestType);
  $controller = new AnetController\CreateTransactionController($request);
  $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);   


  echo "<div class = 'register'>";

if ($response != null) 
{
  $tresponse = $response->getTransactionResponse();
  if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))
  { 
      
    
      $authcode = $tresponse->getAuthCode();
      $transaction_id = $tresponse->getTransId();
      
      $order_id = $_SESSION['order_id'];
      
      $query = "update orders set transaction_id = '$transaction_id', status = 'A' where id = '$order_id';";
      
      $lastresult = mysqli_query($connection,$query);
      
    
     
    echo "Thank you. Your order has been placed successfully <br><br>";
    
    echo "Charge Credit Card AUTH CODE : $authcode <br><br>";
    echo "Charge Credit Card TRANS ID  : $transaction_id \n";
      updateInventory();
  }
  else
  {
    echo "Charge Credit Card ERROR :  Invalid response\n";
  }
}  
else
{
  echo  "Charge Credit Card Null response returned";
}

echo "</div>";
?>