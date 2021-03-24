@extends('admin.main')


@section('css')


@endsection


@section('content-header')

    Add Gallery

@endsection



@section('content')



        <!-- Gallery Type Select Input -->
        <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>Museum</option>
                    <option>Test</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 text-right">
                  <a href="#">Add new type  </a>
              </div>
            </div>
        <!-- Gallery Type Select Input Ends-->



<!-- Image Upload Input Begins -->
<div class="row mt-4">
        <div class="col-sm-4">
            <div class="form-group">
            <label>Upload Images</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary bb-btn-submit mb-4">Submit</button>    
<!-- Image Upload Input Ends -->

@endsection


@section('scripts')



@endsection