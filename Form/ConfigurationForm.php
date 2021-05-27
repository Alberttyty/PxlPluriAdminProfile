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

namespace PxlPluriAdminProfile\Form;

use PxlPluriAdminProfile\PxlPluriAdminProfile;
use PxlPluriAdminProfile\Model\Base\AdminProfile;

use Thelia\Form\BaseForm;
use Thelia\Core\Translation\Translator;
use Thelia\Model\ProfileQuery;

/**
 * Class ConfigurationForm
 * @package PxlPluriAdminProfile\Form
 * @author Thierry Caresmel <thierry@pixel-plurimedia.fr>
 */
class ConfigurationForm extends BaseForm
{
    public function getName()
    {
        return "pxlpluriadmin_profile_config_form";
    }

    protected function buildForm()
    {
        $translator = Translator::getInstance();
        $locale = $this->getRequest()->getSession()->getLang()->getLocale();

        $profileCodes = PxlPluriAdminProfile::PROFILE_CODE;

        foreach($profileCodes as $profileCode) {
            $profile = AdminProfile::create($profileCode)->setLocale($locale);
            $profileName = ucfirst($profile->getTitle());
            $existingProfile = ProfileQuery::create()->findOneByCode($profile->getCode());

            $this->formBuilder
                ->add($profileCode, "checkbox", [
                      "value" => $existingProfile,
                      "label" => $translator->trans($profileName, [], PxlPluriAdminProfile::DOMAIN_NAME),
                      "label_attr" => ["for" => $profileCode],
                      "required" => false,

                ])
            ;
        }
    }
}
