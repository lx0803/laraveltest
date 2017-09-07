<?php   
namespace App\Http\Controllers;  
use Illuminate\Support\Facades\DB;  
class FaceController extends Controller {  
	
	public function face()  
	{  
		$image_url="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1503638090753&di=5eca67854f2285384fecc65f989427bf&imgtype=0&src=http%3A%2F%2Fimg.taopic.com%2Fuploads%2Fallimg%2F140401%2F318753-14040115115239.jpg";
		$url = "https://api-cn.faceplusplus.com/facepp/v3/detect";
		$post_data = array("api_key"=>"Mk7e7QaIMW-nfMkmthp0b7P1QIzBOvnS","api_secret"=>"gxUgWsSK5vrGyFZAKkbRBc0uv9GkRwTN","image_url"=>$image_url,"return_landmark"=>1,"return_attributes"=>"none");
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt ( $ch, CURLOPT_URL, $url );//地址
		curl_setopt ( $ch, CURLOPT_POST, 1 );//请求方式为post
		curl_setopt ( $ch, CURLOPT_HEADER, 0 );//不打印header信息
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );//返回结果转成字符串
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );//post传输的数据。
		$return = curl_exec ( $ch );
		print_r($return);
		
	}  
}