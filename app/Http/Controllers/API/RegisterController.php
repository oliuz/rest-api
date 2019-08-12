<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\TokenApiShipped;

class RegisterController extends Controller
{
    //
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'api_token' => Str::random(60),
        ]);
    }

    protected function responseFails($validator)
    {
        return response(
            [
                'status' => '403',
                'data' => $validator->errors(),
            ],
            403
        );
    }

    protected function responseSuccess($user)
    {
        return response(
            [
                'status' => '200',
                'data' => $user,
            ]
        );
    }


    public function register(Request $request)
    {

        $validator =  $this->validator($request->all());

        if ($validator->fails()) {

            return $this->responseFails($validator);

        }

        $user = $this->create($request->all());

        Mail::to($user->email)->send(new TokenApiShipped($user->api_token));

        return $this->responseSuccess($user);

    }
}
