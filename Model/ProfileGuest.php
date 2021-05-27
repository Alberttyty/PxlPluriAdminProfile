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

namespace PxlPluriAdminProfile\Model;

use PxlPluriAdminProfile\Model\Base\AdminProfile;

/**
 * Class ProfileGuest
 * @package PxlPluriAdminProfile\Model
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
class ProfileGuest extends AdminProfile
{
    /** @var string*/
    protected $code = 'GUEST';

    /** @var array*/
    protected $title = [
        'en_US' => 'Member',
        'fr_FR' => 'Membre'
    ];
    protected $chapo = [
        'en_US' => 'Back office access without any rights.',
        'fr_FR' => 'Accès à l\'espace privé du site sans aucun droit.'
    ];

    protected $resourceAccess;

    protected $moduleAccess;
}
