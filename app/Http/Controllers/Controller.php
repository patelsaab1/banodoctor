<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function activity_history($user_id,$user_action)
    {
        DB::table('activity_table')->insert(['user_id'=>$user_id,
          'action_activity'=>$user_action,
          'updated_at'=>now()
          ]);
    }
}
