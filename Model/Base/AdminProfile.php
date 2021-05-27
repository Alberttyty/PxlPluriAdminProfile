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
 * Class AdminProfile
 * @package PxlPluriAdminProfile\Model
 * @author Thierry CARESMEL <thierry@pixel-plurimedia.fr>
 */
class AdminProfile implements AdminProfileInterface
{
    /** @var int*/
    protected $id;

    /** @var string*/
    protected $code;
    protected $locale = 'en_US';

    /** @var array*/
    protected $title;
    protected $chapo;
    protected $resourceAccess;
    protected $moduleAccess;

    protected $properties = ['locale', 'title', 'chapo', 'resourceAccess', 'moduleAccess'];

    /* Consructors class methods*/
    public function __construct() {
        return $this;
    }

    public static function create($code) {
        $classname = 'Profile'.ucfirst($code);
        $profileClass = new \ReflectionClass('PxlPluriAdminProfile\\Model\\'.$classname);
        return $profileClass->newInstance();
    }

    /* Getters class methods */
    public function getCode() {
        return $this->code;
    }

    public function getLocale() {
        return $this->locale;
    }

    public function getTitle() {
        return $this->title[$this->getLocale()];
    }

    public function getChapo() {
        return $this->chapo[$this->getLocale()];
    }

    public function getResourceAccess() {
        return $this->resourceAccess;
    }

    public function getModuleAccess() {
        return $this->moduleAccess;
    }

    /* Setters class methods */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
        return $this;
    }

    public function setTitle($title) {
        $this->title[$this->getLocale()] = $title;
        return $this;
    }

    public function setChapo($chapo) {
        $this->chapo[$this->getLocale()] = $chapo;
        return $this;
    }

    public function setResourceAccess($resourceAccess) {
        $this->resourceAccess = $resourceAccess;
        return $this;
    }

    public function setModuleAccess($moduleAccess) {
        $this->moduleAccess = $moduleAccess;
        return $this;
    }
}
