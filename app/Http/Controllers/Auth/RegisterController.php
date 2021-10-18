<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'fathername' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'notification_number' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'branch' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'product' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer',],
            'price' => ['required', 'integer',],

            'product2' => ['nullable', 'string', 'max:255'],
            'quantity2' => ['nullable', 'integer',],
            'price2' => ['nullable', 'integer',],

            'product3' => ['nullable', 'string', 'max:255'],
            'quantity3' => ['nullable', 'integer',],
            'price3' => ['nullable', 'integer',],

            'product4' => ['nullable', 'string', 'max:255'],
            'quantity4' => ['nullable', 'integer',],
            'price4' => ['nullable', 'integer',],

            'product5' => ['nullable', 'string', 'max:255'],
            'quantity5' => ['nullable', 'integer',],
            'price5' => ['nullable', 'integer',],

            'product6' => ['nullable', 'string', 'max:255'],
            'quantity6' => ['nullable', 'integer',],
            'price6' => ['nullable', 'integer',],

            'product7' => ['nullable', 'string', 'max:255'],
            'quantity7' => ['nullable', 'integer',],
            'price7' => ['nullable', 'integer',],

            'total' => ['nullable', 'integer',],
            'ready' => ['nullable', 'string', 'max:255'],
            'shipped' => ['nullable', 'string', 'max:255'],
            'received' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'fathername' => $data['fathername'],
            'lastname' => $data['lastname'],
            'notification_number' => $data['notification_number'],
            'city' => $data['city'],
            'branch' => $data['branch'],
            'mobile' => $data['mobile'],
            'product' => $data['product'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],

            'product2' => $data['product2'],
            'quantity2' => $data['quantity2'],
            'price2' => $data['price2'],

            'product3' => $data['product3'],
            'quantity3' => $data['quantity3'],
            'price3' => $data['price3'],

            'product4' => $data['product4'],
            'quantity4' => $data['quantity4'],
            'price4' => $data['price4'],

            'product5' => $data['product5'],
            'quantity5' => $data['quantity5'],
            'price5' => $data['price5'],

            'product6' => $data['product6'],
            'quantity6' => $data['quantity6'],
            'price6' => $data['price6'],

            'product7' => $data['product7'],
            'quantity7' => $data['quantity7'],
            'price7' => $data['price7'],


            'total' => $data['total'],
            'ready' => $data['ready'],
            'shipped' => $data['shipped'],
            'received' => $data['received'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
