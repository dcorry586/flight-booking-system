<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    // login 

    public function login() {
        
    }

        public function index() {
            return Admin::all();
        }

        public function store(Request $request) {
                    $admin = new Admin;


                    $admin->fname       = $request->input('fname');
                    $admin->address   = $request->input('address');
                    $admin->email   = $request->input('email');
                    $admin->password    = Hash::make($request->password);
                    $admin->mobile  = $request->input('mobile');
                    $admin->lname   = $request->input('lname');
                    $admin->airline_id   = $request->input('airline_id'); // 0
     

                    $admin->save();
        }

        public function update(Request $request, $id) { 
                    $admin = new Admin;

                    $admin->fname       = $request->input('fname');
                    $admin->address   = $request->input('address');
                    $admin->email   = $request->input('email');
                    $admin->password    = Hash::make($request->password);
                    $admin->mobile  = $request->input('mobile');
                    $admin->lname   = $request->input('lname');
                    $admin->airline_id   = $request->input('airline_id'); // 0
     
                    $admin->save();
        }


    public function destroy($id) {
        $admin = Admin::find($id);
            $admin->delete();
    }

}
