<?php

namespace Betfair\Model\PlaceOrders;

use Betfair\Model\BetfairSerializable;
use Betfair\Model\MarketFilterInterface;
use Betfair\Model\MatchProjection;
use Betfair\Model\ParamInterface;
use Betfair\Model\PriceProjection;
use Betfair\Model\TimeRange;


class PlaceOrderParam extends BetfairSerializable implements ParamInterface
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

    /** NOT IMPLEMENTED!!! */

    /**
     * @param array $marketProjection
     * @return $this
     */
    public function setMarketProjection($marketProjection)
    {
        // TODO: Implement setMarketProjection() method.
    }


    /**
     * @param $maxResult
     * @return $this
     */
    public function setMaxResults($maxResult)
    {
        // TODO: Implement setMaxResults() method.
    }


    /**
     * @param $marketProjection
     * @return $this
     */
    public function addMarketProjection($marketProjection)
    {
        // TODO: Implement addMarketProjection() method.
    }


    /**
     * @param MarketFilterInterface $filter
     * @return $this
     */
    public function setMarketFilter(MarketFilterInterface $filter = null)
    {
        // TODO: Implement setMarketFilter() method.
    }


    /**
     * @param $currencyCode
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        // TODO: Implement setCurrencyCode() method.
    }


    /**
     * @param $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        // TODO: Implement setLocale() method.
    }


    /**
     * @param $marketIds
     * @return $this
     */
    public function setMarketIds(array $marketIds)
    {
        // TODO: Implement setMarketIds() method.
    }


    /**
     * @param MatchProjection $matchProjection
     * @return $this
     */
    public function setMatchProjection(MatchProjection $matchProjection)
    {
        // TODO: Implement setMatchProjection() method.
    }


    /**
     * @param $orderProjection
     * @return $this
     */
    public function setOrderProjection($orderProjection)
    {
        // TODO: Implement setOrderProjection() method.
    }


    /**
     * @param PriceProjection $priceProjection
     * @return $this
     */
    public function setPriceProjection(PriceProjection $priceProjection)
    {
        // TODO: Implement setPriceProjection() method.
    }


    /**
     * @param $marketSort
     * @return $this
     */
    public function setMarketSort($marketSort)
    {
        // TODO: Implement setMarketSort() method.
    }


    /**
     * @param $eventTypeIds
     * @return $this
     */
    public function setEventTypeIds(array $eventTypeIds)
    {
        // TODO: Implement setEventTypeIds() method.
    }


    /**
     * @param $eventIds
     * @return $this
     */
    public function setEventIds(array $eventIds)
    {
        // TODO: Implement setEventIds() method.
    }


    /**
     * @param $runnerIds
     * @return $this
     */
    public function setRunnerIds(array $runnerIds)
    {
        // TODO: Implement setRunnerIds() method.
    }


    /**
     * @param $betIds
     * @return $this
     */
    public function setBetIds(array $betIds)
    {
        // TODO: Implement setBetIds() method.
    }


    /**
     * @param $side
     * @return $this
     */
    public function setSide($side)
    {
        // TODO: Implement setSide() method.
    }


    /**
     * @param $settledDateRange
     * @return $this
     */
    public function setSettledDateRange(TimeRange $settledDateRange)
    {
        // TODO: Implement setSettledDateRange() method.
    }


    /**
     * @param $groupBy
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        // TODO: Implement setGroupBy() method.
    }


    /**
     * @param $includeItemDescription
     * @return $this
     */
    public function setIncludeItemDescription($includeItemDescription)
    {
        // TODO: Implement setIncludeItemDescription() method.
    }


    /**
     * @param int $fromRecord
     * @return $this
     */
    public function setFromRecord($fromRecord)
    {
        // TODO: Implement setFromRecord() method.
    }


    /**
     * @param $recordCount
     * @return $this
     */
    public function setRecordCount($recordCount)
    {
        // TODO: Implement setRecordCount() method.
    }


    /**
     * @param TimeRange $dateRange
     * @return $this
     */
    public function setDateRange(TimeRange $dateRange)
    {
        // TODO: Implement setDateRange() method.
    }


    /**
     * @param $orderBy
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        // TODO: Implement setOrderBy() method.
    }


    /**
     * @param $sortDir
     * @return $this
     */
    public function setSortDir($sortDir)
    {
        // TODO: Implement setSortDir() method.
    }


    /**
     * @param $betStatus
     * @return mixed
     */
    public function setBetStatus($betStatus)
    {
        // TODO: Implement setBetStatus() method.
    }
}
