<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corazon;

class CorazonController extends Controller
{
    //

    public function temas()
    {

        $art= Corazon::all();
        $articulo=[];
        foreach($art as $arti)
        {
            $articulo[]=
            [
                'id'=>$arti['id'],
                'TITULO'=>$arti['TITULO'],
                'DESCRIPCION'=>$arti['DESCRIPCION'],
                'IMAGEN'=>$arti['IMAGEN'],
                'slug'=>$arti['slug']
            ];
        }

        //ARTICULOS DESRODEN
        $art1= Corazon::where('id', '>', 4)->get();
        $articulos1=[];
        foreach($art1 as $arti1)
        {
            $articulos1[]=
            [
                'id'=>$arti1['id'],
                'TITULO'=>$arti1['TITULO'],
                'DESCRIPCION'=>$arti1['DESCRIPCION'],
                'ARTICULO1' => $arti1['ARTICULO1'],
                'ARTICULO2'=>$arti1['ARTICULO2'],
                'ARTICULO3'=>$arti1['ARTICULO3'],
                'ARTICULO4'=>$arti1['ARTICULO4'],
                'ARTICULO5'=>$arti1['ARTICULO5'],
                'IMAGEN'=>$arti1['IMAGEN'],
                'slug'=>$arti1['slug']
            ];
            
        }
        //ARTICULOS DESRODEN 2
        $art2= Corazon::where('id', '>', 6)->get();
        $articulos2=[];
        foreach($art2 as $arti2)
        {
            $articulos2[]=
            [
                'id'=>$arti2['id'],
                'TITULO'=>$arti2['TITULO'],
                'DESCRIPCION'=>$arti2['DESCRIPCION'],
                'ARTICULO1' => $arti2['ARTICULO1'],
                'ARTICULO2'=>$arti2['ARTICULO2'],
                'ARTICULO3'=>$arti2['ARTICULO3'],
                'ARTICULO4'=>$arti2['ARTICULO4'],
                'ARTICULO5'=>$arti2['ARTICULO5'],
                'IMAGEN'=>$arti2['IMAGEN'],
                'slug'=>$arti2['slug']
            ];
            
        }
        //ARTICULOS DESRODEN 3
        $art3= Corazon::where('id', '>', 8)->get();
        $articulos3=[];
        foreach($art3 as $arti3)
        {
            $articulos3[]=
            [
                'id'=>$arti3['id'],
                'TITULO'=>$arti3['TITULO'],
                'DESCRIPCION'=>$arti3['DESCRIPCION'],
                'ARTICULO1' => $arti3['ARTICULO1'],
                'ARTICULO2'=>$arti3['ARTICULO2'],
                'ARTICULO3'=>$arti3['ARTICULO3'],
                'ARTICULO4'=>$arti3['ARTICULO4'],
                'ARTICULO5'=>$arti3['ARTICULO5'],
                'IMAGEN'=>$arti3['IMAGEN'],
                'slug'=>$arti3['slug']
            ];
            
        }

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
        $datos3=json_decode($response3->getBody()->getContents(),true);

        $cliente4=new \GuzzleHttp\Client();
        $response4=$cliente4->request('get', 'https://api.nationalize.io?name=Emmanuel');//EMMANUEL
        $datos4=json_decode($response4->getBody()->getContents(),true);

        $cliente5=new \GuzzleHttp\Client();
        $response5=$cliente5->request('get', 'https://api.nationalize.io?name=Torres');//TORRES
        $datos5=json_decode($response5->getBody()->getContents(),true);

        $cliente6=new \GuzzleHttp\Client();
        $response6=$cliente6->request('get', 'https://api.nationalize.io?name=Servin');//SERVIN
        $datos6=json_decode($response6->getBody()->getContents(),true);

        
        $array=array($datos,$datos1,$datos2,$datos3,$datos4,$datos5,$datos6);

        $nombres = [];
        foreach($array as $nom)
        {
            $nombres[]=
            [
                'NOMBRE' => $nom['name']
            ];
        }


       return view('index', ['art' => $articulo,'art1' => $articulos1,'art2' => $articulos2,'art3' => $articulos3, 'nombres' => $nombres]);  
    }

    public function vistatemas($slug)
    {
        $art1= Corazon::all();
        $articulo1=[];
        foreach($art1 as $arti1)
        {
            $articulo1[]=
            [
                'id'=>$arti1['id'],
                'TITULO'=>$arti1['TITULO'],
                'DESCRIPCION'=>$arti1['DESCRIPCION'],
                'IMAGEN'=>$arti1['IMAGEN'],
                'slug'=>$arti1['slug']
            ];
        }

        $art= Corazon::where('slug',$slug)->first();

        $numero=rand(1,10);
        $coraAl= Corazon::where('id', $numero)->first();
        $numero2=rand(1,10);
        $coraAl2= Corazon::where('id', $numero2)->first();
        $numero3=rand(1,10);
        $coraAl3= Corazon::where('id', $numero3)->first();

        

        return view('temas', ['art' => $art, 'art1' =>$art1, 'coraAl' => $coraAl, 'coraAl2' => $coraAl2, 'coraAl3' => $coraAl3]);
    }
}
