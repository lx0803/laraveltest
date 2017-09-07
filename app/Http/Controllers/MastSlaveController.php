<?php   
namespace App\Http\Controllers;  
use Illuminate\Support\Facades\DB;  
class MastSlaveController extends Controller {
	
	
	public function select()  
	{  
		$results = DB::select('select * from test where id = :id', ['id' => 1]);
		var_dump($results);
	}  
	
	public function insert()  
	{  
		DB::insert('insert into test (id, name) values (?, ?)', [3, 'tttttt']);
		
	}  
}