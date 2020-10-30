<?php

namespace Customers\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\Frontend\Store;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Store $request)
    {
        return view('customers::frontend.index');
    }
}
