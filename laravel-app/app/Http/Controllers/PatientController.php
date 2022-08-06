<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::paginate(100);
        return response()->json([
            // 'data'=>$patients
            'status' => ([
                'code' => 200,
                'response' => 'success',
            ]),
            'result' => $patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = Patient::create([
            'name' => $request->name,
            'sex' => $request->sex,
            'religion' => $request->religion,
            'phone' => $request->phone,
            'address' => $request->address,
            'nik' => $request->nik
        ]);
        return response()->json([
            'status' => ([
                'code' => 201,
                'response' => 'created',
                'message' => 'Success creating new Patient'
            ]),
            'result' => $patient
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        try {
            return response()->json([
                'status' => ([
                    'code' => 200,
                    'response' => 'successzzz',
                ]),
                'result' => $patient
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->name = $request->name;
        $patient->sex = $request->sex;
        $patient->religion = $request->religion;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->nik = $request->nik;
        $patient->save();

        return response()->json([
            'status' => ([
                'code' => 200,
                'response' => 'success',
                'message' => 'Success updating Patient',
            ]),
            'result' => $patient
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->json([
            'status' => ([
                'code' => 200,
                'response' => 'success',
                'message' => 'Patient deleted successfully',
            ])
        ]);
    }
}
