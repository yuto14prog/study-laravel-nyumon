<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'これはBladeを利用したサンプルです。',
        ];

        // 同じ名前のViewがあっても、Bladeが優先される
        return view('hello.index', $data);
    }
}
