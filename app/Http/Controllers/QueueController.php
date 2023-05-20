<?php

namespace App\Http\Controllers;

use App\Events\UserEvent;
use App\Jobs\UserRegister;
use App\Mail\QueueMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QueueController extends Controller
{
    public function queue()
    {
        return view('queue');
    }

    public function queueStore(Request $request)
    {
        // listener diye mail sent korar jonno ata comment kora holo
        // UserRegister::dispatch($request->all())->delay(now()->addSeconds(10));

        event(new UserEvent($request->all()));
        return back()->with('success','Queue has been successfully.');


    }


}
