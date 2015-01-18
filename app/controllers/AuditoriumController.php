<?php
/**
 * Author: Victor Aguilar
 * File: AuditoriumController.php
 */

use \Filmoteca\Repository\AuditoriumsRepository;

class AuditoriumController extends BaseController {


    public function __construct(AuditoriumsRepository $repository)
    {
        $this->respository = $repository;
    }
    public function show($id){

        $auditorium = $this->respository->find($id);

        return View::make('auditoriums.detail', compact('auditorium'));
    }
} 