<?php
/**
 * postfinance plugin for Craft CMS 3.x
 *
 * plugin for post finance
 *
 * @link      https://klarplan.ch
 * @copyright Copyright (c) 2022 klarplanAg
 */

namespace klarplan\postfinance\console\controllers;

use klarplan\postfinance\Postfinance;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Postfinance Command
 *
 * The first line of this class docblock is displayed as the description
 * of the Console Command in ./craft help
 *
 * Craft can be invoked via commandline console by using the `./craft` command
 * from the project root.
 *
 * Console Commands are just controllers that are invoked to handle console
 * actions. The segment routing is plugin-name/controller-name/action-name
 *
 * The actionIndex() method is what is executed if no sub-commands are supplied, e.g.:
 *
 * ./craft postfinance/postfinance
 *
 * Actions must be in 'kebab-case' so actionDoSomething() maps to 'do-something',
 * and would be invoked via:
 *
 * ./craft postfinance/postfinance/do-something
 *
 * @author    klarplanAg
 * @package   Postfinance
 * @since     1.0.0
 */
class PostfinanceController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle postfinance/postfinance console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console PostfinanceController actionIndex() method\n";

        return $result;
    }

    /**
     * Handle postfinance/postfinance/do-something console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console PostfinanceController actionDoSomething() method\n";

        return $result;
    }
}
