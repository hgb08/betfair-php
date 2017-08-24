<?php

namespace Betfair\BettingApi\PlaceOrders;

use Betfair\AbstractBetfair;
use Betfair\Adapter\AdapterInterface;
use Betfair\Client\BetfairClientInterface;
use Betfair\Factory\MarketFilterFactoryInterface;
use Betfair\Factory\ParamFactoryInterface;
use Betfair\Model\PlaceOrders\PlaceOrderParam;


class PlaceOrders extends AbstractBetfair
{
    const API_METHOD_NAME = "placeOrders";


    /**
     * PlaceOrders constructor.
     *
     * @param BetfairClientInterface       $betfairClient
     * @param AdapterInterface             $adapter
     * @param ParamFactoryInterface        $paramFactory
     * @param MarketFilterFactoryInterface $marketFilterFactory
     */
    public function __construct(
        BetfairClientInterface $betfairClient,
        AdapterInterface $adapter,
        ParamFactoryInterface $paramFactory,
        MarketFilterFactoryInterface $marketFilterFactory
    )
    {
        parent::__construct($betfairClient, $adapter, $paramFactory, $marketFilterFactory);
    }


    public function makePlaceOrders(PlaceOrderParam $placeOrderParam)
    {
        return $this->adapter->adaptResponse(
            $this->apiNgRequest(self::API_METHOD_NAME, $placeOrderParam)
        );
    }
}
