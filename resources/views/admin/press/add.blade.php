@extends('admin.main')


@section('css')

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">


    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

@endsection


@section('content-header')

    Press

@endsection



@section('content')

<form>
        <!-- Language Select Input -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Language</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>English</option>
                    <option>Japanese</option>
                  </select>
                </div>
              </div>
        <!-- Language Select Input Ends-->


                <!-- Date Picker Starts Here -->
                <div class="col-md-4 form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder=""/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Date Picker Ends Here -->
                </div>


        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Press/Media</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>   



        
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>  




    <!-- Document Upload Input Begins -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="customFile">Document</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <!-- Web Link Input -->
            <div class="form-group">
                <label>Web Link</label>
                <input type="text" class="form-control" placeholder="Enter ...">
            </div>
        </div>
    </div>
    <!-- Document Upload Input Ends -->

    <div class="row text-center">
        <div class="col-sm-12">
            <button class="btn btn-primary bb-submit-btn">Submit</button>
        </div>
    </div>
</form>

@endsection


@section('scripts')


<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

<script>
    
    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    </script>

@endsection