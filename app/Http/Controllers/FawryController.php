<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\services\Fawry;

class FawryController extends Controller
{
    private $fawryService;
    public function __construct(Fawry  $fawryService)
    {
        $this->fawryService=$fawryService;
        
    }
    //pay with CARD OR pay with fawry
    public function payNow(){
        $data=[
            "merchantCode" => "1tSa6uxz2nTwlaAmt38enA==",
            "customerName"=> "bavly",
            "customerMobile"=> "01234567891",
            "customerEmail"=>"BAVLY@gmail.com",
            "customerProfileId"=> "777777",

            "cardNumber"=> "4242424242424242",
            "cardExpiryYear"=>  "25",
            "cardExpiryMonth"=> "05",
            "cvv"=>  "123",

            "merchantRefNum"=> "2312465464",
            "amount"=> "20.0",
            "paymentExpiry" => "1631138400000",
            "currencyCode"=> "EGP",
            "language" => "en-gb",
            "chargeItems"=> [
                [
              
                "itemId"=> "897fa8e81be26df25db592e81c31c",
                "description"=> "Item Descriptoin",
                "price"=> "20.0",
                "quantity"=> "1"
                ]
            ],
            // "signature"=> "2ca4c078ab0d4c50ba90e31b3b0339d4d4ae5b32f97092dd9e9c07888c7eef36",
            // "paymentMethod"=> "PayAtFawry",
            // "description"=> "Example Description"


            "enable3DS" => true,
            "authCaptureModePayment" => false,
            "returnUrl" =>"https://developer.fawrystaging.com",
            "signature"=> "2ca4c078ab0d4c50ba90e31b3b0339d4d4ae5b32f97092dd9e9c07888c7eef36",
            "paymentMethod"=> "CARD",
            "description"=> "Example Description"
      ];
      return $this->fawryService->payment($data);
    }
   
}
