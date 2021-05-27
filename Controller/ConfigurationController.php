<?php
/*************************************************************************************/
/*      This file is part of the module PxlPluriAdminProfile                         */
/*                                                                                   */
/*      Copyright (c) Pixel Plurimedia                                               */
/*      email : dev@pixel-plurimedia.fr                                              */
/*      web : https://pixel-plurimedia.fr                                            */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace PxlPluriAdminProfile\Controller;

use PxlPluriAdminProfile\PxlPluriAdminProfile;
use PxlPluriAdminProfile\Model\Base\AdminProfile;

use Thelia\Controller\Admin\BaseAdminController;
use Thelia\Core\Security\AccessManager;
use Thelia\Core\Security\Resource\AdminResources;
use Thelia\Core\Translation\Translator;

use Thelia\Core\Event\TheliaEvents;
use Thelia\Tools\URL;

use Thelia\Model\ProfileQuery;
use Thelia\Core\Event\Profile\ProfileEvent;

/**
 * Class ConfigurationController
 * @package PxlPluriAdminProfile\Controller
 * @author Thierry Caresmel <thierry@pixel-plurimedia.fr>
 */
class ConfigurationController extends BaseAdminController
{
    public function saveAction()
    {
        if (null !== $response = $this->checkAuth(AdminResources::MODULE, [PxlPluriAdminProfile::DOMAIN_NAME], AccessManager::VIEW)) {
            return $response;
        }

        $form = $this->createForm(PxlPluriAdminProfile::CONFIG_FORM);

        try {
            $data = $this->validateForm($form)->getData();

            $profileCodes = PxlPluriAdminProfile::PROFILE_CODE;

            foreach($profileCodes as $profileCode) {
                $profile = AdminProfile::create($profileCode)->setLocale($this->getSession()->getLang()->getLocale());

                if (!empty($data[$profileCode])) $this->_createProfile($profile);
                else $this->_deleteProfile($profile->getCode());
            }

        } catch (\Exception $e) {
            $this->setupFormErrorContext(
                Translator::getInstance()->trans("Admin profiles management error !", [], PxlPluriAdminProfile::DOMAIN_NAME),
                $e->getMessage(),
                $form
            );
            return $this->generateRedirect(URL::getInstance()->absoluteUrl('/admin/module/' . PxlPluriAdminProfile::getModuleCode()));
        }

        return $this->generateSuccessRedirect($form);
    }

    /**
     * Create a profile
     */
    private function _createProfile($profile)
    {
        $event = new ProfileEvent();
        $event
            ->setCode($profile->getCode())
            ->setLocale($profile->getLocale())
            ->setTitle($profile->getTitle())
            ->setChapo($profile->getChapo())
            ->setResourceAccess($profile->getResourceAccess())
            ->setModuleAccess($profile->getModuleAccess())
        ;

        $this->getDispatcher()->dispatch(TheliaEvents::PROFILE_CREATE, $event);
        $event->setId($event->getProfile()->getId());

        if(!empty($event->getResourceAccess())) $this->getDispatcher()->dispatch(TheliaEvents::PROFILE_RESOURCE_ACCESS_UPDATE, $event);
        if(!empty($event->getModuleAccess())) $this->getDispatcher()->dispatch(TheliaEvents::PROFILE_MODULE_ACCESS_UPDATE, $event);
    }

    /**
     * Delete a profile
     */
    private function _deleteProfile($profileCode)
    {
        if(null !== $profile = ProfileQuery::create()->findOneByCode($profileCode)) {
            $event = new ProfileEvent($profile);
            $event->setId($profile->getId());

            $this->getDispatcher()->dispatch(TheliaEvents::PROFILE_DELETE, $event);
        }
    }

}
