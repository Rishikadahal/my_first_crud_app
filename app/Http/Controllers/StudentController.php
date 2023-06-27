<?php
  
namespace App\Http\Controllers;
   
use App\Models\Student;
use Illuminate\Http\Request;
  

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $i=1;
        return view('students.index',compact('students','i'));
    }
     
    public function create()
    {
        return view('students.create');
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'studname' => 'required',
            'course' => 'required',
            'fee' => 'required',
        ]);
    
        Student::create($request->all());
     
        return redirect('/')
             ->with('success','Students created successfully.');
    }
     

    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    } 
     

    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.edit',compact('student'));
    }
    
    public function update(Request $request,$id)
    {
        
        $student = Student::find($id); 
        $student->update($request->all());
    
        return redirect('/')
             ->with('success','Student updated successfully');
    }
    
    
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
    
        return redirect('/')
             ->with('success','Student deleted successfully');
    }
}