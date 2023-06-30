<?php

    namespace App\Http\Services;

    use App\Http\Repositories\ClientRepository;

    class clientService extends BaseService {

        private $client;
        /**
         *  Initialize Required Repositories
         */
        public function __construct(
            ClientRepository $clientRepo,
        ){
            $this->client = $clientRepo;
        }

        public function load_client_page($id, $data)
        {
            $segment = (isset($data['segment']) && $data['segment'] != '' ? $data['segment'] : 'info');
            $client_info = $this->client->get_by_id($id);
            dump($client_info);
            return view('pages.clients.index')->with(['client' => $client_info, 'segment' => $segment]);
        }

        /**
         * Load all clients as per pagination
         * $page - current paginated page
         * $data - additional data params
         */
        public function load_all_client(
            $page,
            $data
        ){
            $clients = $this->client->get_clients($page, $data);
            dump($clients);
            return view('pages.clients.list')->with(['clients' => $clients]);
        }

        /**
         * Custom Function
         */
        public function add_client_page(
        ){
            return view('pages.clients.add');
        }

        /**
         * Process the client
         */
        public function save_client_info($data){

            /**
             * format signed date base on request data
             */
            $data['signed'] = sprintf("%02d", $data['month']).'/'.sprintf("%02d", $data['date']).'/'.$data['year'];

            /**
             * unset unnecessary values for saving in client model
             */
            unset($data['_token']);
            unset($data['month']);
            unset($data['date']);
            unset($data['year']);

             /**
              * save client info in repository
              */
            $this->client->save_client_info($data);
        }
    }