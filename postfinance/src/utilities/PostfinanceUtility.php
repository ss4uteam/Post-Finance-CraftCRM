<?php
/**
 * postfinance plugin for Craft CMS 3.x
 *
 * plugin for post finance
 *
 * @link      https://klarplan.ch
 * @copyright Copyright (c) 2022 klarplanAg
 */

namespace klarplan\postfinance\utilities;

use klarplan\postfinance\Postfinance;
use klarplan\postfinance\assetbundles\postfinanceutilityutility\PostfinanceUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * postfinance Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    klarplanAg
 * @package   Postfinance
 * @since     1.0.0
 */
class PostfinanceUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('postfinance', 'PostfinanceUtility');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'postfinance-postfinance-utility';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@klarplan/postfinance/assetbundles/postfinanceutilityutility/dist/img/PostfinanceUtility-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(PostfinanceUtilityUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'postfinance/_components/utilities/PostfinanceUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}
