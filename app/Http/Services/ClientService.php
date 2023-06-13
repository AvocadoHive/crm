<?php

    namespace App\Http\Services;

    class clientService extends BaseService {

        /**
         *  Initialize Required Repositories
         */
        public function __construct(
        ){
        }

        public function load_client_page()
        {
            return view('pages.clients.index');
        }
    }