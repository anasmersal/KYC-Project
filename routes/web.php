<?php

use App\Models\information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('form1');
});

Route::post('/store', function () {
    $dynamicFields = [];
    for ($i = 1; $i <= request('dynamic_field_counter'); $i++) {
        $dynamicFields['field_name_' . $i] = request('dynamic_field_name_' . $i);
        $dynamicFields['field_value_' . $i] = request('dynamic_field_value_' . $i);
    }

    // Debugging: Dump the contents of $dynamicFields
    dd($dynamicFields);

    information::create([
        'name' => request('name'),
        'gender' => request('gender'),
        'date_of_birth' => request('date_of_birth'),
        'marital_status' => request('marital_status'),
        'nationality' => request('nationality'),
        'job_title' => request('job_title'),
        'residency_status' => request('residency_status'),
        'proofOfIdentity' => request('proofOfIdentity'),
        'pan' => request('pan'),
        'city' => request('city'),
        'address' => request('address'),
        'phoneNumber' => request('phoneNumber'),
        'email' => request('email'),
        'dynamic_fields' => json_encode($dynamicFields), // Convert dynamic fields array to JSON
    ]);

    return redirect('/');
});

