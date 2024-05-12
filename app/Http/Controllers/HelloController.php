<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // クエリー文字列を取得
    public function index(Request $request)
    {
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $request->id,
        ];
        return view('hello.index', $data);
    }
}
