<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index() {
        $ticket = Ticket::get();
        return view('index', compact('ticket'));
    }
}
