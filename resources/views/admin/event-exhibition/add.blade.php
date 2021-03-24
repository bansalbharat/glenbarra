@extends('admin.main')


@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

@endsection


@section('content-header')

    Events & Exhibitions

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


        <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                    <label>Year</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>




        <!-- Category Select Input -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>None</option>
                    <option>Current</option>
                    <option>Upcoming</option>
                  </select>
                </div>
              </div>
        <!-- Category Select Input Ends-->


                </div>

        <div class="row">

        <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>

            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Sub-title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>






        <h3 class="mt-5 ">Add Venues</h3>

        <div class="row">

        <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>City/Country</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>

            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Venue</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>


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
                <!-- text input -->
                <div class="form-group">
                    <label>Document Title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>



        <div class="row">

    <div class="col-sm-6">
        <!-- text input -->
        <div class="form-group">
            <label>Date</label>
            <input type="text" class="form-control" placeholder="Enter ...">
        </div>
    </div>

    <div class="col-sm-6">
        <!-- text input -->
        <div class="col-sm-4">
                <div class="form-group">
                  <label>Display Order</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
        </div>
    </div>
</div>

<div class="row">
    <button class="btn btn-primary bb-btn-submit ml-auto">Add more venue</button>
</div>


    <div class="row">
        <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Additional info</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
        </div>
    </div>


        <div class="row">            
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="customFile">Document Upload</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary bb-btn-submit" style="margin-top: 32px;">Upload</button>
            </div>
        </div>

            <!-- Summernote Starts -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="summernote"></textarea>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
            <!-- Summernote Ends -->


        <h3 class="mt-5">Upload Images</h3><hr>
        <div class="row">            
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="customFile">Document Upload</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Upload</button>






    <div>
        <h3 class="mt-5 ">Upload Documents</h3><hr>
        <div class="row">            
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="customFile">Document Upload</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Documnet title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Web-link</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Web-link title</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>

    </div>



    <button class="btn btn-primary">Upload</button>




    <div class="row text-center">
        <div class="col-sm-12">
            <button class="btn btn-primary bb-submit-btn">Submit</button>
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
        height: 300
    })
  })

  $(function () {
  bsCustomFileInput.init();
});


</script>




@endsection