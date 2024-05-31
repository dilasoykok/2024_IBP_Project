@extends('layouts.userbase')

@section('title','Service List')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('user')}}" class="text-decoration-none">Home</a>
                <li class="breadcrumb-item"><a href="{{route('user.service')}}" class="text-decoration-none">Service</a>
                </li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </div>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <aside class="col-lg-4">
                                    <div class="gallery-wrap">
                                        <div class="img-big-wrap img-thumbnail d-block my-auto">
                                            <a href="{{Storage::url($data->image)}}" data-type="image" data-fslightbox="mygallery" target="_blank">
                                                <img class="img1 img-thumbnail d-block" src="{{Storage::url($data->image)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </aside>
                                <main class="col-lg-8">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{$data->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{$data->category}}</td>
                                        </tr>
                                        <tr>
                                            <th>Keyword</th>
                                            <td>{{$data->keyword}}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{$data->description}}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{$data->price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created Date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                    </table>
                                </main>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection

