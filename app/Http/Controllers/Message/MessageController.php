<?php

namespace App\Http\Controllers\Message;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Consultant;
use App\Model\Message;

class MessageController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }

    public function message(Request $request){
        try {

            $consaltantList  = Consultant::where('status',1)->get();
            return view('consultant.inbox',compact('messageableList'));
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function postMessage(Request $request){
        try {

            $postData =  new Message ();
            $postData->user_id = $request->user_id;
            $postData->consultant_id = $request->consultant_id;
            $postData->question = $request->question;
            $postData->replay = $request->replay;
            $postData->is_seen = 0;
            $postData->redirect_link = route('consultant-inbox');
            $postData->save();
            return back();
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
    }

    public function seenUpdate($id){
       try {
        $data = Message::findorfail($id);
        $data->is_seen = 1;
        $data->save();
        return redirect(route('consultant-inbox'));
       } catch (\Throwable $th) {
           throw $th;
       }
    }

    // public function inbox(){
    //     try {
    //         $consaltantList  = Consultant::where('status',1)->get();
    //         return view('user.inbox',compact('consaltantList'));
    //         //code...
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //     }
    // }


    public function  sendReplay(Request $request ,$id){
        try {

            $replayValue =   Message::find($id);
            if ($request->hasFile('docs_file')) {
				$file_name = 'sugestion_file' . '.'. $request->docs_file->getClientOriginalExtension();
				$replayValue->docs_file = $file_name;
				$request->docs_file->move(public_path('/uploads/documents/Consultant'), $file_name);
			}
            $replayValue->replay = $request->replay;
            $replayValue->save();
            return back();
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
    }

}
