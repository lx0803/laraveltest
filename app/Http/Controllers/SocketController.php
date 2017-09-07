<?php   
namespace App\Http\Controllers;  
use Illuminate\Support\Facades\DB;  
class SocketController extends Controller {  
	
	public function send()  
	{  
		return view('send');
		
	}  
}