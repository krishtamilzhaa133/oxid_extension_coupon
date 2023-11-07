[{$smarty.block.parent}]
  <li class="list-group-item [{if $active_link == "avaliablecoupons"}]active[{/if}]">
       <a class="list-group-link" href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=avaliablecoupons"}]" title="[{oxmultilang ident="AVALIABLE_COUPON_TITLE"}]">[{oxmultilang ident="AVALIABLE_COUPONS_NN"}]</a>
       </li>



