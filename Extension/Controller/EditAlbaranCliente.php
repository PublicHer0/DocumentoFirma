<?php
namespace FacturaScripts\Plugins\DocumentoFirma\Extension\Controller;

use Closure;

class EditAlbaranCliente
{
    public function createViews(): Closure
    {
        return function() {
            $this->addHtmlView('Firma', 'firma', 'Firma', 'firma','fas fa-signature');
        };
    }
}