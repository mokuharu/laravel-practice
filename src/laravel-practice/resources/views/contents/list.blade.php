@extends('layouts.main')
@section('title', '罰ゲーム一覧ページ')
@section('content')
<table class="table table-hover bg-light">
  <thead>
    <tr>
      <th class="col">#</th>
      <th class="col">罰ゲーム名</th>
      <th class="col">内容</th>
      <th class="col">期間</th>
      <th class="col">担当メンバー</th>
      <th class="col">ステータス</th>
      <th class="col">動画URL</th>
    </tr>
  </thead>
  <tbody>

    @foreach($all_penalty_games as $penalty_game)
    <tr>
      <th>{{$penalty_game['id']}}</th>
      <td>{{$penalty_game['name']}}</td>
      <td>{{$penalty_game['content']}}</td>
      <td>{{$penalty_game['period']}}</td>
      <td>{{$penalty_game['resposible_member']}}</td>
      <td>{{$penalty_game['status']}}</td>
      <td><a href="{{$penalty_game['video_url']}}" target="_blank" rel="noopener noreferrer">動画のリンク</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection