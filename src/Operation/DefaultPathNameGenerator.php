<?php

namespace Kukusa\Apis\Operation;

use ApiPlatform\Core\Operation\PathSegmentNameGeneratorInterface;

class DefaultPathNameGenerator implements PathSegmentNameGeneratorInterface
{
    /**
     * Transforms a given string to a valid path name which can be pluralized (eg. for collections).
     *
     * @param string $name usually a ResourceMetadata shortname
     *
     * @return string A string that is a part of the route name
     */
    public function getSegmentName(string $name, bool $collection = true): string
    {
        $name = $this->dashize($name);

        return $name;
    }

    private function dashize(string $string): string
    {
        return strtolower(preg_replace('~(?<=\\w)([A-Z])~', '-$1', $string));
    }
}
