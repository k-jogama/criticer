@extends('layouts.app')

@section('content')
<div id="eatlog-edit">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 eatlogurl-area">
                <div class="eatlogdata-edit-area">
                    <form action="{{ route('edit') }}" method="POST" class="edit-form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>店舗名：</label>
                            <input type="text" class="form-control shopname" name="shopname" value="{{ $eatlog->shopname }}">
                        </div>
                        <div class="form-group">
                            <label>予約・お問い合わせ：</label>
                            <input type="tel" class="form-control reserve_tel" name="reserve_tel" value="{{ $eatlog->reserve_tel }}">
                        </div>
                        <div class="form-group">
                            <label>予約可否：</label>
                            <textarea class="form-control reserve_judgment" name="reserve_judgment">{{ $eatlog->reserve_judgment }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>住所：</label>
                            <input type="text" class="form-control address" name="address" value="{{ $eatlog->address }}">
                        </div>
                        <div class="form-group">
                            <label>営業時間：</label>
                            <textarea class="form-control business_hours" name="business_hours" rows="3">{{ $eatlog->business_hours }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>支払方法：</label>
                            <textarea class="form-control payment_method" name="payment_method">{{ $eatlog->payment_method }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>サービス料・チャージ：</label>
                            <textarea class="form-control service_charge" name="service_charge">{{ $eatlog->service_charge }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>個室：</label>
                            <textarea class="form-control private_room" name="private_room">{{ $eatlog->private_room }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>喫煙可否：</label>
                            <textarea class="form-control smoking_judgment" name="smoking_judgment">{{ $eatlog->smoking_judgment }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>駐車場：</label>
                            <textarea class="form-control parking" name="parking">{{ $eatlog->parking }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>ホームページ：</label>
                            <input type="url" class="form-control hp" name="hp" value="{{ $eatlog->hp }}">
                        </div>
                        <div class="form-group">
                            <label>店舗電話番号：</label>
                            <input type="tel" class="form-control shoptel" name="shoptel" value="{{ $eatlog->shoptel }}">
                        </div>
                        <input type="hidden" name="id" value="{{ $eatlog->id }}">
                        <input type="hidden" name="score" value="{{ $eatlog->score }}">
                        <input type="hidden" name="eatlogurl" value="{{ $eatlog->eatlogurl }}">
                        <input type="hidden" name="img" value="{{ $eatlog->img }}">
                    </form>
                </div>
                <div class="eatlog-edit-btn-area">
                    <button type="button" class="btn-save eatlog-save">{{ config('const.SAVE') }}</button>
                    <a href="{{ action('EditController@delete', $eatlog->id) }}">
                        <button type="button" class="btn-danger eatlog-delete">{{ config('const.DELETE') }}</button>
                    </a>
                    <a href="{{ route('list') }}">
                        <button type="button" class="btn-dark eatlog-back">{{ config('const.BACK') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
