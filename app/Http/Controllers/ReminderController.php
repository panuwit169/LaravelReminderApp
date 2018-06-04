<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Reminder;

class ReminderController extends Controller
{
    public function home(){
        $reminders = Reminder::orderBy('id', 'desc')->get();
        return view('reminder.index',['reminders' => $reminders]);
    }

    public function CreateReminderPage(){
        return view('reminder.AddReminder');
    }

    public function EditReminderPage($id){
        $reminder = Reminder::find($id);
        return view('reminder.EditReminder',['reminder' => $reminder]);
    }

    public function EditReminder(Request $request){
        $reminder = Reminder::find($request->id);
        $reminder->topic = $request->topic;
        $reminder->description = $request->description;
        $reminder->isFinished = false;
        $reminder->createdUserID = 1;
        $reminder->updated_at = NOW();
        $reminder->save();

        return redirect('/');
    }

    public function AddReminder(Request $request){
        $reminder = new Reminder;
        $reminder->topic = $request->topic;
        $reminder->description = $request->description;
        $reminder->isFinished = false;
        $reminder->createdUserID = 1;
        $reminder->created_at = NOW();
        $reminder->updated_at = NOW();
        $reminder->save();

        return redirect('/');
    }

    public function deleteReminder(Request $request){
        $id = $request->id;

        Reminder::find($id)->delete();
        return redirect('/');
    }

}
