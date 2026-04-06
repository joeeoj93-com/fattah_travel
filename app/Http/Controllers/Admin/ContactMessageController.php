<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    //
    use App\Models\ContactMessage;

    public function index()
    {
        $messages = ContactMessage::orderByDesc('created_at')->get();
        return view('admin.kontak.inbox', compact('messages'));
    }

    public function show($id)
    {
        $msg = ContactMessage::findOrFail($id);
        if (!$msg->is_read) {
            $msg->is_read = true;
            $msg->save();
        }
        return view('admin.kontak.show', compact('msg'));
    }
}
