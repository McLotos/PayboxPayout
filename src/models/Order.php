<?php

/*
 * This file is part of the Payout package in (c)Paybox Integration Component.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Paybox\Payout\Models;

use Paybox\Core\Abstractions\Order as CoreOrder;

/**
 * @see Paybox\Core\Abstractions\Order
 *
 * @package Paybox\Pay\Models
 * @version 1.2.2
 * @author Sergey Astapenko <sa@paybox.money> @link https://paybox.money
 * @copyright LLC Paybox.money
 * @license GPLv3 @link https://www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 * @property-write string $id
 * @property-write int $amount
 * @property-write string $description
 *
 * @method setId(string $id):bool
 * @method setAmount(int $amount):bool
 * @method setDescription(string $description):bool
 * @method setTimeLimit(int $timeLimit):bool
 *
 */

class Order extends CoreOrder {

    public $timeLimit;

    public function __construct() {
        parent::__construct();
        $this->required('id');
        $this->required('amount');
        $this->required('description');
        $this->required('timeLimit');
    }
}
