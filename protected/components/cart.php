<?php
class Cart {

    static function addCart($pid, $q = 1) {
      
        $cart = Yii::app()->session['cart'];
       
        if (empty($cart)) {
           
            $cart[$pid] = $q;
        } else {
            
            if (array_key_exists($pid, $cart)) {
                        $cart[$pid] = ($cart[$pid] + $q);
            
            } else {
                $cart[$pid] = $q;
            }
        }
      
        Yii::app()->session['cart'] = $cart;
    }

    static function updateCart($pid, $q) {
        $cart = Yii::app()->session['cart']; 
        if (array_key_exists($pid, $cart)) {
            $cart[$pid] = $q;
        }
        Yii::app()->session['cart'] = $cart;
    }

    static function deleteCartItem($pid) {
        $cart = Yii::app()->session['cart']; 
        if (array_key_exists($pid, $cart)) {
            unset($cart[$pid]);
        }
        Yii::app()->session['cart'] = $cart;
    }

}

?>
