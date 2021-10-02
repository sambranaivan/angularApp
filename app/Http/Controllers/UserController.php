<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class UserController extends Controller
{
    //


    public function detalle(request $request)
    {
        $user = User::find($request->id);
        return response()->json(

            ['user_id'=>$user->id
            ,'name'=>$user->name
        
            ],200
        );

    }

    public function team(request $request)
    {
        $data =  DB::select('call get_team(?)',array($request->id));
        $response = [];
        foreach ($data as $val) 
        {
          
            $response[$val->id]['name'] = $val->name;
            $response[$val->id]['id'] = $val->id;
            if($val->stat == 'tipo')
            {
                $response[$val->id]['tipos'][] = $val->value;
            }
            else
            {
                $response[$val->id][$val->stat] = $val->value;
            }


            
        }
        // return $response;
        // dd($response);
        return response()->json($response,200);



    }


     public function shards(request $request)
    {
        $data =  DB::select('call get_shard(?)',array($request->id));
        // $response = [];
        // foreach ($data as $val) 
        // {
          
        //     $response[$val->id]['name'] = $val->name;
        //     $response[$val->id]['id'] = $val->id;
        //     if($val->stat == 'tipo')
        //     {
        //         $response[$val->id]['tipos'][] = $val->value;
        //     }
        //     else
        //     {
        //         $response[$val->id][$val->stat] = $val->value;
        //     }


            
        // }
        // return $response;
        // dd($response);
        return response()->json($data,200);



    }


}
