<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Log;
use Illuminate\Support\Facades\Http;
use App\Models\User;
/**
 * Class SyncsWithFirebase
 * @package App\Traits
 */
trait UseZoom
{
    public $client;
    public $jwt;
    public $headers;

    public function __construct()
    {

        $this->client = new Client();
        $this->accessToken = 'uZDKBaOrRkmXTzR-eqci4Q';

        $this->headers = [
            'Authorization' => 'Bearer ' . $this->accessToken,
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json',
        ];
    }

    /**
     * Display a generateZoomToken.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function generateZoomToken()
    {
        return JWT::generateToken(
            [
                'iss' => config('zoom.api_key'),
                'exp' => time() + config('zoom.token_life')
            ],
            config('zoom.api_secret')
        );
    }*/



    function generateZoomAccessToken()
    {
        $account_id = "1TfLziTdTrWKbA1OCE9Tjg";
        $apiKey = "eHqQYS4pQnahw9CaU4g8zA";
        $apiSecret = "9JMW95JAd5AOlOowPwz0eeNOJPa9Cgsl";

        $base64Credentials = base64_encode("$apiKey:$apiSecret");

        $url = 'https://zoom.us/oauth/token?grant_type=account_credentials&account_id=' . $account_id;

        $response = Http::withHeaders([
            'Authorization' => "Basic $base64Credentials",
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->post($url);

        $responseData = $response->json();

        if (isset($responseData['access_token'])) {
            return $responseData['access_token'];
        } else {
            // Log or print the entire response for debugging purposes.
            \Log::error('Zoom OAuth Token Response: ' . json_encode($responseData));

            // Handle the error as needed.
            return null; // You might want to return null or throw an exception here.
        }
    }
    /**
     * Display a zoomRequest.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function zoomRequest()
    {
        $token = $this->generateZoomToken();

        return \Illuminate\Support\Facades\Http::withHeaders([
            //'authorization' => 'Bearer ' . $token,
            //'content-type' => 'application/json',
        ]);
    }*/

    private function retrieveZoomUrl()
    {
        return env('ZOOM_API_URL', '');
    }

    public function toZoomTimeFormat(string $dateTime)
    {
        try {
            $date = new \DateTime($dateTime);

            return $date->format('Y-m-d\TH:i:s');
        } catch (\Exception $e) {
            Log::error('ZoomJWT->toZoomTimeFormat : ' . $e->getMessage());

            return '';
        }
    }

    public function create($data)
    {

        $accessToken = $this->generateZoomAccessToken();

//        $doctor = User::findOrfail(auth()->user()->id);


        $url = 'https://api.zoom.us/v2/users/me/meetings';

        $response = Http::withToken($accessToken)->post($url, [
            'topic'      => 'الملتقى السنوى لمقاومة المخدرات وتوعية الشباب',
            'type'       => self::MEETING_TYPE_INSTANT,
//            'start_time' => now()->addMinute(),
//            'duration'   => 4,
            'agenda'     => 'conference',
            'timezone' => 'Asia/Riyadh',
        ]);
            return [
                'success' => $response->getStatusCode() === 201,
                'data'    => json_decode($response->getBody(), true),
            ];


        if ($response->successful()) {
            return [
                'success' => $response->getStatusCode() === 201,
                'data'    => json_decode($response->getBody(), true),
            ];
        } else {
            return [
                'success' => $response->getStatusCode() === 201,
                'data'    => json_decode($response->getBody(), true),
            ];
            return response()->json(['error' => 'Failed to create a Zoom meeting'], 500);
        }
    }


    public function updatezoom($id, $data)
    {
        $accessToken = $this->generateZoomAccessToken();
        $url = 'https://api.zoom.us/v2/meetings/' . $id;

        $response = Http::withToken($accessToken)->patch($url, [
            'topic' => 'Online Meeting',
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => $this->toZoomTimeFormat($data['start_time']),
            'duration' => $data['duration'],
            'agenda' => (!empty($data['agenda'])) ? $data['agenda'] : null,
            'timezone' => 'Africa/Cairo',
        ]);

        if ($response->successful()) {
            // Meeting updated successfully
            return [
                'success' => true,
                'data' => $response->json(),
            ];
        } else {
            // Handle the error
            return response()->json(['error' => 'Failed to update the Zoom meeting'], 500);
        }
    }


    public function get($id)
    {
        $path = 'meetings/' . $id;
        $url = $this->retrieveZoomUrl();
        $this->jwt = $this->generateZoomToken();
        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([]),
        ];

        $response =  $this->client->get($url . $path, $body);

        return [
            'success' => $response->getStatusCode() === 204,
            'data'    => json_decode($response->getBody(), true),
        ];
    }

    /**
     * @param string $id
     *
     * @return bool[]
     */

    public function delete($id)
    {
        $accessToken = $this->generateZoomAccessToken();
        $url = 'https://api.zoom.us/v2/meetings/' . $id;

        $response = Http::withToken($accessToken)->delete($url);

        if ($response->successful()) {
            // Meeting deleted successfully
            return [
                'success' => true,
                'data' => $response->json(),
            ];
        } else {
            // Handle the error
            return response()->json(['error' => 'Failed to delete the Zoom meeting'], 500);
        }
    }

/////////////////////////////////////////////////////



  public function zoomRequest()
    {
        $token = $this->generateZoomAccessToken();

        return \Illuminate\Support\Facades\Http::withHeaders([
            'authorization' => 'Bearer ' . $token,
            'content-type' => 'application/json',
        ]);
    }




    /**
     * Display a zoomPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function zoomPost(string $path, array $body = [])
    {
        $request = $this->zoomRequest();
        return $request->post(config('zoom.base_url') . $path, $body);
    }










}
