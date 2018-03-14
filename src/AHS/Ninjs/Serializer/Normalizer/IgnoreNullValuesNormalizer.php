<?php
/**
 * Copyright (C) Paweł Mikołajczuk Creative Apps - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Paweł Mikołajczuk <pawel@mikolajczuk.in>, 2018.
 */
declare(strict_types=1);

namespace AHS\Ninjs\Serializer\Normalizer;

use AHS\Ninjs\Schema\Associations;
use AHS\Ninjs\Schema\Renditions;
use AHS\Ninjs\Superdesk\Extra;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class IgnoreNullValuesNormalizer extends ObjectNormalizer
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = parent::normalize($object, $format, $context);

        return array_filter($data, function ($value) {
            return null !== $value;
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function extractAttributes($object, $format = null, array $context = array())
    {
        $attributes = parent::extractAttributes($object, $format, $context);

        if ($object instanceof Associations || $object instanceof Renditions || $object instanceof Extra) {
            if (method_exists($object, 'getItems')) {
                $attributes = array_merge($attributes, array_keys($object->getItems()));
            }
        }

        return $attributes;
    }
}