@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{ route ('storeQuestion')}} " method="post">
    @csrf
    <h2>Add Question</h2>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" placeholder="Your Question Here" name="title" id="title">
        </div>
      </div>
      <!--  col-md-6   -->


      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="text" class="form-control" placeholder="" name="description" id="description"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tags" name="tags" placeholder="tags">
        </div>
      </div>

    </div>
    <!--  row   -->

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection