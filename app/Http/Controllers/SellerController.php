<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//  include hash path for hashing password
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class SellerController extends Controller
{
    
    
    //************** Register code start ****************


    function createSeller(Request $request){
        
        $request->validate([
            
            'username'=>'required',
            'email'=>'unique:sellers|email',
            'address'=>'required',
            'country'=>'required',
            'password'=>'required|min:4',
        ]);

        $query= DB::table('sellers')->insertGetId([
                'name' => $request->username,
                'email' => $request->email,
                'address' => $request->address,
                'country' => $request->country,
                'password' => Hash::make($request->password),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        ]);

        if($query){
            
                
                 //$request->session()->put('LoggedSeller', $query);

                
                // return redirect('signup')->with('pass',$request->password);

                return redirect('login');


                //  $request->session()->put('LoggedCustomer', $user->customerCode);
                //  return redirect('signup')->with('pass',$request->password);
                
            // }
            // else {
            //     return back()->with('fail','ID not found');
            // }



        }
        else {
            return back()->with('fail','Something went wrong!');
        }

    }



    
    public function details(){
        return view('seller_main.details');
    }


    public function dashsell(){
        return view('seller_main.dashsell');
    }

}
