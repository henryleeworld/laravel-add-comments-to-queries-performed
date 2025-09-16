<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Spatie\SqlCommenter\SqlCommenter;

class UsersController extends Controller 
{
    /**
     * Display the specified resource.
     */
    public function show() 
    {
        SqlCommenter::enable();
        app(SqlCommenter::class)->addComment('verified_by', 'Henry');
        DB::enableQueryLog();
        User::where('name', __('Taiwan number one'))->first();
        SqlCommenter::disable();
        dd(DB::getQueryLog());
    }
}
