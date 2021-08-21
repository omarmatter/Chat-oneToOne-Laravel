<?php

namespace App\Http\Controllers;

use App\Events\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class MessageController extends Controller
{

    public function __construct()
    {
return $this->middleware('auth');
    }
public function index(){
 return view('chat');
    }

public function store(Request $request){


  broadcast(new ChatMessage($request->message,'1'));

  return redirect()->back();

}

}
