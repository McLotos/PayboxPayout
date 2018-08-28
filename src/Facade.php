<?php

/*
 * This file is part of the Payout package in (c)Paybox Integration Component.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Paybox\Payout;

use Paybox\Payout\Models\ {
    Config as ConfigModel,
    Customer as CustomerModel,
    Merchant as MerchantModel,
    Order as OrderModel
};

use Paybox\Core\ {
    Exceptions\Property as PropertyException,
    Exceptions\Connection as ConnectionException,
    Exceptions\Payment as PaymentException,
    Abstractions\DataContainer,
    Interfaces\Payout as iPayout
};

/**
 * Facade of Paybox\Payout classes
 * Simple facade for comfortable using a whole Paybox Payout functionality
 *
 * @package Paybox\Payout
 * @version 1.2.2
 * @author Sergey Astapenko <sa@paybox.money> @link https://paybox.money
 * @copyright LLC Paybox.money
 * @license GPLv3 @link https://www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 */

class Facade extends DataContainer implements iPayout {

    public function reg2reg() {
        try {
            $this->customer->required('cardIdTo');
            $this->save('reg2reg');
            $this->send();
        } catch(PropertyException | ConnectionException | RequestException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function reg2nonreg() {
        try {
            $this->config->required('backLink');
            $this->save('reg2nonreg');
            $this->send();
        } catch(PropertyException | ConnectionException | RequestException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function kazPost() {
        try {
            $this->customer->required('phone');
            $this->customer->required('uid');
            $this->save('kp/init');
            $this->send();
        } catch(PropertyException | ConnectionException | RequestException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function toIban() {
        try {

        } catch(PropertyException | ConnectionException | RequestException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function cashByCode() {
        try {

        } catch(PropertyException | ConnectionException | RequestException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getBalance() {
        try {
            $this->save('balance_status');
            $this->send();
        } catch(PropertyException | ConnectionException | RequestException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getStatus() {//paymentId or OrderId required
        try {
            $this->save('payment_status');
            $this->send();
        } catch(PropertyException | ConnectionException | RequestException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    protected function getBaseUrl() {
        return 'https://api.paybox.money/api/';
    }

}
