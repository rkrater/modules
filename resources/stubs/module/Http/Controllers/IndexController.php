<?php

namespace DummyNamespace\Http\Controllers;

use App\Http\Controllers\Controller;
use DummyNamespace\Responses\IndexResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return new IndexResponse();
    }
}