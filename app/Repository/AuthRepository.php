<?php
namespace App\Repository;
use App\Interface\AuthRepositoryInterface;
use App\Models\image;
use App\Models\User;
use App\Models\comment;

 class AuthRepository implements AuthRepositoryInterface{

    public function post($value){


        $action= $value['action']? 0 :1;
        $table=new image;
        $table->path=$value['image'];
        $table->title=$value['title'];
        $table->user_id=$value['user_id'];
        $table->action=$action;
        $table->save();
        return redirect('index');
      }
    public function index(){
        $data=image::with('User')->get()->toArray();
        return $data;
    }

    public function comment($data){
        $table=new comment;
        $table->comment=$data['comment'];
        $table->post_id=$data['post_id'];
        $table->user_id=$data['user_id'];
        $table->save();
        return redirect('index');
    }
    public function showcomment(){
       $data=image::with('User','comment')->get()->toArray();
       dd($data);
    // echo "yess";
    }
 }

