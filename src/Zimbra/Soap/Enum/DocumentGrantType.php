<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Soap\Enum;

/**
 * DocumentGrantType enum class
 * @package   Zimbra
 * @category  Soap
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class DocumentGrantType extends Base
{
    /**
     * Constant for value 'all'
     * @return string 'all'
     */
    const ALL = 'all';

    /**
     * Constant for value 'pub'
     * @return string 'pub'
     */
    const PUB = 'pub';
}
