@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="h3">全{{ count($eatlogs) }}件</div>
      @foreach($eatlogs as $item)
      <div class="card mt-3">
        <div class="card-body">
          <div><a href="{{ action('DetailController@show', $item->id) }}">
              <h4>{{ $item->shopname }}</h4>
            </a></div>
          <div><a href="tel:{{ $item->reserve_tel }}">{{ $item->reserve_tel }}</a></div>
          <div><a href="https://maps.google.co.jp/maps/search/{{ $item->address }}" target="_blank">{{ $item->address }}</a></div>
          <div class="float-left"><a href="{{ $item->eatlogurl }}" target="_blank"><button type="button" class="list-button">{{ config('const.EATLOG') }}</button></a></div>
          <div><a href="{{ action('EditController@edit', $item->id) }}"><button type="button" class="list-button">{{ config('const.EDIT') }}</button></a></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection