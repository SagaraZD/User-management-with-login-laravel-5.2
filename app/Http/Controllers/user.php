<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\user as Users;

class user extends Controller
{
  public function loginView(){
    if (Auth::check()) {
      return redirect()->route('users');
    }else{
      return view('login');
    }
  }

  public function loginPost(Request $request ){
    $this->validate($request,[
      'username' => 'required',
      'user_password' => 'required'
    ]);

    if(Auth::attempt(['username' => $request['username'], 'password'=> $request['user_password'] ])){
      return redirect()->route('users');
    }else{
      $alert ="Please Check your Username and Password";
    }
      return redirect()->back()->with(['alert'=>$alert]);
  }

  public function getLogout(){
    Auth::logout();
    $message ="Thank you..! Come Again.";
    return redirect()->route('loginView')->with(['message'=>$message]);
  }

  public function getUser(){
    $getallUser = Users::all();
    return view('viewUser', ['users'=> $getallUser]);
  }

  public function addUserView(){
    return view('addUser');
  }

  public function editUserView($id){
    $userbyId =  Users::find($id);
    return view('editUser', ['user'=> $userbyId] );
  }

  public function addUserPost(Request $request){

    $this->validate($request, [
      'username' => 'required|max:120|unique:users',
      'email' => 'required|email|unique:users',
      'firstName' => 'required|max:120',
      'lastName' => 'required|max:120',
      'address' => 'required'
    ]);

    $user = new Users();
    $user->username = $request['username'];
    $user->email = $request['email'];
    $user->password = bcrypt('12345');
    $user->firstName = $request['firstName'];
    $user->lastName = $request['lastName'];
    $user->address = $request['address'];

    if($user->save()){
      $message ="New User added";
      return redirect()->route('addUserView')->with(['message'=>$message]);
    }

  }

  public function editUserPost(Request $request){

    $this->validate($request, [
      'email' => 'required|email',
      'firstName' => 'required|max:120',
      'lastName' => 'required|max:120',
      'address' => 'required'
    ]);

    $id = $request['id'];
    $user = Users::find($id);
    $user->email = $request['email'];
    $user->firstName = $request['firstName'];
    $user->lastName = $request['lastName'];
    $user->address = $request['address'];

    if($user->update()){
      $message ="Your info has Updated.";
      return redirect()->back()->with(['message'=>$message]);
    }else{
      $message ="Sorry, Somthing went wrong.";
      return redirect()->back()->with(['alert'=>$message]);
    }
  }

  public function deleteUser($id){
    $user = Users::where('id', $id)->first();
    // if(Auth::user() !=$Jobs->user){
    //   return redirect()->route('myVacancies')->with(['message'=>'You Dont have a Permission']);
    // }else{
    //   $Jobs->delete();
    //   return redirect()->route('myVacancies')->with(['message'=>'Successfully Deleted']);
    // }
    $user->delete();
    return redirect()->route('users')->with(['message'=>'Successfully Deleted']);
  }

}
