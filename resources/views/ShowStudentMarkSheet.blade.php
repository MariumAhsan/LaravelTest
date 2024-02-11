<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.app')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('assets/custom.css')}}">

    <title>Student Marksheet</title>
</head>
<body>

    <div class="container">
    <h2>Student Evaluation Marksheet</h2>
   
    <!-- Filtering -->
    <div class="row mb-4">
      <form action="{{ route('marks.filter') }}" method="GET" class="mb-3">
            <div class="input-group">
                <select class="form-select" name="evaluation_type" aria-label="Select Evaluation Type">
                    <option value="">Select Evaluation Type</option>
                    <option value="classtest">Class Test</option>
                    <option value="midterm">Mid Term</option>
                    <option value="final">Final</option>
                    <option value="Project">Project</option>
                </select>
                <button class="btn btn-dark" type="submit">Filter</button>
            </div>
      </form>
    <div>
    
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
          <tr>
            <th scope="col">Student ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Evaluation Type</th>
            <th scope="col">Achieved Marks</th>
            <th scope="col">Edit/Delete</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach($markData as $mark)
                <tr>
                  <td>{{ $mark->Student_id }}</td>
                  <td>{{ $mark->first_name }}</td>
                  <td>{{ $mark->last_name }}</td>
                  <td>{{ $mark->evaluation_type }}</td>
                  <td>{{ $mark->achieved_marks }}</td>
                  <td><a href="{{ route('marks.edit', $mark->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('marks.destroy', $mark->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>