<?php
  class nb_products_discount {
    var $discount = 0;
    var $nb = 0;

    function nb_products_discount () {
      $this->total();
    }

    function total() {
        global $cart,$easy_discount;
        $this->discount = 0;
        if (ACTIVATE_DISCOUNT_NB_PRODUCTS) {
            $discounts = explode('-', MAX_NB_PRODUCTS_DISCOUNT);
            $nb_products = $cart->count_contents(false);
			
	 		 $discountsc = $easy_discount->get_all();
            foreach ($discountsc as $discount){
            	if (in_array($discount['generated_by'], array('pack_reduction'))){
            		$nb_products -= 4;//$list = explode('-','8:5-9:10-10:15');
            	}
            }
            
			//Get currency value
			$rs = mysql_query('SELECT value FROM '.TABLE_CURRENCIES.' WHERE code = "EUR"');
			$rs = mysql_fetch_assoc($rs);
			$currency = $rs['value'];

            foreach ($discounts as $index => $discount) {
                $discounts[$index] = explode(':', $discount);

                if ($discounts[$index][0] <= $nb_products && $discounts[$index][0] > $this->nb) {
                    $this->nb = $discounts[$index][0];
                    $this->discount = $discounts[$index][1] / $currency;
                }
            }
        }

        return $this->discount;
    }
  }
?>