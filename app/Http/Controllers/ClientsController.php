<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Services\clientService;

class ClientsController extends Controller
{
    public function getClientsPage(
        Request $request,
        clientService $client,
        $id
    )
    {
        $data = $request->all();
        dump($data);
        $info = $client->load_client_page($id, $data);
        return $info;
    }
    
    /**
     * getClientsListPage
     * return list of clients
     * $page - current page in pagination
     */
    public function getClientsListPage(
        Request $request,
        clientService $client,
        $page
    ){
        /**
         * get params from form
         */
        $data = $request->all();

        /**
         * get clients as per filter and page
         */
        $info = $client->load_all_client($page, $data);

        /**
         * return formated client info
         */
        return $info;
    }

    /**
     * addClientPage
     * page form to add client
     */
    public function addClientPage(
        Request $request,
        clientService $client,
    ){
        /**
         * get add client page
         */
        $info = $client->add_client_page();

        /**
         * return add client form
         */
        return $info;
    }

    /**
     * Process client
     * save client
     */
    public function processClient(
        Request $request,
        clientService $client,
    ){
        /**
         * pull data from request
         */
        $data = $request->all();

        /**
         * initialize saving of client
         */
        $client->save_client_info($data);

        /**
         * redirect to list of clients after saving
         */
        return redirect()->to('/dashboard/client/list/1');
    }
    
}
