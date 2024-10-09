<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index() 
    {
        return view('user.invitation.index', [
            'pageTitle' => 'Undangan'
        ]);
    }
}
