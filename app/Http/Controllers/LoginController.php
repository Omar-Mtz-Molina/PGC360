<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use SoapClient;
use Auth;

class LoginController extends Controller
{
    //
    public function ingresar(Request $request){
    	$validatedData = $request->validate([
        'g-recaptcha-response' => 'required',
    	]);
    	$us=$request->usuario;
		$pass=$request->password;
    	$servicio="http://172.16.171.10/WebServices/PGC360_Pro_Dist_Manto_Usuario/Dist_Manto_Usuario.asmx?WSDL";
		$parametros=array();
		$parametros['P_USRNA']=$us;
		$parametros['P_PASWO']=$pass;
		$parametros['P_UNAME']="";
		$parametros['P_UMNAM']="";
		$parametros['P_ULNAM']="";
		$parametros['P_IDKOU']="0";
		$parametros['P_IDSUC']="";
		$parametros['P_EMAIL']="";
		$parametros['P_ACTION']="6";
		$client = new SoapClient($servicio,array('cache_wsdl' => WSDL_CACHE_NONE,'trace' => TRUE));
		$result = $client->Vb_Manto_Usuario($parametros);
		$result = obj2array($result);
		$noticias1=$result['Vb_Manto_UsuarioResult']['MyResultData'];
		$n1=count($noticias1);
		for($i1=0; $i1<$n1-1; $i1++){
		    $noticia1=$noticias1[$i1];
		    $error=$noticia1['MYERR'];
			$mensaje=$noticia1['FNMSG'];
		}
		if($error==="1" && $mensaje=="Acceso Concedido"){
			session(['usuario' => $us]);
			session(['tipo' => $error]);
			session(['puesto' => 'V']);
			return redirect()->route('home'); 		
		}
		if($error==="15" && $mensaje=="Acceso Concedido"){
			session(['usuario' => $us]);
			session(['tipo' => $error]);
			session(['puesto' => 'E']);
			return redirect()->route('home'); 
		}
		else{
			session()->flash('status_error', 'Usuario y/o contraseña incorrectos');
			return redirect('/');
		} 
    }
    
    public function home(Request $request){
    	if (session()->has('tipo')) {
    		$tipo = session('tipo');
    		if($tipo==1){
		    	return view('vendedor.layouts.main');
			}
			if($tipo==15){
		    	return view('ventasexpress.layouts.main');
			}
		}
		else{
			return view('login.index');
		}
    }

    public function logout(){
		Auth::logout();
		session()->flush();
		Cache::flush();
		return redirect('/');
    }
}
