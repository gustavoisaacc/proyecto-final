<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function index(){

    	$components = [
            'video-hero',
    		'video',
    		'slider'
    	];

    	return view('components.index', compact('components'));

    }

    public function show($component){
    	return view("components.{$component}");
    }
}

