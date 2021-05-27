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
 * Class ProfileThelia
 * @package PxlPluriAdminProfile\Model
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
class ProfileThelia extends AdminProfile
{
    /** @var string*/
    protected $code = 'THELIA';

    /** @var array*/
    protected $title = [
        'en_US' => 'Vendor',
        'fr_FR' => 'Vendeur'
    ];
    protected $chapo = [
        'en_US' => 'Manages the catalog of the e-commerce.',
        'fr_FR' => 'Gère le catalogue produit de la boutique en ligne.'
    ];

    protected $resourceAccess = [
        'admin.category'                    => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.configuration'               => [AccessManager::VIEW],
        'admin.content'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.configuration.feature'       => [AccessManager::CREATE, AccessManager::DELETE],
        'admin.folder'                      => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.language'      => [AccessManager::UPDATE],
        'admin.order'                       => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.product'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.home'                        => [AccessManager::VIEW],
        'admin.configuration.store'         => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.translations'  => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.brand'                       => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.tools'                       => [AccessManager::VIEW]
    ];

    protected $moduleAccess = [
        'Carousel'                          => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE, AccessManager::DELETE],
    ];
}
