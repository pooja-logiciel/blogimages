<?php

namespace App\Http\Controllers;
use App\Interface\AuthRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use validate;
use App\Models\image;
use App\Models\fav;
use App\Models\User;
use App\Models\follower;
use DB;
class authcontroller extends Controller
{
    public $object;
    public $user_id;


    public function __construct(AuthRepositoryInterface $object)
    {
        $this->object = $object;
    }
    //  Data insert on the image table
    public function post(Request $req){
         $req->validate([
                    'image' => 'required',
                    'details' => 'required',
                 ]);
         $check=$req->check;
          if($req->hasFile('image'))
          {
            $file = $req->file('image');
            $filename = time().'.'.$file->getClientOriginalName();
            $file->storeAs('public/', $filename);
            $user_id=auth()->user()->id;
            $value=[
                    'title'=>$req->details,
                    'image'=>$filename,
                    'user_id'=>$user_id,
                    'action'=>$req->check
                  ];
            $action= $value['action']? 0 :1;
            $table=new image;
            $table->path=$value['image'];
            $table->title=$value['title'];
            $table->user_id=$value['user_id'];
            $table->action=$action;
            $table->save();
            return redirect('index');
          }
    }
    // display image
    public function index(){
        $action=1;
        $user_id=auth()->user()->id;
        $user=User::where('id',$user_id)->get()->toArray();
        $data=image::where('action',$action)->with('User')->get()->toArray();
        return view('photo', compact('data','user'));
    }

    // profile image
    public function profile(){
        $user_id=auth()->user()->id;
        $count=follower::where('following',$user_id)->count('following');
        $data=User::where('id',$user_id)->withcount('userimage')->withcount('follower')->with('userimage','follower.following','follower.user')->get()->toarray();
        return view('UserProfile',compact('data','count'));
        // return view('demo',compact('data'));
    }

    // delete image
    public function delete($did)
    {
        image::where('id',$did)->delete();
        fav::where('image_id',$did)->delete();
        return redirect('pro');
    }

    // Favorite image
    public function favt($fav)
    {
        $userid=auth()->user()->id;
        $data=fav::where('image_id',$fav )->where('user_id',$userid)->first();
        if($data==Null)
        {
            $user_id=auth()->user()->id;
            $table=new fav;
            $table->image_id=$fav;
            $table->user_id=$user_id;
            $table->save();
            return redirect('AddToFav');
        }
        else
        {
            return back();
        }
    }

    // Add To Favorite
    public function AddToFav(){
        $user_id=auth()->user()->id;
        $data=fav::where('user_id',$user_id)->with('image','User')->get()->toArray();
         return view('AddToFav', compact('data'));
    }

    //delete  AddTocart

    public function AddToFavrt($delete)
    {
        fav::where('id',$delete)->delete();
        return redirect('AddToFav');
    }

    //view add
    public function view($id){
        $email = DB::table('images')->where('id',$id)->value('view');
        DB::table('images')->where('id',$id)->limit(1)->update(array('view'=>$email+1));
        return back();
    }

    //trend
    public function trend(){
        $user_id=auth()->user()->id;
        $user=User::where('id',$user_id)->get()->toArray();
        $data =image::where('view','>=',10)->with('User')->get()->toArray();
        return view('trend',compact('data','user'));
    }

    //upload file
    public function upload(){
        return view('uploadimage');
    }

    // public function demo($id){
    //      if(auth()->user()->id==$id)
    //      {
    //         return redirect('pro');
    //      }
    //      $user=User::where('id',auth()->user()->id)->get()->toArray();
    //      $data= User::where('id',$id)->with('image')->withcount('userimage')->get()->ToArray();
    //      $follower=follower::where('user_id',auth()->user()->id)->get()->count('user_id');
    //      $following=follower::where('user_id',auth()->user()->id)->get()->count('following');
    //     //  print_r($follower);
    //       return view('users',compact('data','user','follower','following'));
    // }
    public function demo($id)
    {
        $user=User::where('id',auth()->user()->id)->get()->toArray();
        $data=User::where('id',$id)->withcount('userimage')->withcount('follower')->with('userimage','follower.following','follower.user')->get()->toarray();
        return view('user1',compact('user','data'));
    }

    //follower add
    public function follower($followerid){
       $data = follower::where('following',$followerid)->orWhere('user_id',auth()->user()->id)->first();
       if($data==Null)
       {
            $user=auth()->user()->id;
            $data=new follower;
            $data->user_id=$followerid;
            $data->following=$user;
            $data->save();
            return back();
       }
       else
       {
         return back();
       }
    }

    //fetch follower
    public function fetchdata(){
       $user=auth()->user()->id;
       $user= User::with('follower.following','follower.user')->withcount('follower')->get()->toArray();
       echo "<pre>";
       print_r($user);

        // dd($user);
    }
}
