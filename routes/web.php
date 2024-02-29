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
    return view('form');
});

Route::post('/store', function (Request $request) {
    // Retrieve the dynamic_field_counter value from the request
    $dynamicFieldCounter = $request->input('dynamic_field_counter');

    $dynamicFields = [];
    for ($i = 1; $i <= $dynamicFieldCounter; $i++) {
        // Retrieve the value of dynamic_field_name_${fieldCounter}
        $fieldName = $request->input("dynamic_field_name_$i");
        $fieldValue = $request->input("dynamic_field_value_$i");
    
        // Add to array if field name is not empty
        if (!empty($fieldName)) {
            // Assign the field value to the dynamic field name
            $dynamicFields[$fieldName] = $fieldValue;
        }
    }
    

    // Convert dynamic fields to JSON
    $dynamicFieldsJson = json_encode($dynamicFields);

    // Store the form data in the database
    information::create([
        'name' => $request->input('name'),
        'gender' => $request->input('gender'),
        'date_of_birth' => $request->input('date_of_birth'),
        'marital_status' => $request->input('marital_status'),
        'nationality' => $request->input('nationality'),
        'job_title' => $request->input('job_title'),
        'residency_status' => $request->input('residency_status'),
        'proofOfIdentity' => $request->input('proofOfIdentity'),
        'pan' => $request->input('pan'),
        'city' => $request->input('city'),
        'address' => $request->input('address'),
        'phoneNumber' => $request->input('phoneNumber'),
        'email' => $request->input('email'),
        'dynamic_fields' => $dynamicFieldsJson,
    ]);

    return redirect('/show');
});

Route::get('/show', function () {
    // Retrieve data from the database
    $informations = Information::all();
    
    // Pass the data to the view and return the view
    return view('show', ['informations' => $informations]);
});