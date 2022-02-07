@extends('layouts.main')
@section('title', '新規登録ページ')
@section('content')
<form class="needs-validation" action="/create/confirm" method="post" novalidate>
  @csrf
  <div class="mb-3 mx-5">
    <label for="penalty_name" class="form-label text-light">罰ゲーム名</label>
    <input type="text" class="form-control" id="penalty_name" name="penalty_name" placeholder="罰ゲーム名" required>
    <div class="invalid-feedback">
      入力してください
    </div>
    <div class="valid-feedback">
      OK！
    </div>
  </div>

  <div class="mb-3 mx-5 ">
    <label for="penalty_content" class="form-label text-light">罰ゲーム内容</label>
    <input type="text" class="form-control" id="penalty_content" name="penalty_content" placeholder="罰ゲーム内容" required>
    <div class="invalid-feedback">
      入力してください
    </div>
    <div class="valid-feedback">
      OK！
    </div>
  </div>

  <div class="mb-3 mx-5 ">
    <label for="period" class="form-label text-light">期間</label>
    <input type="text" class="form-control" id="period" name="period" placeholder="期間" required>
    <div class="invalid-feedback">
      入力してください
    </div>
    <div class="valid-feedback">
      OK！
    </div>
  </div>


  <div class="mb-3 mx-5 ">
    <label for="resposible_member" class="form-label text-light">担当メンバー</label>
    <select class="form-select" id="resposible_member" name="resposible_member" aria-label="Default select example" required>

      <option value="てつや" selected>てつや</option>
      <option value="しばゆー">しばゆー</option>
      <option value="りょう">りょう</option>
      <option value="としみつ">としみつ</option>
      <option value="ゆめまる">ゆめまる</option>
      <option value="虫眼鏡">虫眼鏡</option>
    </select>
    <div class="valid-feedback">
      OK！
    </div>
  </div>

  <div class="mb-3 mx-5 ">
    <label for="status" class="form-label text-light">ステータス</label>
    <select class="form-select" name="status" id="status" required>

      <option value="未着手" selected>未着手</option>
      <option value="着手中・実施中">着手中・実施中</option>
      <option value="完了">完了</option>
    </select>
    <div class="valid-feedback">
      OK！
    </div>
  </div>

  <div class="mb-3 mx-5 ">
    <label for="video_name" class="form-label text-light">動画URL</label>
    <input type="text" class="form-control" id="video_name" name="video_url" placeholder="動画URL" required>
    <div class="invalid-feedback">
      入力してください
    </div>
    <div class="valid-feedback">
      OK！
    </div>
  </div>

  <div class="mb-3 mx-5">
    <input type="submit" class="btn btn-primary" value="送信">
  </div>
</form>

@endsection