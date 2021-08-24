<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{




    //######### Login Code Start  ###########

    function signin(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4',

        ]);

    if($request->position=='buyer'){
            $user = DB::table('buyers')
        ->where('email',$request->email)
        ->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('LoggedUser', $user->email); 
                return redirect('customerprofile')->with('pos',$request->position);
            }
            else{
            return back()->with('fail','Wrong password');
            }
        }
          
        else{
            return back()->with('fail','Wrong email');
        }

    }

    else if($request->position=='seller'){
        $user = DB::table('sellers')
    ->where('email',$request->email)
    ->first();
    if($user){
        if(Hash::check($request->password, $user->password)){

            $request->session()->put([
                
            'LoggedUser' => $user->id,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
         ]); 

            if($user->type =='0'){

                return redirect('stepone');

                // if(session()->has('LoggedSeller')){
                    
                // return dd(session()->all());
                //}
                
                
            }

            else if($user->type=='1'){
                
                return redirect('steptwo');
                
            }
            else{
                
                return redirect('sellerdash');
            }
            // return redirect('customerprofile')->with('pos',$request->position);
        }
        else{
        return back()->with('fail','Wrong password');
        }
    }
      
    else{
        return back()->with('fail','Wrong email');
    }

}

        

      
        
    }

    //#################### Log in cod End  #####################





    //#################### Log out  #####################

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

    


    //####################  profile  #####################

    function customerprofile(){
        

        if(session()->has('LoggedUser')){

            

            $user = DB::table('buyers')
            ->where('email',session('LoggedUser'))
            ->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];

            return view('customerprofile', $data);


        }
    }






    //####################  Registration Code  #####################


    function create(Request $request){
        
        $request->validate([
            'email'=>'unique:buyers|email'
        ]);


        if($request->position == 'buyer'){

            $query= DB::table('buyers')->insertGetId([
                'name' => $request->username,
                'email' => $request->email,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
    
    
            if($query){
    
                    $request->session()->put('LoggedCustomer', $query);
    
                    return redirect('signup')->with('pass',$request->password);
    
            }
            else {
                return back()->with('fail','Something went wrong!');
            }
    
        }
    

        }



        function signup(){
    
            if(session()->has('LoggedCustomer')){
    
                $user= DB::table('buyers')->where('id',session('LoggedCustomer'))->first(); 
                $data = [
                    'LoggedCustomerInfo'=>$user
                ];
                
            return view('signup', $data);
            }
            
            else {
                return back()->with('fail','Something wrong!');
            }
        
        }



}
