<?php

namespace oe\nncoupon\Model;

use \oxDb;
use OxidEsales\Eshop\Core\Registry;

class AvaliableCouponsModel
{
    public function getVoucherSeriesData()
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
