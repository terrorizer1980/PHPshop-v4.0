<?php
if (isset($_GET['m_orderid']))
{
	$order_id = preg_replace('/[^a-zA-Z0-9_-]/', '', substr($_GET['m_orderid'], 0, 32));
	header("Location: " . $SysValue['dir']['dir'] . "/users/order.html?orderId=" . $order_id . "#PphpshopOrder");
}
?>
