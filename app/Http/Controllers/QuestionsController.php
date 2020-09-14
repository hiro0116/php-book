<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{

    public function initialize(){
        parent::initialize();
    }

    /**
     * 質問一覧ページ
    */
    public function index(){
        $questions = Question::orderBy('created', 'desc')->get();
        return view('index', ['questions' => $questions]);
        $this->set(compact('questions'));
    }

    /**
     * 質問投稿後一覧ページに遷移
     */
     public function add(){
         $questions = $this->Questions->newEntity();

         if ($this->request->is('post')){
             $question = $this->Questions->patchEntity($question, $this->request->getData());
             $question->user_id = 1;

             if ($this->Questions->save($question)){
                 $this->Flash->success('質問を投稿しました。');

                 return $this->redirect(['action' => 'index']);
             }
             $this->Flash->error('質問の投稿に失敗しました。');
         }
         $this->set(compact('question'));
     }
}