<?php
/**
 * postfinance plugin for Craft CMS 3.x
 *
 * plugin for post finance
 *
 * @link      https://klarplan.ch
 * @copyright Copyright (c) 2022 klarplanAg
 */

namespace klarplan\postfinance\services;

use klarplan\postfinance\Postfinance;

use Craft;
use craft\base\Component;

/**
 * PostfinanceService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    klarplanAg
 * @package   Postfinance
 * @since     1.0.0
 */
class PostfinanceService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Postfinance::$plugin->postfinanceService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
