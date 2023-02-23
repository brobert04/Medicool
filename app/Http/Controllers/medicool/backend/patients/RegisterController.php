<?php

namespace App\Http\Controllers\medicool\backend\patients;

use App\Http\Requests\StoreInvitationRequest;
use App\Models\Invitation;

class RegisterController
{
    public function index()
    {
        $invitations = Invitation::where('registered_at', null)->orderBy('created_at', 'desc')->get();
        return view('medicool.backend.doctor.pages.send_invitation', compact('invitations'));
    }

    public function store(StoreInvitationRequest $request)
    {
        $invitation = new Invitation($request->all());
        $invitation->generateInvitationToken();
        $invitation->save();
        return redirect()->route('doctor.send.invitation')->with('success', 'Invitation sent successfully');
    }
}
