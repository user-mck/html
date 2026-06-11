<?php

use core\App;
use core\Utils;

/**
 * getRouter ustawia domyślną trasę, czyli akcję, która będzie wykonywana, gdy użytkownik nie poda żadnej konkretnej akcji w adresie URL. W tym przypadku jest to 'calculate'.
 *
 * addRoute pozwala na dodanie nowej trasy do routera. Pierwszy argument to nazwa akcji, a drugi argument to nazwa klasy kontrolera, która będzie obsługiwać tę akcję (np. 'calc').
 *@see App::getRouter()
 *@see Utils::addRoute
*/

App::getRouter()->setDefaultRoute('calculate'); 

Utils::addRoute('calculate', 'calc');
