<?php

namespace App\Http\Controllers;
use App\Models\Board;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    public function index() {
      //$boards = Board::orderBy('bid','desc')->paginate(10);
      //$boards = Board::all();
      //$boards = DB::table('board')->orderBy('bid','desc')->paginate(10);
      $boards = Board::orderBy('bid','desc')->paginate(config('board.rows_per_page'));

      //print_r($boards);
      return view('boards.index', compact('boards'));
    }

    public function view(int $bid, int $page) {

      //echo "<script>alert('view: ' + " . $bid . ")</script>";
      // row을 찾아서 cnt 값을 1 증가시킨다.
      //Board::find($bid)->increment('cnt');
      DB::table("board")->where('bid', $bid)->increment('cnt');
      $boards = Board::findOrFail($bid);
      $boards->content = htmlspecialchars_decode($boards->content);
      $boards->pagenumber = $page;

      //$content = Board::where('bid', $bid)->first();
      //$content = DB::table('board')->where('bid', $id)->first();
      print_r($boards);
      return view('boards.view', ['boards' => $boards]);
    }

    /**
     * write 폼 작성
     */
    public function write() {
      echo auth()->user();
      if(auth()->check()){
          return view('boards.write');
      }else{
          return redirect()->back()->withErrors('로그인 하십시오.');
      }
    }

    // write to DB
    public function writeok(Request $request) {

    }

    public function create(Request $request)
    {
        $form_data = array(
            'subject' => $request->subject,
            'content' => $request->content,
            'userid'  => Auth::user()->userid,
            'email'   => Auth::user()->email,
            'multi'   => $request->multi??'free',
            'status'  => 1
        );

        if(auth()->check()){
            $rs=Board::create($form_data);
            return response()->json(array('msg'=> "succ", 'bid'=>$rs->bid), 200);
        } else {
          echo "No Auth";
        }
    }
}


