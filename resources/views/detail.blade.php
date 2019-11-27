@extends('layouts.app')

@section('content')
<div id="eatlog-detail">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 eatlogurl-area">
                <div class="eatlogdata-detail-area">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Shopname') }}</th>
                                <td><a href="{{ $eatlog->eatlogurl }}" target="_blank">{{ $eatlog->shopname }}</a></td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Reserve_tel') }}</th>
                                <td><a href="tel:{{ $eatlog->reserve_tel }}">{{ $eatlog->reserve_tel }}</a></td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Reserve_judgment') }}</th>
                                <td>{{ $eatlog->reserve_judgment }}</td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Address') }}</th>
                                <td><a href="https://maps.google.co.jp/maps/search/{{ $eatlog->address }}" target="_blank">{!! nl2br(e($eatlog->address)) !!}</a></td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Business_hours') }}</th>
                                <td>{!! nl2br(e($eatlog->business_hours)) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Payment_method') }}</th>
                                <td>{!! nl2br(e($eatlog->payment_method)) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Service_charge') }}</th>
                                <td>{!! nl2br(e($eatlog->service_charge)) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Private_room') }}</th>
                                <td>{!! nl2br(e($eatlog->private_room)) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Smoking_judgment') }}</th>
                                <td>{!! nl2br(e($eatlog->smoking_judgment)) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Parking') }}</th>
                                <td>{!! nl2br(e($eatlog->parking)) !!}</td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Hp') }}</th>
                                <td><a href="{{ $eatlog->hp }}" target="_blank">{{ $eatlog->hp }}</a></td>
                            </tr>
                            <tr>
                                <th>{{ config('const.EATLOGS.NAME_LIST.Shoptel') }}</th>
                                <td><a href="tel:{{ $eatlog->shoptel }}">{{ $eatlog->shoptel }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="eatlog-detail-btn-area">
                    <a href="{{ route('list') }}">
                        <button type="button" class="btn-dark eatlog-back">{{ config('const.BACK') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
