<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */

namespace AHS\Ninjs\Tests;

use AHS\Ninjs\Serializer\Normalizer\IgnoreNullValuesNormalizer;
use AHS\Ninjs\Validator\NinjsValidator;
use Psr\Log\NullLogger;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class BaseTestCase extends \PHPUnit\Framework\TestCase
{
    public function getSerializer()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new IgnoreNullValuesNormalizer(null, new CamelCaseToSnakeCaseNameConverter())];

        return new Serializer($normalizers, $encoders);
    }

    public function getValidator()
    {
        return new NinjsValidator(new NullLogger());
    }
}
