<?php

/**
 * FurryBear
 * 
 * PHP Version 5.3
 * 
 * @category Congress_API
 * @package  FurryBear
 * @author   lobostome <lobostome@local.dev>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/lobostome/FurryBear
 */

namespace FurryBear\Resource\SunlightOpenStates\Method;

use FurryBear\Resource\SunlightOpenStates\BaseResource,
    FurryBear\Common\Exception\InvalidArgumentException,
    FurryBear\Common\Exception\NotImplementedException,
    FurryBear\Iterator\SunlightOpenStates\BillsPageIterator;

/**
 * This class gives access to Sunlight Open States committees detail resource.
 * 
 * @category Congress_API
 * @package  FurryBear
 * @author   lobostome <lobostome@local.dev>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/lobostome/FurryBear
 */
class CommitteeDetail extends BaseResource
{
    /**
     * The resource method URL. No slashes at the beginning and end of the 
     * string.
     */
    const ENDPOINT_METHOD = 'committees';

    /**
     * Constructs the resource, sets a reference to the FurryBear object, and 
     * sets the resource method URL.
     * 
     * @param \FurryBear\FurryBear $furryBear A reference to the FurryBear onject.
     */
    public function __construct(\FurryBear\FurryBear $furryBear)
    {
        parent::__construct($furryBear);
        $this->setResourceMethod(self::ENDPOINT_METHOD);
    }
    
    /**
     * Sets the id of the committee.
     * 
     * @param string $id The Committee id.
     * 
     * @return \FurryBear\Resource\SunlightOpenStates\Method\CommitteeDetail
     */
    public function id($id) {
        $this->setResourceMethod(sprintf("%s/%s", self::ENDPOINT_METHOD, $id));
        return $this;
    } 
}