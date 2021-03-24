@extends('admin.main')


@section('css')


@endsection


@section('content-header')

    Publication

@endsection



@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">View Publication</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title/Sub-title</th>
                      <th>Doc/Web-Link</th>
                      <th>Other</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td></td>
                      <td>Title - DRAWINGS: EVOLVING HUMAN FORm<br>
Sub-Title - Works by Ved Nayar from the collection of the Glenbarra Art Museum<br>
Language - English</td>
                      <td>Document -
Link - Test Link 2</td>
                      <td>Catalogue for the exhibition held in New Delhi</td>
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