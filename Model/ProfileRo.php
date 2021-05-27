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
use Thelia\Core\Security\AccessManager;

/**
 * Class ProfileRo
 * @package PxlPluriAdminProfile\Model
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
class ProfileRo extends AdminProfile
{
    /** @var string*/
    protected $code = 'RO';

    /** @var array*/
    protected $title = [
        'en_US' => 'Manager',
        'fr_FR' => 'Manager'
    ];
    protected $chapo = [
        'en_US' => '',
        'fr_FR' => ''
    ];

    protected $resourceAccess = [
        'admin.address'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.area'          => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.attribute'     => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.category'                    => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.configuration'               => [AccessManager::VIEW],
        'admin.content'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.country'       => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.coupon'                      => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.customer'                    => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.feature'       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.folder'                      => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.language'      => [AccessManager::UPDATE],
        'admin.order'                       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.product'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.home'                        => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.store'         => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.translations'  => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.brand'                       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.sales'                       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.tools'                       => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.search'                      => [AccessManager::VIEW]
    ];

    protected $moduleAccess = [
        'Carousel'                          => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
    ];
}
