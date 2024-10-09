<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index()
    {
        return view('user.invitation.index', [
            'pageTitle' => 'Undangan'
        ]);
    }

    public function store(Request $request)
    {

    }

    public function getComments()
    {
        try {
            $invitations = Invitation::where('user_id', Auth::user()->id)->with('comments')->get();

            return response()->json([
                'data'      => $invitations,
                'message'   => 'get all invitation successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message'   => $e->getMessage()
            ]);
        }
    }

    public function show($slug)
    {
        // Cari undangan berdasarkan slug
        $invitation = Invitation::where('slug', $slug)->first();

        // Jika undangan tidak ditemukan, tampilkan 404
        if (!$invitation) {
            abort(404, 'Invitation not found');
        }

        // Tampilkan view undangan dengan data dari undangan
        return view('invitation.guest.show', compact('invitation'));
    }
}
