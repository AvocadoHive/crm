<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;

use Carbon\Carbon;

use  App\Models\ClientModel;

class ClientRepository extends BaseRepository
{
    private $client;

    public function __construct(
        ClientModel $clientModel
    ){
        $this->client = $clientModel;
    }
    
    /**
     * Save client info in clients model
     */
    public function save_client_info(
        $data
    ){
        /**
         * check if client exist by client email
         */
        $client_info = $this->returnToArray($this->client->where("email", "=", $data['email'])->first());

        /**
         * if client does not exist in database
         */
        if(empty($client_info)){
            /**
             * initialize created and updated dates
             */
            $data['created_at'] = Carbon::now();
            $data['updated_at'] = Carbon::now();

            /**
             * set team as blank, since there is no assigning of team members on this stage
             */
            $data['team'] = serialize([]);

            /**
             * save client info
             */
            $this->client->insert($data);
        }
        
    }

    /**
     * Get client info by parameters
     * $page - current pagination
     * $data - additional parameters on fetching client
     */
    public function get_clients(
        $page,
        $data
    ){
        $take = 10;
        $skip = (($page - 1) * $take);

        $transaction_info = $this->returnToArray($this->client->skip($skip)->take($take)->orderBy('created_at', 'DESC')->get());

        return $transaction_info;
    }

    /**
     * Get client info by client id
     */
    public function get_by_id(
        $id
    ){
        $transaction_info = $this->returnToArray($this->client->where('id', '=', $id)->first());
        return $transaction_info;
    }


}
