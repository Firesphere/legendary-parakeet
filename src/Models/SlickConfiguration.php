<?php

namespace Firesphere\SlickElement\Models;

use SilverStripe\Core\Config\Configurable;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\FieldType\DBBoolean;
use SilverStripe\ORM\FieldType\DBInt;
use SilverStripe\ORM\FieldType\DBVarchar;

class SlickConfiguration extends DataObject
{
    use Configurable;

    private static $db = [
        'element' => DBVarchar::class,
        'infinite' => DBBoolean::class,
        'adaptiveHeight' => DBBoolean::class,
        'autoplay' => DBBoolean::class,
        'autoplaySpeed' => DBInt::class,
        'arrows' => DBBoolean::class . '(true)'
    ];

    private static $defaults = [
        'element' => 'carousel',
        'infinite' => true,
        'adaptiveHeight' => false,
        'autoplay' => true,
        'autoplaySpeed' => 3000,
        'arrows' => true,
    ];

    public function getSlickConfig()
    {
        $config = $this->config()->get('settings');
        return json_encode($this->data());
    }
}
