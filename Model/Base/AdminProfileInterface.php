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

namespace PxlPluriAdminProfile\Model\Base;

/**
 * Class AdminProfileInterface
 * @package PxlPluriAdminProfile\Model\Base
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
interface AdminProfileInterface
{
    /* Getters class methods */
    public function getCode();
    public function getLocale();
    public function getTitle();
    public function getChapo();
    public function getResourceAccess();
    public function getModuleAccess();

    /* Setters class methods */
    public function setCode($code);
    public function setLocale($locale);
    public function setTitle($title);
    public function setChapo($chapo);
    public function setResourceAccess($resourceAccess);
    public function setModuleAccess($moduleAccess);
}
