<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;

class VendedorController extends Controller
{
    // Obtener informacion de vendedor
    public function getVendedor()
    {
      session_start(); 
      $usuario = session('usuario');
    	try {
			$servicio1="http://172.16.171.10/webservices/PGC360_Pro_Datos_Vendedor/Datos_Vendedor.asmx?WSDL";
			$parametros1=array();
			$parametros1['P_USERN']="$usuario";
			$client1 = new SoapClient($servicio1,array('cache_wsdl' => WSDL_CACHE_NONE,'trace' => TRUE));
			$result1 = $client1->Vb_Datos_Vendedor($parametros1);
			$result1 = obj2array($result1);
			$noticias1=$result1['Vb_Datos_VendedorResult']['MyResultData'];
			$collection = collect($noticias1)->first();
			return response()->json(
			    $collection
			);
		} catch (Exception $e) {
		    trigger_error($e->getMessage(), E_USER_WARNING);
		}
    }
}
