@extends('layouts.backend.main')

@section('title','Aawaz | Blogs')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blogs
        <small>Display all Blogs</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
                <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive ">
                          <table class="table table-hover">
                            <tbody>
                            <tr>
                              <th width='80'>Action</th>
                              <th>Title</th>
                              <th>Author</th>
                              <th>Categories</th>
                              <th>Date</th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                    <td>
                                        <a href="#">
                                            <div class="btn btn-xs btn-default">
                                                <i class="fa fa-edit" ></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                              <div class="btn btn-xs btn-danger">
                                                  <i class="fa fa-times" ></i>
                                              </div>
                                          </a>
                                    </td>
                                <td>{{$post->title}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->category->title}}</td>
                                    <td>{{$post->published_at}}</td>
                                  </tr>
                            @endforeach
                          </tbody></table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-left">
                             <ul class="pagination pagination-sm no-margin ">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">»</a></li>
                             </ul>                        
                        </div>
                        <div class="pull-right">
                            <small>4 items</small>
                        </div>
                        </div>
                      </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection