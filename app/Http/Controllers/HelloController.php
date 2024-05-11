<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // __invoke()
    // "__"で始まるものはPHPのマジックメソッド
    // __invoke()はクラスのインスタンスを関数的に実行させるもの
    public function __inVoke()
    {
        return <<<EOF
            <html>
                <head>
                    <title>Hello</title>
                    <style>
                        // body { font-size:16pt; color:#999; }
                        // h1 { fonst-size:100pt; text-align:right; color:#eee;
                        //     margin:-40px 0px -50px 0px; }
                    </style>
                </head>
                <body>
                    <h1>Index</h1>
                    <p>HelloControllerはシングルアクション・コントローラです。</p>
                </body>
            </html>
    EOF;
    }
}
