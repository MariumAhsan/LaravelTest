<!doctype html>
<html lang="en">
<head>
    @extends('layouts.app')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/custom.css')}}">
    <title>Student Overall Marks</title>
</head>
<body>
    <section class="container my-2 w-60 p-2" style="height: 520px;">
        <h2>Student's Overall Marks</h2>
        <div class="text-left">
            <form action="{{ route('calculate.marks') }}" method="POST">
                @csrf
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <fieldset>
                            <label>First Name</label>
                            <input type="text" id="first-name" name="first_name" class="form-control" value="" required>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <label>Last Name</label>
                            <input type="text" id="last-name" name="last_name" class="form-control" value="" required>
                        </fieldset>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <fieldset>
                            <label>Student ID</label>
                            <input type="number" id="student-id" name="student_id" class="form-control" value="" required>
                        </fieldset>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <fieldset>
                            <label>Class Test</label>
                            <input type="number" id="test-marks" class="form-control" name="classtest_marks" required>
                        </fieldset>
                    </div>

                    <div class="col-md-6">
                        <fieldset>
                            <label>Midterm</label>
                            <input type="number" id="mid-marks" class="form-control" name="midterm_marks" required>
                        </fieldset>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <fieldset>
                            <label>Final</label>
                            <input type="number" id="final-marks" class="form-control" name="final_marks" required>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <label>Project</label>
                            <input type="number" id="project-marks" class="form-control" name="project_marks" required>
                        </fieldset>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h6>Total Marks: {{$totalMarks ?? ''}}</h6>
                        <h6>Grade: {{$grade ?? ''}}</h6>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Calculate Marks</button>    
            </form>
        </div>
    </section>
</body>
</html>
