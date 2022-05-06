<?php

namespace craft\commerce\postfinance\models;

use craft\commerce\models\payments\BasePaymentForm;

class PaymentPage extends BasePaymentForm
{
    /**
     * @inheritdoc
     */
    protected function defineRules(): array
    {
        return [];
    }
}
