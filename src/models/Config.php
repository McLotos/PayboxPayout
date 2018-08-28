<?php

/*
 * This file is part of the Payout package in (c)Paybox Integration Component.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Paybox\Payout\Models;

/**
 * @see Paybox\Core\Abstractions\Config
 *
 * @package Paybox\Payout\Models
 * @version 1.2.2
 * @author Sergey Astapenko <sa@paybox.money> @link https://paybox.money
 * @copyright LLC Paybox.money
 * @license GPLv3 @link https://www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 * @property string $currency
 * @property-write string $paymentSystem
 * @property string $encoding
 *
 * @method setCurencty(string $currency):bool
 * @method getCurrency():string
 * @method setPaymentSystem(string $paymentSystem):bool
 * @method setEncoding(string $charset):bool
 * @method getEncoding():string
 * @method setPostLink(string $postLink):bool
 * @method setbackLink(string $backlink):bool
 *
 */

use Paybox\Core\Abstractions\Config as CoreConfig;

class Config extends CoreConfig {

    protected $postLink;
    protected $backLink;

    public function __construct() {
        parent::__construct();
        $this->required('postLink');
    }
}
