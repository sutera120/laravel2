<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
// use App\MyClasses\MyService;
use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;
use App\Person;
use App\Http\Pagination\MyPaginator;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    function __construct()
    {
    }


    public function index(Request $request)
    {
        $msg = 'show people record.';
        $re = Person::get();
        $fields = Person::get()->fields();

        $data = [
            'msg' => implode(', ', $fields),
            'data' => $re,
        ];
        return view('hello.index', $data);
    }
}
