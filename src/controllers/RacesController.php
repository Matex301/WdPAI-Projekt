<?php
require_once 'AppController.php';
require_once __DIR__ . '/../repository/RacesRepository.php';
class RacesController extends AppController
{
    public function call()
    {

        $racesRepository = new RacesRepository();
        $races = $racesRepository->getAllAndDesciption();
        for($i = 0; $i < sizeof($races); $i++){
            $races[$i]['entries'] = json_decode($races[$i]['entries']);
        }

        die(json_encode($races));
    }
}