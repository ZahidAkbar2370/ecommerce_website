<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MessageController extends Controller
{
    public function index()
    {
    	$all_contacts = Contact::all();

    	return view("Admin/Message/view_messages")->with('all_contacts',$all_contacts);
    }
    public function destroy($id)
    {
    	$delete_contact = Contact::find($id);

    	$delete_contact->delete();

    	return redirect('view-contacts');
    }
}
