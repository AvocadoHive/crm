<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Services\clientService;

class ClientsController extends Controller
{
    public function getClientsPage(
        Request $request,
        clientService $client
    )
    {
        $info = $client->load_client_page();
        return $info;
    }
}
