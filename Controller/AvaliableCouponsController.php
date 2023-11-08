<?php

namespace oe\nncoupon\Controller;
use OxidEsales\Eshop\Core\Registry;
use oxRegistry;
use oe\nncoupon\Model\AvaliableCouponsModel;

class AvaliableCouponsController extends \OxidEsales\Eshop\Application\Controller\AccountController
{
    protected $_sThisTemplate = 'displaycouponlist.tpl';

    public function render()
    {
        parent::render();
        $oUser = $this->getUser();

        if (!$oUser) {
            return $this->_sThisLoginTemplate;
        }

        // $userId = $oUser->getId();
        // $this->addTplParam('userId', $userId);
        // $krish="krishnaraj";
        // $this->addTplParam('krish', $krish);
        $voucherModel = oxNew(AvaliableCouponsModel::class);
        $voucherSeriesData = $voucherModel->getVoucherSeriesData();
        $this->addTplParam('voucherSeriesData', $voucherSeriesData);
       

        return $this->_sThisTemplate;
    }
    public function getBreadCrumb()
    {
        $aPaths = [];
        $aPath = [];
        $oUtils = Registry::getUtilsUrl();
        $iBaseLanguage = Registry::getLang()->getBaseLanguage();
        $sSelfLink = $this->getViewConfig()->getSelfLink();

        $aPath['title'] = Registry::getLang()->translateString('MY_ACCOUNT', $iBaseLanguage, false);
        $aPath['link'] = Registry::getSeoEncoder()->getStaticUrl($sSelfLink . 'cl=account');
        $aPaths[] = $aPath;

        $aPath['title'] = Registry::getLang()->translateString('AVALIABLE_COUPON_TITLE',null, false);
        $aPath['link'] = $this->getLink();
        
        $aPaths[] = $aPath;

        return $aPaths;
    }


}
