<?php

namespace Ivoba\SilverStripe\FileCredits;

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

        $creditLinkField = new TextField('CreditLink', _t(
            __CLASS__.'.CREDITLINK',
            'Link'
        ));

        $licenceField = new TextField('Licence', _t(
            __CLASS__.'.LICENCE',
            'Licence'
        ));
        $fields->addFieldsToTab('Editor.Credits', [$creditsField, $creditLinkField, $licenceField]);
    }
}
