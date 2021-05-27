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
 * Class ProfileSpip
 * @package PxlPluriAdminProfile\Model
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
class ProfileSpip extends AdminProfile
{
    /** @var string*/
    protected $code = 'SPIP';

    /** @var array*/
    protected $title = [
        'en_US' => 'Writer',
        'fr_FR' => 'Rédacteur'
    ];
    protected $chapo = [
        'en_US' => 'Manages the textual contents of the website.',
        'fr_FR' => 'Gère les contenus textuels du site internet.'
    ];

    protected $resourceAccess = [
        'admin.category'                    => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration'               => [AccessManager::VIEW],
        'admin.content'                     => [AccessManager::VIEW, AccessManager::UPDATE, AccessManager::CREATE],
        'admin.configuration.feature'       => [AccessManager::CREATE],
        'admin.folder'                      => [AccessManager::VIEW, AccessManager::UPDATE],
        'admin.configuration.language'      => [AccessManager::UPDATE],
        'admin.product'                     => [AccessManager::VIEW, AccessManager::UPDATE],
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
