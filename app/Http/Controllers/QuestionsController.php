<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionsController extends Controller
{

    public function initialize(){
        parent::initialize();
        $this->loadModel('Answer');
    }

    /**
     * 質問一覧ページ
    */
    public function index(){
        $questions = Question::orderBy('created_at', 'desc')->get();
        return view('index', ['questions' => $questions]);
    }

    /**
     * 質問を投稿
     */
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $question = $request->validate(['question' => 'required|max:500']);
        Question::create($question);
        return redirect()->route('index');
    }

    /**
     * 質問詳細画面
     */
    public function show($id){
        $question = Question::find($id);
        return view('show', ['question' => $question]);
    }
}