<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateWsdlController extends Controller
{
    /**
     * Generate web service php classes
     */
    public function index(Request $request)
    {
    	$wsdlUrl = $request->input('wsdlUrl');
    	$namespace = $request->input('namespace');
        $generator = new \Wsdl2PhpGenerator\Generator();
		$generator->generate(
		    new \Wsdl2PhpGenerator\Config(array(
		        'inputFile' => $wsdlUrl,
		        'outputDir' => base_path('webservices'),
		        'namespaceName' => $namespace
		    ))
		);
    }
}
