<?php

namespace craft\commerce\postfinance\gateways;

use Craft;
use craft\commerce\base\Gateway as BaseGateway;
use craft\commerce\base\RequestResponseInterface;
use craft\commerce\base\ShippingMethod;
use craft\commerce\elements\Order;
use craft\commerce\errors\PaymentException;
use craft\commerce\helpers\Currency;
use craft\commerce\models\Address;
use craft\commerce\models\payments\BasePaymentForm;
use craft\commerce\models\payments\OffsitePaymentForm;
use craft\commerce\models\PaymentSource;
use craft\commerce\models\Transaction;
use craft\commerce\paypalcheckout\PayPalCheckoutBundle;
use craft\commerce\paypalcheckout\responses\CheckoutResponse;
use craft\commerce\paypalcheckout\responses\RefundResponse;
use craft\commerce\Plugin;
use craft\helpers\ArrayHelper;
use craft\helpers\Json;
use craft\helpers\StringHelper;
use craft\helpers\UrlHelper;
use craft\web\Response as WebResponse;
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

    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate('commerce-postfinance/chargeSettings', ['gateway' => $this]);
    }

    public function completePurchase(Transaction $transaction): RequestResponseInterface
    {
        return $response;
    }

    public function capture(Transaction $transaction, string $reference): RequestResponseInterface
    {
      return $request;
    }

    public function createPaymentSource(BasePaymentForm $sourceData, int $userId): PaymentSource
    {
        return new PaymentSource(['userId' => $userId]);
    }

    public function deletePaymentSource($token): bool
    {
        return true;
    }

    public function getPaymentFormModel(): BasePaymentForm
    {
        return new PaymentForm();
    }

    public function refund(Transaction $transaction): RequestResponseInterface
    {
        return true;
    }

    public function authorize(Transaction $transaction, BasePaymentForm $form): RequestResponseInterface
    {
        return $source;
    }

    public function completeAuthorize(Transaction $transaction): RequestResponseInterface
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function purchase(Transaction $transaction, BasePaymentForm $form): RequestResponseInterface
    {   
        return true;
    }

    /**
     * @inheritdoc
     */
    public function processWebHook(): WebResponse
    {
        return $webResponse;
    }

    /**
     * @inheritdoc
     */
    public function supportsCapture(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsAuthorize(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsCompleteAuthorize(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsCompletePurchase(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsPaymentSources(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsPurchase(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsRefund(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsPartialRefund(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function supportsWebhooks(): bool
    {
        return true;
    }
}
