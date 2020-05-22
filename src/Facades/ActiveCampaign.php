<?php

namespace jaap115\ActiveCampaign\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \jaap115\ActiveCampaign\ActiveCampaignService
 */
class ActiveCampaign extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'activecampaign';
    }
}
