@extends('layouts.app')

@section('content')
<div id="eatlog-home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 eatlogurl-area">
                <div class="eatlogdata-list-btn-area">
                    <a href="{{ route('list') }}">
                        <button type="button" class="">★{{ config('const.FAVORITE') }}</button>
                    </a>
                </div>
                <form action="{{ route('home') }}" method="POST" class="form-url">
                    {{ csrf_field() }}
                    <div><input type="url" name="eatlogurl" class="eatlogurl" placeholder="食べログのURLを入力してください"></div>
                    <div><button type="button" class="btn-send">{{ config('const.SEND') }}</button></div>
                </form>

                @if(isset($eatlogdata))
                    <form action="{{ route('save') }}" method="POST" class="form-save">
                        {{ csrf_field() }}
                        <div class="eatlogdata-display-area">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    @foreach($eatlogdata as $key => $item)
                                        @if($key != 'img')
                                        <tr>
                                            <th>{{ $item['label'] }}</th>
                                            @if($key == 'eatlogurl' || $key == 'hp')
                                                <td><a href="{{ $item['info'] }}" target="_blank">{{ $item['info'] }}</a></td>
                                            @else
                                                <td>{{ $item['info'] }}</td>
                                            @endif
                                        </tr>
                                        @endif
                                        <input type="hidden" name="{{ $key }}" value="{{ $item['info'] }}">
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="eatlogdata-save-btn-area">
                            <button type="submit" class="btn-save">★{{ config('const.FAVORITE') . config('const.ENTRY') }}</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
