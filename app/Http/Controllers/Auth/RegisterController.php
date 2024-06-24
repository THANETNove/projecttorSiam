<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Address;
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
    protected $redirectTo = '/home';

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
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:255'],
            'address_1' => ['required', 'string', 'max:255'],
            'state_city' => ['required', 'string', 'max:255'],
            'postal_zip' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
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
        /* return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'status' => "0",
            'password' => Hash::make($data['password']),
        ]);


        return Address::create([
            'user_id' => User->id,
            'phone' => $data['phone'],
            'fax' => $data['fax'],
            'company' => $data['company'],
            'address_1' => $data['address_1'],
            'address_2' => $data['address_2'],
            'state_city' => $data['state_city'],
            'postal_zip' => $data['postal_zip'],
            'country' => $data['country'],
            'region' => $data['region'],
           
            
        ]);
 */

                // Create the user
        $user = User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'status' => "0",
            'password' => Hash::make($data['password']),
        ]);

        // Create the address associated with the user
        $address = Address::create([
            'user_id' => $user->id,
            'phone' => $data['phone'],
            'fax' => $data['fax'],
            'company' => $data['company'],
            'address_1' => $data['address_1'],
            'address_2' => $data['address_2'],
            'state_city' => $data['state_city'],
            'postal_zip' => $data['postal_zip'],
            'country' => $data['country'],
            'region' => $data['region'],
        ]);

        // Return both the user and address
        return $user;


    }
}