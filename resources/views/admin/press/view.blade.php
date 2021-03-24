@extends('admin.main')


@section('css')


@endsection


@section('content-header')

    Press

@endsection



@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">View Press</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S No</th>
                      <th>Date</th>
                      <th>Press/Media</th>
                      <th>Title</th>
                      <th>Doc/Web-Link</th>
                      <th>Language</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>02/07/2020</td>
                      <td>Mumbai Mirror</td>
                      <td>Paintings of his dreams</td>
                      <td>Click Here</td>
                      <td>English</td>
                      <td class="text-center">
                          <i class="fas fa-edit"></i><br>
                          <i class="fas fa-trash-alt"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>11/04/2019</td>
                      <td>Millennium Post</td>
                      <td>Jogen Chowdhury's expressive canvas</td>
                      <td>Click Here</td>
                      <td>English</td>
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