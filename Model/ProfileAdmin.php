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
 * Class ProfileAdmin
 * @package PxlPluriAdminProfile\Model
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
class ProfileAdmin extends AdminProfile
{
    /** @var string*/
    protected $code = 'ADMIN';

    /** @var array*/
    protected $title = [
        'en_US' => 'Administrator',
        'fr_FR' => 'Administrateur'
    ];
    protected $chapo = [
        'en_US' => '',
        'fr_FR' => ''
    ];

    protected $resourceAccess = [
        'admin.address'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.administrator' => [AccessManager::VIEW, AccessManager::CREATE],
        'admin.configuration.area'          => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.attribute'     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.category'                    => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.configuration'               => [AccessManager::VIEW],
        'admin.content'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.country'       => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.coupon'                      => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.customer'                    => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.feature'       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.folder'                      => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.language'      => [AccessManager::UPDATE],
        'admin.order'                       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.product'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.shipping-zone' => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.configuration.template'      => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.home'                        => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.store'         => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.translations'  => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.brand'                       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.sales'                       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
        'admin.administrator'               => [AccessManager::VIEW],
        'admin.export'                      => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.tools'                       => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.import'                      => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.search'                      => [AccessManager::VIEW]
    ];

    protected $moduleAccess = [
        'Carousel'                          => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
    ];
}
