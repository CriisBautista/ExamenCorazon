<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    //
    public function otro(){
        //consumo de API

        $cliente=new \GuzzleHttp\Client();
        $response=$cliente->request('get', 'https://api.nationalize.io?name=Cristian');//cRISTIAN
        $datos=json_decode($response->getBody()->getContents(),true);

        $cliente1=new \GuzzleHttp\Client();
        $response1=$cliente1->request('get', 'https://api.nationalize.io?name=Efrain');//EFRAIN
        $datos1=json_decode($response1->getBody()->getContents(),true);

        $cliente2=new \GuzzleHttp\Client();
        $response2=$cliente2->request('get', 'https://api.nationalize.io?name=Bautista');//BAUTISTA
        $datos2=json_decode($response2->getBody()->getContents(),true);

        $cliente3=new \GuzzleHttp\Client();
        $response3=$cliente3->request('get', 'https://api.nationalize.io?name=Bautista');//BAUTISTA
        $datos3=json_decode($response->getBody()->getContents(),true);

        $cliente4=new \GuzzleHttp\Client();
        $response4=$cliente4->request('get', 'https://api.nationalize.io?name=Emmanuel');//EMMANUEL
        $datos4=json_decode($response4->getBody()->getContents(),true);

        $cliente5=new \GuzzleHttp\Client();
        $response5=$cliente5->request('get', 'https://api.nationalize.io?name=Torres');//TORRES
        $datos5=json_decode($response5->getBody()->getContents(),true);

        $cliente6=new \GuzzleHttp\Client();
        $response6=$cliente6->request('get', 'https://api.nationalize.io?name=Servin');//SERVIN
        $datos6=json_decode($response6->getBody()->getContents(),true);

        
        
        $nombres = [];
        $nombres[]=
        [
            'NOMBRE' => $datos['name']
        ];

        $nombres1 = [];
        $nombres1[]=
        [
            'NOMBRE' => $datos1['name']
        ];


        $nombres2 = [];
        $nombres2[]=
        [
            'NOMBRE' => $datos2['name']
        ];

        $nombres3 = [];
        $nombres3[]=
        [
            'NOMBRE' => $datos3['name']
        ];

        $nombres4 = [];
        $nombres4[]=
        [
            'NOMBRE' => $datos4['name']
        ];

        $nombres5 = [];
        $nombres5[]=
        [
            'NOMBRE' => $dato5['name']
        ];
        $nombres6 = [];
        $nombres6[]=
        [
            'NOMBRE' => $datos6['name']
        ];

        /* echo "<pre>";
       print_r($nombres);
       echo"</pre>"; */

       return view('index', ['nombres' => $nombres, 'nombres1' => $nombres1, 'nombres2' => $nombres2, 'nombres3' => $nombres3, 'nombres4' => $nombres4, 'nombres5' => $nombres5, 'nombres6' => $nombres6]);
    }
}
