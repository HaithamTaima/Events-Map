<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{

    public function home_all_details()
    {
       $user_id =Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        $buildings_query = DB::table('buildings')
            ->select('buildings.id','building_no','street_no','floors_count','latitude','longitude',
                'citizen_name','event_name','event_count','event_category','created_at','updated')
//             ->where('citizen_name','like','%محمد%')
//            ->where('buildings.street_no','=',1630)
//            ->where('floors_count','>',2)
            ->get();

        return view('pages.home',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'buildings_query'=>$buildings_query
            ]);
    }
    public function add_event()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        return view('pages.add-events',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email
            ]);
    }


    public function view_event()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        $buildings_query = DB::table('buildings')
            ->select('buildings.id','building_no','street_no','floors_count','latitude','longitude',
                'citizen_name','event_name','event_count','event_category','created_at','updated')
//             ->where('citizen_name','like','%محمد%')
//            ->where('buildings.street_no','=',1630)
//            ->where('floors_count','>',2)
            ->get();

        return view('pages.view-events',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'buildings_query'=>$buildings_query
            ]);
    }

    public function view()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        return view('pages.view',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email
            ]);
    }

    public function add_event_details()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        $buildings_query = DB::table('buildings')
            ->leftJoin('citizens', 'buildings.id', '=', 'citizens.building_id')
            ->select('buildings.*', 'citizens.resident_name', 'citizens.citizen_status', 'citizens.floor')
            ->get();

        return view('pages.add-events-details',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'buildings_query'=>$buildings_query
            ]);
    }

    public function view_event_details()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;


        $buildings_query = DB::table('citizens')
            ->join('buildings', 'citizens.building_id', '=', 'buildings.id')
            ->select('citizens.id', 'citizens.building_id', 'citizens.resident_name', 'citizens.citizen_status', 'citizens.floor', 'buildings.latitude', 'buildings.longitude', 'buildings.event_category', 'buildings.event_name','buildings.citizen_name')
            ->get();




        return view('pages.view-events-details',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'buildings_query'=>$buildings_query
            ]);
    }




}
