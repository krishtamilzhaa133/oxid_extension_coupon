[{capture append="oxidBlock_content"}]
  
    <h1 class="page-header">[{oxmultilang ident="COUPONDISPLAY"}]</h1>
[{block name="account_displaycouponlist"}]

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="text-nowrap">
            <tr>
                <th>OXID COUPON ID</th>
                <th>SHOP ID</th>
                <th>COUPON NAME</th>
                <th>COUPON DESCRIPTION</th>
                <th>DISCOUNT</th>
                <th>DISCOUNT TYPE</th>
                <th>BEGIN DATE</th>
                <th>END DATE</th>
                <th>MINIMUM ORDER AMOUNT</th>
                <th>COUPON CODE</th>
            </tr>
        </thead>
        <tbody>
            [{foreach from=$voucherSeriesData item=row}]
                <tr>
                    [{foreach from=$row item=value}]
                        <td class="text-nowrap">[{$value}]</td>
                    [{/foreach}]
                </tr>
            [{/foreach}]
        </tbody>
    </table>
</div>


[{/block}]

[{/capture}]

[{capture append="oxidBlock_sidebar"}]
 [{include file="page/account/inc/account_menu.tpl" active_link="avaliablecoupons.tpl"}]
 
[{/capture}]

[{include file="layout/page.tpl" sidebar="Left"}]
