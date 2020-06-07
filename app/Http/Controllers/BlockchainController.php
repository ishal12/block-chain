<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Eth;


class BlockchainController extends Controller
{
    public function index()
    {
    	return view('welcome', [
    		'provider' => new Web3(new HttpProvider(new HttpRequestManager('http://localhost:7545'))),
    	]);
    }
}
