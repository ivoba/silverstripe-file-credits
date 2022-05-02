<?php

namespace App\Extension;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class FileFormFactoryExtension extends Extension
{
    public function updateFormFields(FieldList $fields, $context)
    {
        $creditsField = new TextField('Credits', _t(
            __CLASS__.'.CREDITS',
            'Credits'
        ));
        //adapt readonly behaviour, this is necessary to for fileSelectForm or fileEditForm difference
        $creditsField->setReadonly($fields->dataFieldByName('Title')->isReadonly());
        $fields->push($creditsField);

        $creditLinkField = new TextField('CreditLink', _t(
            __CLASS__.'.CREDITLINK',
            'Link'
        ));
        $fields->push($creditLinkField);

        $licenceField = new TextField('Licence', _t(
            __CLASS__.'.LICENCE',
            'Licence'
        ));
        $fields->push($licenceField);
    }
}
