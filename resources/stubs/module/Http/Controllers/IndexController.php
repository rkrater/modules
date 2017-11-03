<?php

namespace DummyNamespace\Responses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DummyNamespace\Responses\IndexResponse;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return new IndexResponse();
    }
}