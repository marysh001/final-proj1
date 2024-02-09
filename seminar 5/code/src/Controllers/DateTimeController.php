<?php
namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Models\Date;
use Geekbrains\Application1\Render;

class DateTimeController
{
    public function actionIndex() {
        $date = (new Date())->getDate();
        $render = new Render();

        return $render->renderPage('date.twig', [
            'date' => $date 
        ]);
    }
}

