<?php

namespace EEBasicPriceSearchEngineCustom;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

/**
 * Class EEBasicPriceSearchEngineCustomServiceProvider
 * @package EEBasicPriceSearchEngineCustom
 */
class EEBasicPriceSearchEngineCustomServiceProvider extends DataExchangeServiceProvider
{
    /**
     * Abstract function for registering the service provider.
     */
    public function register()
    {

    }

    /**
     * Adds the export format to the export container.
     *
     * @param ExportPresetContainer $container
     */
    public function exports(ExportPresetContainer $container)
    {
        $container->add(
            'BasicPriceSearchEngineCustom-Plugin',
            'EEBasicPriceSearchEngineCustom\ResultField\BasicPriceSearchEngine',
            'EEBasicPriceSearchEngineCustom\Generator\BasicPriceSearchEngine',
            '',
            true,
            true
        );
    }
}