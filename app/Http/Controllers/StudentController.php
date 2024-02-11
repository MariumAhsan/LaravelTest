<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marks;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        
    }
    public function marksheet()
    {
        $markData = Marks::all(); // Fetch all marks data from the database
        return view('ShowStudentMarksheet', compact('markData'));
    }
    public function input_marks()
    {
        return view('AddStudentMarks');
    }
    public function all_marks()
    {
        return view('gradeCalculator');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
       $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'student_id' => 'required|numeric',
        'evaluation_type' => 'required|string|max:255',
        'achieved_marks' => 'required|numeric',
    ]);

    $markData = [
        'student_id' => $request->student_id,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'evaluation_type' => $request->evaluation_type,
        'achieved_marks' => $request->achieved_marks
    ];
    
    $mark = new Marks;
    $mark->fill($markData);
    $mark->save();
    
    // Redirect back or wherever you want after successful submission
    return redirect()->back()->with('success', 'Marks added successfully!');

    }


    public function filter(Request $request)
    {
    $evaluationType = $request->input('evaluation_type');

    // Fetch marks data based on evaluation type
    $markData = Marks::where('evaluation_type', $evaluationType)->get();

    return view('ShowStudentMarksheet', compact('markData'));
    }

    public function delete(string $id){
        $mark = Marks::find($id); 
        $mark->delete();
        //dd($mark); exit();
        return redirect()->route('marks.view');
        
    }

    public function edit(string $id){
        $mark = Marks::find($id);
       // dd($mark); exit();
       return view('updateMarks', compact('mark'));
    }

    
    public function update(Request $request, string $id){

        $markData = Marks::find($request->id);
        
        $markData->evaluation_type = $request->evaluation_type;
        $markData->achieved_marks = $request->achieved_marks;
        $markData->save();


        return redirect()->route('marks.view');
    }

    public function calculateMarks(Request $request)
    {
        // Retrieve form data
        $classTestMarks = $request->input('classtest_marks');
        $midtermMarks = $request->input('midterm_marks');
        $finalMarks = $request->input('final_marks');
        $projectMarks = $request->input('project_marks');

        // Calculate total marks
        $totalMarks =0.10*(($classTestMarks*100)/20) + 0.25*(($midtermMarks*100)/40) + 0.35*(($finalMarks*100)/40) + 0.30*(($projectMarks*100)/60);

        //Determine Grade+
        $grade = $this->getGrade($totalMarks);

        // Display total marks and grade
        return view('gradeCalculator')->with(['totalMarks' => $totalMarks, 'grade' => $grade]);
    }
    private function getGrade($totalMarks)
    {   
        //Grading conditions

        if ($totalMarks >= 90 && $totalMarks <= 100) {
            return 'A';
        } elseif ($totalMarks >= 85 && $totalMarks <= 89.9) {
            return 'A-';
        } elseif ($totalMarks >= 80 && $totalMarks <= 84.9) {
            return 'B+';
        } elseif ($totalMarks >= 75 && $totalMarks <= 79.9) {
            return 'B';
        } elseif ($totalMarks >= 70 && $totalMarks <= 74.9) {
            return 'B-';
        } elseif ($totalMarks >= 65 && $totalMarks <= 69.9) {
            return 'C+';
        } elseif ($totalMarks >= 60 && $totalMarks <= 64.9) {
            return 'C';
        } elseif ($totalMarks >= 55 && $totalMarks <= 59.9) {
            return 'C-';
        }elseif ($totalMarks >= 50 && $totalMarks <= 54.9) {
            return 'D+';
        }elseif ($totalMarks >= 45 && $totalMarks <= 49.9) {
            return 'D';
        } else {
            return 'F'; 
        }
    }
}
