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

    public function save($id, $name)
    {
        $record = Person::find($id);
        $record->name = $name;
        $record->save();
        return redirect()->route('hello');
    }

    public function other()
    {

        $person = new Person();
        $person->all_data = ['aaa', 'bbb@ccc', 1234]; // ダミーデータ
        $person->save();

        return redirect()->route('hello');
    }

    public function json($id = -1)
    {
        if ($id == -1) {
            return Person::get()->toJson();
        } else {
            return Person::find($id)->toJson();
        }
    }
}
