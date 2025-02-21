@extends('boards.layout')
@section('content')

    <h2 class="mt-4 mb-3">게시판 목록</h2>
    <div style="text-align:right;">
        <button class="text-xl">등록</button></a>
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
            <th scope="col">번호</th>
            <th scope="col">이름</th>
            <th scope="col">제목</th>
            <th scope="col">조회수</th>
            <th scope="col">등록일</th>
        </tr>
        </thead>
        <tbody>
        <?php
          //print_r($_GET);
          $num_per_pages = 5;
          $page = $_GET['page'];
          $idx = $boards->total() - (($boards->currentPage()-1) * $num_per_pages);
          //echo "<br>".$idx . ",," . $boards[0];
        ?>
          @foreach ($boards as $board)
          <tr>
            <td>{{ $idx-- }}</td>
            <td>{{ $board->userid }}</td>
            <td><a href="/boards/view/{{ $board->bid }}/{{ $page }}">{{ $board->subject }}</a></td>
            <td>{{ $board->cnt }}</td>
            <td>{{ $board->regdate }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
    <div>{{ $boards->onEachSide(1)->links() }}</div>
    

@endsection