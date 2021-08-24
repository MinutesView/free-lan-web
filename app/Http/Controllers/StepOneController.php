<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\seller;
use App\Models\servicePhoto;
//  include hash path for hashing password
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class StepOneController extends Controller
{

    //************** Step One start ****************

    function stepOneController(Request $request)
    {
        $value = '0';

        //   return dd(session()->all());

        $request->validate([

            'profilePic' => 'required',
            'bio' => 'required',
            'gender' => 'required',
            'category' => 'required',
            'experience' => 'required',
        ]);

        if (session()->has('id')) {
            $value = $request->session()->get('id');
            // $values = 'what';
            // return dd(session()->all());
            // return $value;
        } else {
            return redirect('login');
        }

        if ($request->hasFile('profilePic')) {

            $avatar = $request->file('profilePic');
            $avt = time() . '.' . $avatar->getClientOriginalExtension();
            $location = public_path('images/avatars/' . $avt);
            Image::make($avatar)->save($location);
        }
        $query = DB::table('step_ones')->insertGetId([

            'sellerId' => $value,
            'profilePic' =>  $avt,
            'bio' => $request->bio,
            'gender' => $request->gender,
            'category' => $request->category,
            'experience' => $request->experience,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        if ($query) {
            $seller = seller::where('id', '=', $value)->first();
            $seller->type = '1';
            $seller->save();

            return redirect('steptwo');
        } else {
            return redirect('/');;
        }
    }

    //************** Step Two start ****************

    function stepTwoController(Request $request)
    {
        $value = '0';

        //   return dd(session()->all());

        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'delivery' => 'required',
            'revision' => 'required',
            'file' => 'required',
        ]);
        if (session()->has('id')) {
            $value = $request->session()->get('id');
            // $values = 'what';
            // return dd(session()->all());
            // return $value;

            $seller = seller::where('id', '=', $value)->first();
            $seller->type = $seller->type + 1;
            $seller->save();



            $query = DB::table('services')->insertGetId([

                'sellerId' => $value,
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'deliveryTime' => $request->delivery,
                'revision' => $request->revision,
                'file' => $request->file,
                'keyword' => $request->keyword,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);


            if (count($request->servicePhoto) > 0) {
                foreach ($request->servicePhoto as $service) {
                    $srv = time() . '.' . $service->getClientOriginalExtension();
                    $location = public_path('images/services/' . $srv);
                    Image::make($service)->save($location);

                    $servicePhoto = new servicePhoto;
                    $servicePhoto->serviceId = $query;
                    $servicePhoto->servicePhoto = $srv;
                    $servicePhoto->save();
                }
            }
        }
        if (!session()->has('id')) { 
            return redirect('login');
        }
    }
}
