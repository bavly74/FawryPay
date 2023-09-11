<?php
namespace App\Http\services;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
class Fawry{
    private $request_client;
    private $base_url;
    private $headers;
    public function __construct(Client $request_client)
        {
            $this->request_client=$request_client;
            $this->base_url=env('base_url');
            $this->headers=[
                'Content-Type' => 'application/json',
                'Accept'       => 'application/json'
            ];


        }


    public function buildRequest($uri,$method,$data=[]){
        $request=new Request($method,$this->base_url.$uri,$this->headers);
        
        $response=$this->request_client->send($request,[
            'json'=>$data
        ]);
      
        $response=json_decode($response->getBody(),true);
        return $response;
    }

        public function payment($data){
            return $response=$this->buildRequest('/charge','POST',$data);
        }

}