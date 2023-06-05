@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-6" style="text-align: right">
        <a href="{{ url('teacher/add')}}" class="btn btn-primary">Send Message</a>
        <form method="post" action="">
  <div class="mb-3">
    <label>To : </label>
    <input type="email" class="form-control" id="receiver">
  </div>
  <div class="mb-3">
    <label>Subject</label>
    <input type="text" class="form-control" id="subject">
  </div>
  <label>Subject</label>
    <input type="text-area" class="form-control" id="content">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>

      </div><!-- /.container-fluid -->
    </section>

   

@endsection