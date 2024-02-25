<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class APIController extends Controller
{
    protected function return_success($request, $data = '', $msg = '')
    {
        $response = $this->xt_build_response(STATUS_OK, $msg, $request->input('key_value'), $data);

        return response()->json($response, 200,[],JSON_UNESCAPED_SLASHES);
    }

    protected function return_file_success($lot_num,$content)
    {
        //$response = $this->xt_build_response(STATUS_OK, $msg, $request->input('key_value'), $data);

        //return response()->attachment($content, $lot_number);
        return response($content, 200)->withHeaders([
            'Content-Type'=> 'text/plain',
            'Content-Disposition'=>'attachment; filename="'.$lot_num.'.zpl"',
            'Lot-Number'=>'"'.$lot_num.'"'
        ]);
    }

    protected function return_error($request, $msg = '', $data = '',$error_code = 400)
    {
        $response = $this->xt_build_response(STATUS_ERROR, $msg, $request->input('key_value'), $data);

        return response()->json($response, $error_code);
    }

    protected function return_access_denied($request, $msg = 'Access denied.', $data = '')
    {
        $response = $this->xt_build_response(STATUS_ERROR, $msg, $request->input('key_value'), $data);

        return response()->json($response, 403);
    }

    protected function return_not_found($request, $msg = 'Not found.')
    {
        $response = $this->xt_build_response(STATUS_ERROR, $msg, $request->input('key_value'));

        return response()->json($response, 404);
    }

    protected function return_fatal($request, $msg = '')
    {
        $response = $this->xt_build_response(STATUS_FATAL, $msg, $request->input('key_value'));

        return response()->json($response, 500);
    }

    private function xt_build_response($status, $msg, $key_value, $data = '')
    {
        return  [   'status' => $status,
            'msg' => $msg,
            'key_value' => $key_value,
            'data' => $data
        ];
    }

    protected function return_formatted_error($request,$error_message,$api_request=false){
        if($api_request=="t"){
            return $this->return_error($request,$error_message);
        } else{
            Session::put('error_message',$error_message);
            return redirect ()->back();
        }
    }

    protected function return_formatted_create_response($request,$id,$msg='',$error_msg='',$api_request=false){
        if($api_request=="t"){
            if(!empty($id)) {
                return $this->return_success($request, ['id'=>$id],$msg);
            } else{
                return $this->return_error($request,$error_msg);
            }
        } else{
            if(!empty($id)){
                return redirect()->back();
            } else{
                Session::put('error_message',$error_msg);
                return redirect ()->back();
            }
        }
    }

    protected function format_error_msg($base_msg,$error_arr){
        $error_msg = $base_msg;
        if(!empty($error_arr)){
            $error_msg .=": ";

            foreach($error_arr as $error){
                //Log::info(print_r($error,true));
                $error_msg.= $error.". ";
            }
        }

        return trim($error_msg);

    }

    protected function json_response_check(Request $request){

        if($request->ajax()){
            return true;
        } elseif($request->wantsJson()){
            return true;
        } elseif ($request->input('api_request')==="t"){
            return true;
        } elseif(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
            return true;
        } else{
            return false;
        }
    }
}