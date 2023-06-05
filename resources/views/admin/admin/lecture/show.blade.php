@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Grades</h1>
          </div>
          <div class="col-sm-12">

          <table class="table">
  <thead>
    <tr>
        
      <th scope="col">Student Name</th>
      <th scope="col">Lecture Name</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$select}}</td>
    </tr>
    @endforeach

    </tbody>
</table>



       
          
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


@endsection