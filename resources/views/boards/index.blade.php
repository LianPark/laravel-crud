@extends('boards.layout')

@section('header')
    @include('boards.header', ['toptitle'=>'게시판 목록보기'])
@endsection

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div style="text-align:right;">
        <a href="/boards/write"><button class="text-xl">{{__('messages.posting')}}</button></a>
    </div>
    <table class="table table-striped table-hover">
        <colgroup>
            <col width="10%"/>
            <col width="15%"/>
            <col width="45%"/>
            <col width="15%"/>
            <col width="15%"/>
        </colgroup>
        <thead>
        <tr>
            <th scope="col">{{ ucfirst(__('messages.num')) }}</th>
            <th scope="col">{{ ucfirst(__('messages.name')) }}</th>
            <th scope="col">{{ ucfirst(__('messages.subject')) }}</th>
            <th scope="col">{{ ucfirst(__('messages.hit')) }}</th>
            <th scope="col">{{ ucfirst(__('messages.date')) }}</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $pagenumber = $_GET["page"] ?? 1;
                $idx = $boards->total()-(($boards->currentPage()-1) * config('board.rows_per_page') );
            ?>
            @foreach ($boards as $board)
                <tr>
                    <th scope="row">{{ $idx-- }}</th>
                    <td>{{ $board->userid }}</td>
                    <td><a href="/boards/view/{{$board->bid}}/{{$pagenumber}}">{{ $board->subject }}</a></td>
                    <td>{{ number_format($board->cnt) }}</td>
                    <td>{{ date("Y-m-d",strtotime($board->regdate)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
      {!! $boards->onEachSide(1)->links() !!}
    </dvi>
@endsection