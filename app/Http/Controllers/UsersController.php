<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Spatie\SqlCommenter\SqlCommenter;

class UsersController extends Controller 
{
    public function show() 
    {
        SqlCommenter::enable();
        app(SqlCommenter::class)->addComment('verified_by', 'henry');
        DB::enableQueryLog();
        User::where('name', 'Taiwan number one')->first();
        SqlCommenter::disable();
        dd(DB::getQueryLog());
    }
}
