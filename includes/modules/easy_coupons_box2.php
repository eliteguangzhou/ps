<?php /*  Released under the GNU General Public License */
if ($ec_active) {
?>
<form id="form_couponcode" action="<?php echo tep_href_link(FILENAME_SHOPPING_CART)?>" method="POST">
<table cellspacing="0" cellpadding="0" id="ec_coupon">
  <tr>
   <td width="100%" align="center">
    <table class="bordergray" width="100%">
     <tr>
        <td align="right" style="padding-right: 20px;line-height:100%;text-align:center;text-size:2em;">
            <?php echo EC_COUPONCODE;?>
        </td>
     </tr>
     <tr>
        <td  class="ec_input">
          <?php
            echo tep_draw_input_field('coupon_code', '', ' size="'.($ec_clth+5).'"  maxlength="'.$ec_clth.'" class="inputbox" id="couponcode" ', 'text', false);
          ?>
          <?php
            echo ' ' .tep_hide_session_id() . tep_image_submit('button_reduction.gif', 'OK', ' name="confirm" ');
          ?>
        </td>
     </tr>
     <tr>
        <td align="right" style="padding-right: 20px;">

        </td>
     </tr>
    </table>
   </td>
  </tr>
</table>
</form>
<?php } ?>