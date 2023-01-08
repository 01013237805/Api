<?php
namespace App\Trait;

trait ApiR {

    public function ApiR($status='null', $data='null', $msg='null') {

        return response()->json([
            'status'=>$status,
            'date'=>$data,
            'msg'=>$msg
        ]);

    }

}
