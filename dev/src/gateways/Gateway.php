<?php

namespace craft\commerce\postfinance\gateways;

use Craft;
use craft\commerce\base\Gateway as BaseGateway;
use craft\web\View;

class Gateway extends BaseGateway
{
    public static function displayName(): string
    {
        return Craft::t('commerce-postfinance', 'PostFinance Checkout');
    }

    public function getPaymentFormHtml(array $params)
    {
        $view = Craft::$app->getView();

        $previousMode = $view->getTemplateMode();
        $view->setTemplateMode(View::TEMPLATE_MODE_CP);

        $html = $view->renderTemplate('commerce-postfinance/paymentForm', $params);
        $view->setTemplateMode($previousMode);

        return $html;
    }
}