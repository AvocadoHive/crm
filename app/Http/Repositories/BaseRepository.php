<?php

namespace App\Http\Repositories;


/**
 * Class BaseRepository
 *
 * @package App\Data\Repositories
 */
abstract class BaseRepository
{
    public function returnToArray($data)
    {
        if($data !== NULL){
            return $data->toArray();
        } else {
            return [];
        }
    }

    public function inArray($needle, $haystack)
    {
        foreach ($haystack as $key => $value) {
            if($value == $needle){
                return true;
                break;
            }
        }

        return false;
    }

    public function registerItem($model, $data)
    {
        $setup_item = $model->init($data);
        
        if (!$setup_item->validate($data)) {
            $errors = $setup_item->getErrors();
            return [
                'status' => 500,
                'message' => 'An error has occurred while validating',
                'data' => [
                    'errors' => $errors,
                ],
            ];
        }
        
        if (!$setup_item->save()) {
            $errors = $setup_item->getErrors();
            return [
                'status' => 500,
                'message' => 'An error has occurred while saving',
                'data' => [
                    'errors' => $errors,
                ],
            ];
        }

        return [
            'status' => 200,
            'message' => 'Successfully saved',
            'data' => [
                'token' => $setup_item->id,
            ],
        ];
    }

    public function updateItem($model, $data)
    {
        
        $setup_item = $model->find($data['id']);

        // if not found, return false
        if (!$setup_item) {
            return [
                'status' => 400,
                'message' => $data['model'].' Details not found',
                'data' => [],
            ];
        }

        // unset id
        if (isset($data['id'])) {
            unset($data['id']);
        }

        $setup_item->fill($data);

        //region Data insertion
        if (!$setup_item->save()) {
            $errors = $setup_item->getErrors();
            return [
                'status' => 500,
                'message' => 'Something went wrong with saving the',
                'data' => $errors,
            ];
        }

        return [
            'status' => 200,
            'message' => 'Successfully updated the',
            'data' => $data,
        ];
    }

    public function deleteItem($model, $id)
    {
        $toDelete = $model->find($id);
        if($toDelete == null){
            return [
                'status' => 200,
                'message' => 'item already deleted.',
                'data' => [
                    'user_id' => $id
                ],
            ];
        }
        $toDelete->delete();

        return [
            'status' => 200,
            'message' => 'Successfully deleted the item.',
            'data' => [
                'user_id' => $id
            ],
        ];
    }

    function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 12; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    

}
