<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use App\Models\ReceivedMail;

trait ElementTrait
{
    public function getMails()
    {
        $loggedInUser = Auth::user();
        $mailrecuNonlus = $loggedInUser->recuMails()
            ->whereNull('read_at')
            ->get();

        $mailrecuNonlus->load('sender');


        $totalMailsRecu = $loggedInUser->recuMails()
            ->whereNull('read_at')
            ->count();

        return [
        'mailrecuNonlus' => $mailrecuNonlus,
        'totalMailsRecu' => $totalMailsRecu,
    ];
    }
}
