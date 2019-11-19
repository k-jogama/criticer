@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 eatlogurl-area">
            <form action="" method="POST" class="form-url">
                {{ csrf_field() }}
                <div><input type="url" name="eatlogurl" class="eatlogurl" placeholder="食べログのURLを入力してください"></div>
                <div><button type="submit" class="btn-send">送信</button></div>
            </form>

            @if(isset($eatlogdata))
            <div class="eatlogdata-display-area">
                <table class="table table-striped table-bordered">
                    <tbody>
                        @foreach($eatlogdata as $item)
                        <tr>
                            <th>{{ $item['label'] }}</th>
                            <td>{{ $item['info'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
