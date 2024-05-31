@extends('layouts.userbase')

@section('title','Service List')


@section('content')
    <div class="content-wrapper justify-center">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">Mesajlar</h2>
        </div>

        <div class="" style="background-color: lightblue;  width: 550px;  height: 700px; overflow: auto;">
            <div class="row m-2" style="justify-content: center">
                @foreach($data as $rs)

                    <div class="justify-content-center" style="justify-content: flex-start; background: cornsilk">
                        <div>==========={{$rs->created_at}}==========</div>
                        <div class="justify-content-center">
                            <h4>{{$rs->sender->name}} : ({{$rs->sender->role}})</h4>
                            <p>{{$rs->giden_message}}</p>
                        </div>
                    </div>
                    <div class="justify-content-center" style="justify-content: flex-start; background: cornsilk">
                        <div class="justify-content-center">
                            @if($rs->receiver && $rs->receiver->name)
                                <h4>{{$rs->receiver->name}} : ({{$rs->receiver->role}})</h4>
                                <p>{{$rs->gelen_message}}</p>
                            @else
                                Cevap bekleniyor...
                            @endif
                        </div>
                    </div>
                    <div>========================================</div>
                @endforeach
            </div>

        </div>
        <div style="background-color: lightblue;  width: 550px;">
            <form action="{{route('user.messageStore')}}">
                @csrf
                <div class="input-group">
                    <input type="search" class="form-control form-control-lg my-sm-1" placeholder="Enter your message"
                           name="sendedMessage">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success pt-4 my-sm-0" type="submit">Gönder
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- partial -->
@endsection

