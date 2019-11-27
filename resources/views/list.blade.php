@extends('layouts.app')

@section('content')
<div id="eatlog-list">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 eatlogurl-area">
                <div class="eatlogdata-list-area">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="item-s">{{ config('const.EATLOGS.NAME_LIST.Shopname') }}</th>
                                <th class="item-s">{{ config('const.SCORE') }}</th>
                                <th class="item-m">{{ config('const.EATLOGS.NAME_LIST.Reserve_tel') }}</th>
                                <th class="item-l">{{ config('const.EATLOGS.NAME_LIST.Address') }}</th>
                                <th class="item-m">{{ config('const.EATLOGS.NAME_LIST.Business_hours') }}</th>
                                <th class="item-m">{{ config('const.EATLOGS.NAME_LIST.Shoptel') }}</th>
                                <th class="item-s">{{ config('const.EDIT') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eatlogs as $item)
                                <td>
                                    <div><a href="{{ action('DetailController@show', $item->id) }}">{{ $item->shopname }}</a></div>
                                    <div><a href="{{ $item->eatlogurl }}" target="_blank"><button type="button" class="eatlog-btn">{{ config('const.EATLOG') }}</button></a></div>
                                </td>
                                <td>{{ $item->score }}</td>
                                <td><a href="tel:{{ $item->reserve_tel }}">{{ $item->reserve_tel }}</a></td>
                                <td><a href="https://maps.google.co.jp/maps/search/{{ $item->address }}" target="_blank">{{ $item->address }}</a></td>
                                <td>{{ $item->business_hours }}</td>
                                <td><a href="tel:{{ $item->shoptel }}">{{ $item->shoptel }}</a></td>
                                <td><a href="{{ action('EditController@edit', $item->id) }}"><button type="button" class="edit-btn">{{ config('const.EDIT') }}</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
