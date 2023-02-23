<?php

namespace App\Http\Controllers\medicool\backend\doctors;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('medicool.backend.common_pages.register');
    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);



        if ($request->file('documents')){
            foreach($request->file('documents') as $file){
                $name = $file->getClientOriginalName();
                $file->move(public_path(). '/documents/'.str_replace(' ', '',$request->name) . '/' , $name);
                $data[] = $name;
            }
            $user->documents = json_encode($data);
        };
        $user->save();
        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('doctor.dashboard');
    }
}
