<?php
namespace FacturaScripts\Plugins\DocumentoFirma\Extension\Controller;

use FacturaScripts\Core\Base\DataBase;
 
use Closure;

class EditAlbaranCliente
{

    public function createViews(): Closure
    {
        return function() {
            $this->addHtmlView('Firma', 'firma', 'Firma', 'firma','fas fa-signature');
            $dataBase = new DataBase();
            $data = $dataBase->select('SELECT editable
                FROM albaranescli
                WHERE idalbaran = '. $_GET['code'])[0]["editable"];
            if ($data == "1")
                $this->setSettings('Firma', 'active', false);
        };
    }

    // public function loadData() {
    //     return function($viewName, $view) {
    //         switch ($viewName) {
    //             case 'Firma':
                
    //             //    // para este ejemplo vamos a cargar los productos sin fabricante
    //             //    $where = [new DataBaseWhere('codfabricante', null, 'IS')];
    //             //    $view->loadData('', $where);
    //             // $this->user->nick
    //                 print_r($view->cursor);

    //                 die;
    //             break;
    //         }
    //     };
    // }

    public function getFirmaData() 
    {
        return function() {
            return [
                "user" => $this->user->nick,
                "date" => date('Y-m-d'),
                "time" => date('H:i:s'),
            ];
        };
    }
}