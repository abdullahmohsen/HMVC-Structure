<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\Backend\Store;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Store $request)
    {
        return view('customers::backend.index');
    }
}
