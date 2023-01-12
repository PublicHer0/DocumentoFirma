<?php
namespace FacturaScripts\Plugins\DocumentoFirma\Model;

class Firma extends \FacturaScripts\Core\Model\Base\ModelClass
{
    use \FacturaScripts\Core\Model\Base\ModelTrait;

    public $codfirma;
    public $coddocument;

    public static function primaryColumn(): string
    {
        return 'codfirma';
    }

    public static function tableName(): string
    {
        return 'firmas';
    }
}