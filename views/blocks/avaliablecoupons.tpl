[{$smarty.block.parent}]
  <li class="list-group-item" [{if  $cl== "avaliablecoupons"}]class="active"[{/if}]><a href="[{oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=avaliablecoupons"}]" title="Avaliable Coupons">[{oxmultilang ident="AVALIABLE_COUPONS_NN"}]</a></li>



