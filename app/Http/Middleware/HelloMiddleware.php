<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // （コントローラーの前処理）
    public function handle(Request $request, Closure $next)
    {
        $data = [
            ['name' => 'taro', 'mail' => 'taro@yamada'],
            ['name' => 'hanako', 'mail' => 'hanako@flower'],
            ['name' => 'sachiko', 'mail' => 'sachiko@happy'],
        ];

        // フォームのinputなどの値に配列の中身を追加
        $request->merge(['data' => $data]);

        return $next($request);
    }

    // middlewareはレスポンスを返す直前の処理（後処理）もできる
    // public function handle(Request $request, Closure $next)
    // {
    //     $response = $next($request);
    //     // 何かしらの処理

    //     return $response;
    // }
}
