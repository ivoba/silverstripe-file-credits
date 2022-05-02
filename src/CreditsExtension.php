<?php

namespace App\SilverStripe\FileCredits;

use SilverStripe\ORM\DataExtension;

class CreditsExtension extends DataExtension
{
    private static $db = [
        'Credits' => 'Varchar',
        'CreditLink' => 'Varchar',
        'Licence' => 'Varchar',
    ];
}
