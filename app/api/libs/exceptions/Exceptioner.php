<?php


namespace app\api\libs\exceptions;


use app\ExceptionHandle;
use think\Response;
use Throwable;

class Exceptioner extends  ExceptionHandle
{
    public function render($request, Throwable $e): Response
    {
        return parent::render($request, $e); // TODO: Change the autogenerated stub
    }
}