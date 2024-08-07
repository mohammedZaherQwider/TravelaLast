<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function form()
    {
        return view('test.form');
    }

    function form_data(Request $request)
    {
        // 2. Validator Class
        //     $valid = Validator::make($request->all(), [
        //             'name' => ['required', 'min:4', 'max:30'],
        //             'email' => 'required|ends_with:@gmail.com',
        //             'phone' => 'required',
        //             'age' => 'required|gt:30',
        //             'message' =>'required'
        //     ]
        //     // ,[
        //     //     'name.required' => ' حقل الاسم مطلووووووووب',
        //     //     'email.required' => 'الايميل مهم ي حبيبي'
        //     // ]
        // );

        //     if($valid->fails()) {
        //         // return response()->json([
        //         //     'status'=>false,
        //         //     'msg'=>'Validation Error!',
        //         //     'errors'=>$valid->messages()
        //         // ]);

        //         return redirect()->back()->withErrors($valid)->withInput();
        //     }


        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|ends_with:gmail.com',
            'phone' => 'required|integer',
            'age' => 'required',
            'message' => 'required',
            'image' => 'required|file ',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $age = $request->age;
        $message = $request->message;
        $imgname = rand() . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);

        return view('test.form_data', compact('name', 'email', 'phone', 'age', 'message'));
    }
}
