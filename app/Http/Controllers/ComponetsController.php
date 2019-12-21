<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponetsController extends Controller
{
    public function index(){

    	$components = [
    		'viedo',
    		'slider'
    	];

    	return view('components.index', compact($components));

    }

    public function show($component){
    	require view($components.{$component});
    }
}
