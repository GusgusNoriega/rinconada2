<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    // 1. Genera el token de acceso
    public function getAccessToken()
    {
        $username = 'integraciones@niubiz.com.pe';
        $password = '_7z3@8fF';

        $auth = base64_encode($username . ':' . $password);

        $url = 'https://apisandbox.vnforappstest.com/api.security/v1/security';

        $response = Http::withHeaders([
            'Authorization' => "Basic {$auth}",
        ])->get($url);

        if ($response->status() === 201) {
            return trim($response->body());
        }

        abort($response->status(), 'Error al generar el token de acceso: ' . $response->body());
    }

    // 2. Genera el token de sesiÃ³n (sessionKey) usando el token de acceso
    public function getSessionToken($accessToken)
    {
        $merchantId = '456879852'; // CÃ³digo de comercio de prueba
        $url = "https://apisandbox.vnforappstest.com/api.ecommerce/v2/ecommerce/token/session/{$merchantId}";

        $data = [
            'channel'   => 'web',
            'amount'    => 10.50,
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
            'Authorization' => $accessToken,
            'Content-Type'  => 'application/json',
        ])->post($url, $data);

        if ($response->ok()) {
            return $response->json()['sessionKey'];
        }

        abort($response->status(), 'Error al generar el token de sesiÃ³n: ' . $response->body());
    }

    // 3. Retorna la vista con el sessionToken
    public function showPaymentForm()
    {
        $accessToken  = $this->getAccessToken();
        $sessionToken = $this->getSessionToken($accessToken);

        //dd($sessionToken);
        // EnvÃ­as $sessionToken a la vista para usarlo en el formulario
        return view('cuentas', compact('sessionToken'));
    }
}
