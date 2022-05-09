<?php

declare(strict_types=1);

/*
 * This file is part of the BazingaGeocoderBundle package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Bazinga\GeocoderBundle\Mapping;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class ClassMetadata
{
    public \ReflectionProperty $addressProperty;

    public \ReflectionProperty $latitudeProperty;

    public \ReflectionProperty $longitudeProperty;

    public ?\ReflectionMethod $addressGetter = null;
}
