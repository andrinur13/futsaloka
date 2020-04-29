<?php

use GuzzleHttp\Client;

class Jadwal_model extends CI_Model
{
    public function getjadwal()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/Futsaloka/jadwal/getjadwal');
        $response = json_decode($response->getBody()->getContents(), true);

        return $response['data'];
    }

    public function getjadwalbydate($date)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/Futsaloka/jadwal/getjadwalbydate', [
            'query' => [
                'date-input' => $date
            ]
        ]);
        $response = json_decode($response->getBody()->getContents(), true);

        return $response;
    }
}
