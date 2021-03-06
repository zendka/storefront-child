<?php
/**
 * WooCommerce specific functions called from outside this theme.
 */

/**
 * Get the product thumbnail for the loop.
 */
function woocommerce_template_loop_product_thumbnail() {
	echo '<figure>' . woocommerce_get_product_thumbnail() . '</figure>';
}

/**
 * Redefine the number of related products displayed.
 */
function woocommerce_output_related_products() {
	woocommerce_related_products( array(
		'posts_per_page' => 4,
		'columns'        => 4
	) );
}

/**
 * (Don't) output the Coupon form for the checkout.
 */
function woocommerce_checkout_coupon_form() {
}

/**
 * (Don't) output the WooCommerce Checkout Login Form
 */
function woocommerce_checkout_login_form() {
}