<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use PHPJasper\PHPJasper;

class ReportController extends BaseController
{
    public function index() 
    {
        return 'Hello from Report Controller';
    }

    public function printReport() 
    { 
        $uniqueDate = date("ymdHis");
        $input = base_path() . '/vendor/geekcom/phpjasper/examples/hello_world.jasper';  
        $output = base_path() . '/vendor/geekcom/phpjasper/examples/';    
        $options = [ 
            'format' => ['pdf'] 
        ];
        
        $jasper = new PHPJasper;
        
        $execute = $jasper->process(
            $input,
            $output,
            $options
        )->execute(); 
    }
}