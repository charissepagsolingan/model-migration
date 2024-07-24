<?php

namespace App\Http\Controllers;

use App\Models\Student;
//use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = Student::all();
        return view('students.index',$data);
        //return Student::all();

       // return Student::where('province', 'Wisconsin')
       //     ->where('fname', 'Jettie')
        //    ->get();

       // return Student::where('province', 'Wisconsin')
       // ->orwhere('city', 'Titoside')
        //->orwhere('lname', 'ryan')
       // ->get();

       //return Student::where('fname','like' ,'%a%')->get();
      
       //return Student::orderBy('fname')->get();
       //return Student::orderBy('fname', 'desc')->get();

       //return Student::limit(3)->get();
         
       //return Student::whereIn('id', [1,3,5,7,9,11])->get();

      // return Student::where('province', 'california')->first();

      return Student::with(['grade' => function($query){
        return $query->where('grade', '>=', 90);
      }])->get();



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::find($id); 
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthdate = $request['birthdate'];
        $student->save();

        return redirect()->to('students');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return Student::find($id);

        $student = Student::find($id);
        return $student->fname . '   ' . $student->lname;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $student = Student::find($id); 
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthdate = $request['birthdate'];
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
