<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Services\TicketsService;

class TicketsController extends Controller
{
    /**
     * Custom Function
     */
    public function save_new_ticket(
        Request $request,
        TicketsService $ticket
    ){
    
    }
}
