<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::available()->recent()->limit(4)->get();
        // dd($properties->first()->sold);

        // /** @var User $user */
        // $user = User::first();
        // $user->password = '0000';
        // $user->syncChanges();
        // dd($user->password, $user);

        return view('home', [
            'properties' => $properties,
        ]);
    }
}
