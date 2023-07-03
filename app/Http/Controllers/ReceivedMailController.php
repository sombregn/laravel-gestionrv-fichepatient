<?php

namespace App\Http\Controllers;

use App\Models\ReceivedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\ElementTrait;
use Illuminate\Support\Facades\DB;

class ReceivedMailController extends Controller
{
    use ElementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id = null)
    {
        $mails = $this->getMails();
        $mailrecuNonlus = $mails['mailrecuNonlus'];
        $totalMailsRecu = $mails['totalMailsRecu'];


        $user = Auth::user();
        $messages = ReceivedMail::where('recipient_id', $user->id)
        ->orderByRaw('CASE WHEN read_at IS NULL THEN 0 ELSE 1 END')
        ->orderBy('created_at', 'desc')
        ->get();
        $messages->load('sender');

        $selectedMessage = null;

        if ($id) {
            $selectedMessage = ReceivedMail::findOrFail($id);
            $selectedMessage->update(['read_at' => now()]);

            redirect()->back();
        }

        return view('messages.indexmessages', compact('mailrecuNonlus', 'totalMailsRecu', 'messages', 'selectedMessage'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messages.indexmessages');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ReceivedMail $receivedMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReceivedMail $receivedMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReceivedMail $receivedMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReceivedMail $receivedMail)
    {
        //
    }
}
