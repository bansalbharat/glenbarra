@extends('admin.main')


@section('css')


@endsection


@section('content-header')

    Gallery

@endsection



@section('content')

<div class="card">
              <div class="card-header">
            <!-- Language Select Input -->
            <span class="">View Gallery</span>

            <div class="row mt-1">

              <div class="col-md-4">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>Museum</option>
                    <option>Test</option>
                  </select>
                </div>
              </div>
            </div>
        <!-- Language Select Input Ends-->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S No,</th>
                      <th>Image</th>
                      <th>Position</th>
                      <th>Row Position</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td>Left</td>
                        <td>1</td>
                        <td><i class="fas fa-trash-alt"></i>
                    </td>
                    </tr>
                   

                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->


              <div class="row">

</div>

</div>

@endsection


@section('scripts')



@endsection