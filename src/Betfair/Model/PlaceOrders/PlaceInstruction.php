<?php

namespace Betfair\Model\PlaceOrders;


use Betfair\Exception\ModelException;
use Betfair\Model\Side;

class PlaceInstruction
{

    public function __construct($orderType, $selectionId, $side)
    {
        $this->setValidOrderType($orderType);
        $this->selectionId = $selectionId;
        $this->setValidSide($side);
    }

    /** @var  OrderType */
    public $orderType;

    /** @var  int */
    public $selectionId;

    /** @var  float */
    public $handicap=0;


    /** @var  LimitOrder */
    public $limitOrder;

    public $limitOnCloseOrder;

    public $marketOnCloseOrder;

    /** @var string Side */
    public $side;

    public function setValidOrderType($orderType)
    {
        $this->validateOrderTypeOrThrowException($orderType);
        $this->orderType = $orderType;
    }

    public function setValidSide($side)
    {
        $this->validateSideOrThrowException($side);
        $this->side = $side;
    }

    private function validateOrderTypeOrThrowException($orderType)
    {
        if(!in_array($orderType, OrderType::toArray())) {
            throw new ModelException(
                sprintf(
                    "Invalid Order Type %s. Valid ones are %s",
                    $orderType,
                    implode(",", OrderType::toArray())
                )
            );
        }
    }
    private function validateSideOrThrowException($side)
    {
        if(!in_array($side, Side::toArray())) {
            throw new ModelException(
                sprintf(
                    "Invalid Side %s. Valid ones are %s",
                    $side,
                    implode(",", Side::toArray())
                )
            );
        }
    }

    /**
     * @param float $handicap
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;
    }

    /**
     * @param mixed $limitOnCloseOrder
     */
    public function setLimitOnCloseOrder($limitOnCloseOrder)
    {
        $this->limitOnCloseOrder = $limitOnCloseOrder;
    }

    /**
     * @param mixed $limitOrder
     */
    public function setLimitOrder(LimitOrder $limitOrder)
    {
        $this->limitOrder = $limitOrder;
    }

    /**
     * @param mixed $marketOnCloseOrder
     */
    public function setMarketOnCloseOrder($marketOnCloseOrder)
    {
        $this->marketOnCloseOrder = $marketOnCloseOrder;
    }
}
