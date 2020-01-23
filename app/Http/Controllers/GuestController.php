<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailDelete;

class GuestController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('pages.index', compact('categories'));
    }
    public function postDelete($id)
    {
        $post=Post::findOrFail($id);
        $post-> delete();
        // dd($categories);
        Mail::to('prova@indirizzo.com')
            ->send(new MailDelete(
                "E' stato eliminato il post : ",
                $post -> title
            ));

        return redirect() ->route('base');
    }
   
}
