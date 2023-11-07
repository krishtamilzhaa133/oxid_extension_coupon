<?php

namespace oe\nncoupon\Controller;
use \oxDb;

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

        $userId = $oUser->getId();

        // Assign the user ID to the template
        $this->addTplParam('userId', $userId);
        $krish="krishnaraj";
        $this->addTplParam('krish', $krish);
        $voucherSeriesData = $this->getVoucherSeriesData();
        $this->addTplParam('voucherSeriesData', $voucherSeriesData);

        return $this->_sThisTemplate;
    }
    protected function getVoucherSeriesData()
{
    $oDB = oxDb::getDb();

    $sSql = "SELECT
    vs.OXID,
    vs.OXSHOPID,
    vs.OXSERIENR,
    vs.OXSERIEDESCRIPTION,
    vs.OXDISCOUNT,
    vs.OXDISCOUNTTYPE,
    vs.OXBEGINDATE,
    vs.OXENDDATE,
    vs.OXMINIMUMVALUE,
    v.OXVOUCHERNR
FROM
    oxvoucherseries AS vs
INNER JOIN
    oxvouchers AS v
ON
    vs.OXID = v.OXVOUCHERSERIEID
GROUP BY
    v.OXVOUCHERNR
";
    $voucherSeriesData = $oDB->getAll($sSql);

    return $voucherSeriesData;
}

}
