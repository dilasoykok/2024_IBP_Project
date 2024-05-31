@extends('layouts.adminbase')

@section('title','Service List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">Service List</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </div>
        <div class="card">
            <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                <a href="{{route('admin.service.create')}}" class="btn btn-primary mb-1"><i class="bi bi-plus-lg"></i> Add service</a>
                <div class="card-tools">
                    <form action="{{route('admin.service.searchService')}}" method="post">
                        @csrf
                        <div class="input-group input-group-md">
                            <input type="text" class="form-control mb-1" placeholder="Search service" name="query">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                        </div>

                    </form>

                </div>
            </div>

            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="table-primary">
                        <th style="width: 20px">id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width: 80px;">Image</th>
                        <th>Price</th>
                        <th style="width: 25px">Edit</th>
                        <th style="width: 25px">Delete</th>
                        <th style="width: 25px">Show</th>
                    </tr>
                    </thead>
                    @foreach($data as $rs)
                        <tbody>
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->category}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->description}}</td>
                            <td style="width: 25px">
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" class="img1 rounded m-0" style="width: 70px; height: 60px" alt="">
                                @endif
                            </td>
                            <td style="width: 25px">{{$rs->price}} $</td>
                            <td style="width: 25px"><a href="{{route('admin.service.edit',['id'=>$rs->id])}}" class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a></td>
                            <td style="width: 25px"><a href="{{route('admin.service.show',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                            <td style="width: 25px"><a href="{{route('admin.service.show',['id'=>$rs->id])}}" class="btn btn-outline-info" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection

