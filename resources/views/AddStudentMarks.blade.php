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
    <title>Add Student Marks</title>
</head>
<body>
    <section class="container my-2 w-60 p-2" style="height: 440px;">
        <h2>Input Student's Marks</h2>
        <div class="text-left">
            <form action="{{route('marks.store')}}" method="POST">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-6">
                        <fieldset>
                            <label>First Name</label>
                            <input type="text" id="first-name" name="first_name" class="form-control" required>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <label>Last Name</label>
                            <input type="text" id="last-name" name="last_name" class="form-control" required>
                        </fieldset>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <fieldset>
                            <label>Student ID</label>
                            <input type="number" id="student-id" name="student_id" class="form-control" required>
                        </fieldset>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <fieldset>
                            <label>Evaluation Type</label>
                            <select id="evaluation-type" name="evaluation_type" class="form-select" aria-label="Select Evaluation Type">
                                <option value="">Select Evaluation Type</option>
                                <option value="classtest">Class Test</option>
                                <option value="midterm">Mid Term</option>
                                <option value="final">Final</option>
                                <option value="Project">Project</option>
                            </select>
                        </fieldset>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <fieldset>
                            <label>Achieved Marks</label>
                            <input type="number" id="marks" class="form-control" name="achieved_marks" required>
                        </fieldset>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Input Marks</button>
            </form>
        </div>
    </section>
</body>
</html>
