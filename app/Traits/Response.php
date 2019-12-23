<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait Response
{
    protected function successResponse($msg, $desc)
    {
        return redirect(url()->previous())->with($msg,$desc);
    }
    protected function errorResponse($msg, $desc)
    {
        return redirect(url()->previous())->with($msg,$desc);
    }
    protected function response($code)
    {
        return response()->json(['success'=>$code]);
    }
    protected function getRandomUserName($len = 7) {
        $word = array_merge(range('0', '9'), range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    public function shortenstring($OString,$Length){
        if (strlen($OString) > $Length)
        {
            $result = (substr(trim($OString), 0, $Length))."...";
        }else{
            $result = $OString;
        }
        return $result;
    }

}