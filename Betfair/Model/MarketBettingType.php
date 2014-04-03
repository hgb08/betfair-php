<?php

namespace Betfair\Model;

abstract class MarketBettingType
{

    const ODDS                       = "ODDS";  //Odds Market
    const LINE                       = "LINE";  //Line Market
    const RANGE                      = "RANGE"; //Range Market
    const ASIAN_HANDICAP_DOUBLE_LINE = "ASIAN_HANDICAP_DOUBLE_LINE";    //Asian Handicap Market
    const ASIAN_HANDICAP_SINGLE_LINE = "ASIAN_HANDICAP_SINGLE_LINE";    //Asian Single Line Market
    const FIXED_ODDS                 = "FIXED_ODDS";
    /**
     * Sportsbook Odds Market.
     * This type is deprecated and will be removed in future releases,
     * when Sportsbook markets will be represented as ODDS market but with a different product type.
     */


} 