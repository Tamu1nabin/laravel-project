@extends('admin.header')
@section('title','Admin-show Category')
@section('content-section')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Show Catgory</li>
            </ol>
          </div>
        </div>

<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Category list Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> Category Name</th>
                    <th> Action</th>
                  </tr>

                  @foreach($showcategory as $category)

                  <tr>
                    <td>{{$category->category_name}}</td>
                    
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </section>
          </div>
        </div>
    </section>
</section>



@endsection