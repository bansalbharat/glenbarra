@extends('admin.main')


@section('css')

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

@endsection


@section('content-header')

    Add Access & Visit

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
            </div>
        <!-- Language Select Input Ends-->



<!-- Summernote Starts -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Address</label>
                    <textarea id="summernote"></textarea>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
<!-- Summernote Ends -->


<div class="mb-3">

    <label for="">Display Option</label><br>

                  <div class="form-check mb-2 mt-1">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Map</label><br>
                  </div>


                  <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Image</label>
                  </div>


</div>


<div class="row">
        <div class="col-sm-12">
            <!-- text input -->
                    <div class="form-group">
                        <label>Map Url/Embedded Link</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
    </div>



<!-- Image Upload Input Begins -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="customFile">Image   </label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
    </div>    
<!-- Image Upload Input Ends -->


<div class="row">
    <div class="col-md-12 text-center">
        <button class="btn btn-primary bb-btn-submit">Submit</button>
    </div>
</div>

</form>

@endsection


@section('scripts')

<!-- Summernote -->
<script src="{{ asset ('plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- bs-custom-file-input -->
<script src="{{ asset ('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>


<script>
  $(function () {
    // Summernote
    $('#summernote').summernote({
        height: 400
    })
  })

  $(function () {
  bsCustomFileInput.init();
});


</script>




@endsection