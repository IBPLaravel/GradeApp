@extends('layouts.app')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('_message')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
    @include('admin/announcement/add')
    <hr>
    <h3>Anouncements</h3>
    

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection