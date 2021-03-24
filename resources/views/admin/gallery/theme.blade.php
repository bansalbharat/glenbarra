@extends('admin.main')


@section('css')


@endsection


@section('content-header')

    Add Gallery Theme

@endsection



@section('content')


<!-- Image Upload Input Begins -->
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary bb-btn-submit mb-4">Submit</button>    
<!-- Image Upload Input Ends -->


<div class="card mt-5">
              <div class="card-header">
                <h3 class="card-title">View Theme</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S No</th>
                      <th style="width: 60%">Theme</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td></td>
                      <td class="text-center">
                          <i class="fas fa-edit"></i><br>
                          <i class="fas fa-trash-alt"></i>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

</div>




@endsection


@section('scripts')



@endsection