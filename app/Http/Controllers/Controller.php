<?php

namespace App\Http\Controllers;

use App\Calculator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function result()
    {
        $operator = $_GET['operator'];
        if($operator == "*")
            return Calculator::multiplication($_GET['num1'],$_GET['num2']);
        else
            return Calculator::addition($_GET['num1'],$_GET['num2']);
    }
}
