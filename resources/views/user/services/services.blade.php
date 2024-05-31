@extends('layouts.userbase')

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
        <div class="container-fluid p-3">
            <h2 class="text-center display-4">Search</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{route('user.searchServices')}}">
                        @csrf
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" name="query">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row w-100" style="justify-content: center; ">
                @foreach($data as $rs)
                <div class="col-md-3 p-3">
                    <div class="card" style="width: 280px;">
                        <img class="card-img-top" src="{{Storage::url($rs->image)}}" alt="Card image cap" style="width: 280px; height: 200px">
                        <div class="card-body">
                            <h4 class="card-title">{{$rs->title}}</h4>
                            <p class="card-description">Category:{{$rs->category}}</p>
                            <p class="card-text">{{substr($rs->description, 0, 25)}}</p>
                            <a href="{{route('user.showService',['id'=>$rs->id])}}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection

