@extends('admin.main')


@section('css')


@endsection


@section('content-header')

    Publication

@endsection



@section('content')

<div class="card">
              <div class="card-header">
            <!-- Language Select Input -->
            <span class="">Re-arrange Publication</span>

            <div class="row mt-1">

              <div class="col-md-4">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>English</option>
                    <option>Japanese</option>
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
                      <th>Title</th>
                      <th>Sub-title</th>
                      <th>Display Order</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Drawings: Evolving Human Form</td>
                        <td>Works By: Nayyar from the collection of the Glenbarra Art Museum</td>
                        <td>2</td>
                    </tr>

                    
                  </tbody>
                </table>
        <button class="btn btn-primary mt-4">Submit</button>
              </div>
              <!-- /.card-body -->


              <div class="row">

</div>

</div>

@endsection


@section('scripts')



@endsection