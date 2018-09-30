<?php

namespace App\Http\Api;

class NaviaddressApi
{
    public static function createNaviaddress($lat, $lng, $token, $version = '1.5')
    {
        $url = "https://staging-api.naviaddress.com/api/v{$version}/Addresses";

        $options = stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-Type: application/json\r\n".
                             "auth-token: {$token}\r\n",
                'content' => json_encode([
                    'lat' => $lat,
                    'lng' => $lng,
                    'default_lang' => 'en',
                    'address_type' => 'free'
                ])
            ]
        ]);

        $response = file_get_contents($url, FILE_USE_INCLUDE_PATH, $options);

        if (!($response = json_decode($response, true))) {
            return false;
        }

        return self::accept($response['result']['container'], $response['result']['naviaddress'], $token);
    }

    public static function accept($container, $naviaddress, $token, $version = '1.5')
    {
        $url = "https://staging-api.naviaddress.com/api/v{$version}/Addresses/Accept/{$container}/{$naviaddress}?lang=ru";

        $options = stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-Type: application/json\r\n".
                             "Accept: application/json\r\n".
                             "auth-token: {$token}\r\n".
                             "Content-Length: 0"
            ]
        ]);

        return json_decode( file_get_contents($url, FILE_USE_INCLUDE_PATH, $options), true );
    }

    public static function auth($email, $password, $version = '1.5')
    {
        $url = "https://staging-api.naviaddress.com/api/v{$version}/Sessions";

        $options = stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-Type: x-www-form-urlencoded\r\n".
                             "Accept: application/json",
                'content' => json_encode([
                    'Email' => $email,
                    'password' => $password
                ])
            ]
        ]);

        $response = file_get_contents($url, FILE_USE_INCLUDE_PATH, $options);

        if ($response) {
            $response = json_decode( $response, true );

            session(['token' => $response['token']]);
        }

        return $response;
    }
}
