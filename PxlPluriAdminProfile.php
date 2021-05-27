<?php
/*************************************************************************************/
/*      This file is part of the PxlPluriAdminProfile.                               */
/*                                                                                   */
/*      Copyright (c) Pixel Plirimedia                                               */
/*      email : dev@pixel-plurimedia.fr                                              */
/*      web : https://pixel-plurimedia.fr                                            */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace PxlPluriAdminProfile;

use Thelia\Module\BaseModule;

/**
 * Class PxlPluriAdminProfile
 * @package PxlPluriAdminProfile
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
class PxlPluriAdminProfile extends BaseModule
{
    /** @var string */
    const DOMAIN_NAME = 'pxlpluriadminprofile';

    /** @var array */
    const PROFILE_CODE = [
        'guest',
        'spip',
        'thelia',
        'ro',
        'web',
        'admin',
    ];

    /** Forms */
    const CONFIG_FORM = self::DOMAIN_NAME.'.config_form';

}
