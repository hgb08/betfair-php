<?php

namespace Betfair\Model\PlaceOrders;


use Betfair\Exception\ModelException;


class LimitOrder
{

    /**
     * @param float  $size
     * @param float  $price
     * @param string $persistenceType
     */
    public function __construct($size, $price, $persistenceType)
    {
        $this->size = $size;
        $this->price = $price;
        $this->setValidPersistenceType($persistenceType);
    }


    /** @var  float */
    public $size;

    /** @var  float */
    public $price;

    /** @var  PersistenceType */
    public $persistenceType;

    /** @var  timeInForce */
    public $timeInForce;


    public function setTimeInForce($state)
    {
        if ($state) {
            $this->timeInForce = 'FILL_OR_KILL';
        }
        return $this;
    }


    private function setValidPersistenceType($persistenceType)
    {
        if (!in_array($persistenceType, PersistenceType::toArray())) {
            throw new ModelException(
                sprintf("Not valid persistence type %s. Valid ones are %s",
                    $persistenceType,
                    implode(",", PersistenceType::toArray())
                ));
        }

        $this->persistenceType = $persistenceType;
    }


    /**
     * @return \Betfair\Model\PlaceOrders\PersistenceType
     */
    public function getPersistenceType()
    {
        return $this->persistenceType;
    }


    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }
}
