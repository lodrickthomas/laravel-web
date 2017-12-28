<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use Session;

class ContactsController extends Controller
{
  public function submit(Request $request){
  // perfom data validation before send them to our database
  $this-> validate($request,array(
    'email'=>'required',
    'phone' => 'required',
    'body' => 'required',
    'title'=>'required',

  ));

  // after validation, store data
$contact = new Contact;
$contact -> phone = $request -> phone;
$contact -> email = $request -> email;
$contact -> body = $request -> body;
$contact -> title = $request -> title;
// $message -> name = $request -> input('name');
// $message -> email = $request -> input('email');
// $message -> message = $request -> input('message');

// save data
$contact -> save();
// notify user if there is any error when sending data to the database
Session::flash('success','Thank you! I received your message!');
// redirect user to home page
return redirect('/');
}


// display messages
// public function getMessages(){
//
// $message = Contact::All();
//
// return view('messages')->with('messages',$contact);
//
// }
}
