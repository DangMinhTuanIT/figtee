<?php 
defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}
 $id = $product->get_id();
	 $link_moteefe = get_field('link_moteefe',$id);
preg_match('/\?color\=([^\&]+)?/', $link_moteefe, $output_array);
$arr = explode('&product=', $link_moteefe);
?>
<div>
	
<form class="cart form-moteefe"  action="<?php echo $link_moteefe!='' ? $link_moteefe : '' ?>" method="get">
<button type="submit" class="single_add_to_cart_button button alt">SELECT STYLE AND CHOOSE SIZE</button>
<input type="hidden" name="color" value="<?php echo count($output_array)>0 ? $output_array[1] : ''; ?>">
<input type="hidden" name="product" value="<?php echo count($arr)>0 ? $arr[1] : '' ?>">
</form>
</div>

<style>
	.form-moteefe{
		margin-bottom: 0
	}
	.form-moteefe .single_add_to_cart_button {
		width: 100%;
		margin-top: 10px;
		margin-bottom: 10px;
		padding: 5px;
	}
</style>