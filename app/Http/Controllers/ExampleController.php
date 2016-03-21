<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    /**
     * Generate web service php classes
     * @param string $wsdlUrl WSDL URL
     */
    public function index($wsdlUrl)
    {
        $generator = new \Wsdl2PhpGenerator\Generator();
		$generator->generate(
		    new \Wsdl2PhpGenerator\Config(array(
		        'inputFile' => $wsdlUrl,
		        'outputDir' => base_path('webservices')
		    ))
		);
    }

    public function test() {
		// A class will generated representing the service.
		// It is named after the element in the WSDL and has a method for each operation.
    	/*
		$service = new \WebServices();
		$request = new \ConversionRate(\Currency::USD, \Currency::EUR);
		$response = $service->ConversionRate($request);

		echo $response->getConversionRateResult();*/
    }
}
