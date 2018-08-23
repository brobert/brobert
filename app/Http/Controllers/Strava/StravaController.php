<?php

namespace App\Http\Controllers\Strava;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\StravaResource;

use Log;

class StravaController extends Controller
{
    protected $resource;
    
    public function __construct() {
        $this->resource = new StravaResource();
    }
    
    public function index(Request $request) {
        
        $user = $this->resource->getUserInfo();
        dd($user);
        return view('strava/index', compact($user));
    }
}
