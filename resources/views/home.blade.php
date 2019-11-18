@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 eatlogurl-area">
            <div><input type="url" name="eatlogurl" class="eatlogurl" placeholder="食べログのURLを入力してください"></div>
            <div><button type="button" class="btn-send">送信</button></div>
        </div>
    </div>
</div>
@endsection
