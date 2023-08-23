@extends('layouts.app')
@section('title', 'Item List')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      <button type="button" class="btn btn-primary btn-lg">Add Category</button>
    </div>
    <div class="col-sm">
      <button type="button" class="btn btn-primary btn-lg">Add Item</button>
    </div>
    <div class="col-sm">
      <button type="button" class="btn btn-primary btn-lg">Sort Category</button>
    </div>
    <div class="col-sm">
      <div class="form-group">
        <select class="form-control" id="exampleFormSelect1">
          <option selected>Sort By</option>
          <option value="1">その1</option>
          <option value="2">その2</option>
          <option value="3">その3</option>
        </select>
      </div>
    </div>
  </div>
</div>

@endsection