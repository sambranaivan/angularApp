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
    
        return response()->json($data,200);

    }
    
    public function region_progress(request $request)
    {
        $data =  DB::select('call get_region_progress(?)',array($request->id));
    
        return response()->json($data,200);

    }
        public function city_progress(request $request)
    {
        $data =  DB::select('call get_city_progress(?,?)',array($request->id,$request->region_id));
    
        return response()->json($data,200);

    }

    // public function progress($)
    // {




    //     ///expected
    //     /**
    //      * [
    //      *      region:[
    //      *          ]
    //      * ]
    //      */
    // }


}
