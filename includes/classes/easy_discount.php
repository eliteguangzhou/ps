<?php
  class easy_discount {
    var $discounts;
	
    	
    function easy_discount () {
      $this->discounts = array();
    }

    function reset() {
      $this->discounts = array();
    }

    function set($array) {
      $this->discounts[$array['name']] = $array;
    }

    function add($array) { // obsolete
      $this->discounts[$array['name']] = $array;
    }

    function clear($type) {
      if (isset($this->discounts[$type])) unset($this->discounts[$type]);
    }

    function remove_type($type) { // obsolete
      if (isset($this->discounts[$type])) unset($this->discounts[$type]);
    }

    function count() {
      return sizeof($this->discounts);
    }

    function get($type) {
      return $this->discounts[$type];
    }

    function total() {
      reset($this->discounts);
      $total = 0;
      while (list($type, ) = each($this->discounts)) {
       $total = $total + $this->discounts[$type]['amount'];
      }
      return $total;
    }

    function get_all() {
      $discounts_array = array();
      reset($this->discounts);
      while (list($type, $array) = each($this->discounts)) {
          $discounts_array[] = $array;
      }
      return $discounts_array;
    }

    function recalculate() {
    	global $cart;
    	$total = $cart->count_contents(false);
    	reset($this->discounts);
    	while (list($type, $infos) = each($this->discounts)) {
    		if ($infos['type'] == 'p') {
    			$this->discounts[$type]['amount'] = $cart->show_total()*$infos['discount']/100;
    			error_log('ttttttttttttttttt');
    		}
    		elseif (in_array($infos['generated_by'],  array('customer_service', 'first_order','pack_reduction'))) {
    			$first_order = $cart->first_order();
    			error_log('----------------'.$total);
    			if ($infos['generated_by'] == 'coupon_pack' && ($total < 2 || !$first_order)) {
    				unset($this->discounts[$type]);
    				$temp = $this->discounts;
    				$this->discounts = array();
    				$i = 0;
    				foreach ($temp as $key => $value) {
    					$value['name'] = 'COUPON'.$i;
    					$this->discounts['COUPON'.$i] = $value;
    					$i++;
    				}
    			}
    			elseif ($infos['generated_by'] == 'customer_service' && ($total < 2 || !$first_order)) {
    				unset($this->discounts[$type]);
    				$temp = $this->discounts;
    				$this->discounts = array();
    				$i = 0;
    				foreach ($temp as $key => $value) {
    					$value['name'] = 'COUPON'.$i;
    					$this->discounts['COUPON'.$i] = $value;
    					$i++;
    				}
    			}
    			elseif ($infos['generated_by'] == 'first_order' && !$first_order) {
    				unset($this->discounts[$type]);
    				$temp = $this->discounts;
    				$this->discounts = array();
    				$i = 0;
    				foreach ($temp as $key => $value) {
    					$value['name'] = 'COUPON'.$i;
    					$this->discounts['COUPON'.$i] = $value;
    					$i++;
    				}
    			}
    			elseif ($infos['generated_by'] == 'pack_reduction'){
    				$query = 'SELECT p.products_id, p.products_quantity, p.products_status from products p, coupon_packs cp where cp.code = "'.$infos['code'].'" AND cp.products_model = p.products_model';
    				$result = tep_db_query($query);
    				$error = false;
    				$products = array();
    				while($rs = tep_db_fetch_array($result)) {
    					$products[] = $rs['products_id'];
    				}
    				$test = true;
    				foreach ($products as $id){
    					if (!$cart->in_cart($id)){
    						$test = false;
    					}
    				}
    				if (!$test){
    					unset($this->discounts[$type]);
    					$temp = $this->discounts;
    					$this->discounts = array();
    					$i = 0;
    					foreach ($temp as $key => $value) {
    						$value['name'] = 'COUPON'.$i;
    						$this->discounts['COUPON'.$i] = $value;
    						$i++;
    					}
    				}

    			}
    		}


    	}
    }
  }
?>