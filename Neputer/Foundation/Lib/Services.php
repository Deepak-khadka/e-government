<?php

namespace Neputer\Foundation\Lib;

final class Services
{
    const  GOVERNMENT_JOB = 0;
    const PRIVATE_JOB = 1;

    const EMPLOYMENT = 2;
    const UNEMPLOYMENT = 3;

    public static $current = [
        self::GOVERNMENT_JOB => 'Government',
        self::PRIVATE_JOB => 'Private'
    ];

    public static $statusType = [
        self::EMPLOYMENT => 'Employment',
        self::UNEMPLOYMENT => 'Unemployment',
    ];
}
