<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function store(Request $request)
    {

    //print_r($request->input());
    $result=DB::insert("insert into test(name,email) values(?,?)",[$request->input('name'),$request->input('email')]);
    echo $result;
    }
}
?>

