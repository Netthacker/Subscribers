<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('subscribers.index', compact('subscribers'));
    }

    public function create()
    {
        return view('subscribers.create');
    }

    public function store(Request $request)
    {
        $subscriber = new Subscriber([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'subscribed' => $request->has('subscribed') ? true : false,
        ]);
        $subscriber->save();

        return redirect('/subscribers')->with('success', 'Subscriber created successfully!');
    }

    public function edit($id)
    {
        $subscriber = Subscriber::find($id);
        return view('subscribers.edit', compact('subscriber'));
    }

    public function update(Request $request, $id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->nome = $request->input('nome');
        $subscriber->email = $request->input('email');
        $subscriber->subscribed = $request->has('subscribed') ? true : false;
        $subscriber->save();

        return redirect('/subscribers')->with('success', 'Subscriber updated successfully!');
    }

    public function destroy($id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->delete();

        return redirect('/subscribers')->with('success', 'Subscriber deleted successfully!');
    }
}
