@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-6" style="text-align: right">
              
            <h1>Students</h1>
          </div>
          <div class="col-6" style="text-align: right">
              <a href="{{ url('student/add')}}" class="btn btn-primary">Add New Student</a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">

        <div class="card-body p-0">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>

              
              <div class="card-body p-0">
                <table class="table table-stripted">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created Date</th>
                      <th>Process</th>
                    </tr>
                  </thead>
                  @foreach($getAllStudent as $value)
                  <tr>
                    <td>{{ $value->name}}</td>
                    <td>{{ $value->email}}</td>
                    <td>{{ $value->created_at}}</td>
                    <td>
                    <a href="{{ url('admin/admin/student/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{ url('student/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                    </td></tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
          </div>

        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection