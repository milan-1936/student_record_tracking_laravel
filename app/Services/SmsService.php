<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('AAKASHSMS_API_KEY');
    }

    public function sendSms($phone, $message)
    {
        try {
            $response = Http::withOptions([
                'verify' => 'C:\xampp\apache\bin\curl-ca-bundle.crt',
            ])->get('https://sms.aakashsms.com/sms/v3/send', [
                'auth_token' => $this->apiKey,
                'to' => $phone,
                'text' => $message,
            ]);

            return $response->json();
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

//    https://sms.aakashsms.com/sms/v4/available-credit

     public function getBalance(){
        $response = Http::withOptions([
             'headers' => [
                 'auth-token' => $this->apiKey,
             ],
             'verify' => 'C:\xampp\apache\bin\curl-ca-bundle.crt'
         ])->get('https://sms.aakashsms.com/sms/v4/available-credit');
         return $response->json();
     }
}
