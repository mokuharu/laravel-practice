@extends('layouts.main')
@section('title', 'Topページ')
@section('content')

<div class="container">
  <div class="row align-items-center">

    @foreach($members as $member)
    <div class="col">
      <div class="shadow card my-3" style="min-width: 360px; max-width:540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$member['profile_img_src']}}" class="img-fluid py-2 px-1 w-100 h-auto" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$member['name']}}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="shadow list-group-item">総罰ゲーム数</li>
              <li class="shadow list-group-item">残罰ゲーム数</li>
              <li class="shadow list-group-item">回避券</li>
            </ul>
            <div class="card-body">
              <a href="#" class="btn btn-outline-primary">Card link</a>
              <a href="#" class="btn btn-outline-primary">Another link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  
  </div>
</div>

@endsection