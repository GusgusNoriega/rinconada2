<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NiubizPaymentService
{
    private $merchantId;
    private $apiUrl;
    private $securityUrl;
    private $username;
    private $password;
    private $accessToken;
    private $url;

    public function __construct()
    {
        $this->merchantId = config('custom.niubiz.merchant_id');
        $this->apiUrl = config('custom.niubiz.api_url');
        $this->securityUrl = config('custom.niubiz.security_url');
        $this->username = config('custom.niubiz.username');
        $this->password = config('custom.niubiz.password');
        $this->url = $this->apiUrl . $this->merchantId;
        $this->accessToken = $this->getAccessToken();
    }

    private function getAccessToken()
    {
        $auth = base64_encode($this->username . ':' . $this->password);

        $response = Http::withHeaders([
            'Authorization' => "Basic {$auth}",
        ])->get($this->securityUrl);

        if ($response->status() === 201) {
            return trim($response->body());
        }

        abort($response->status(), 'Error al generar el token de acceso: ' . $response->body());
    }

    public function getSessionToken($amount = 10.50)
    {

        $data = [
            'channel'   => 'web',
            'amount'    => $amount,
            'antifraud' => [
                'clientIp'           => request()->ip(),
                'merchantDefineData' => [
                    'MDD15' => 'Valor MDD 15',
                    'MDD20' => 'Valor MDD 20',
                    'MDD33' => 'Valor MDD 33',
                ],
            ],
            'dataMap'   => [
                'cardholderCity'        => 'Lima',
                'cardholderCountry'     => 'PE',
                'cardholderAddress'     => 'Av Jose Pardo 831',
                'cardholderPostalCode'  => '12345',
                'cardholderState'       => 'LIM',
                'cardholderPhoneNumber' => '987654321',
            ],
        ];

        $response = Http::withHeaders([
            'Authorization' => $this->accessToken,
            'Content-Type'  => 'application/json',
        ])->post($this->url, $data);

        if ($response->status() === 201 || $response->status() === 200) {
            $responseData = json_decode($response->body(), true);

            if (isset($responseData['sessionKey'])) {
                return $responseData['sessionKey'];
            } else {
                abort($response->status(), 'Error al generar el token de sesión: ' . $response->body());
            }
        }

        abort($response->status(), 'Error al generar el token de sesión: ' . $response->body());
    }

    public function processPayment(array $paymentData)
    {
        // Logic to process payment
    }

    public function refundPayment(string $transactionId)
    {
        // Logic to refund payment
    }

    public function getPaymentStatus(string $transactionId)
    {
        // Logic to get payment status
    }
}
