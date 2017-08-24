<?php

namespace Betfair\Model\PlaceOrders;

use Betfair\Model\BetfairSerializable;

class PlaceOrderParam extends BetfairSerializable
{
    public function __construct($marketId, array $placeInstructions = array())
    {
        $this->marketId = $marketId;
        $this->instructions = $placeInstructions;
    }

    /** @var  string */
    public $marketId;

    public $instructions;

    /** @var  string */
    public $customRef;

    public function addPlaceInstruction(PlaceInstruction $placeInstruction)
    {
        $this->instructions[] = $placeInstruction;
    }

    public function setCustomRef($customRef)
    {
        $this->customRef = $customRef;
    }
}
