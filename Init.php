<?php
namespace FacturaScripts\Plugins\DocumentoFirma;

class Init extends \FacturaScripts\Core\Base\InitClass
{
    public function init() {
        $this->loadExtension(new Extension\Controller\EditAlbaranCliente());
    }

    public function update() {
        // se ejecuta cada vez que se instala o actualiza el plugin
    }

    public function uninstall() {
        // se ejecuta cada vez que se desinstale el plugin. Primero desinstala y luego ejecuta el uninstall.
    }
}