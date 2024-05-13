<?php


if (isset($_REQUEST['pay'])) {
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $app_result = $mydb->viewDueAppointment($conObj, $_REQUEST['pay']);
    $_SESSION['app_id'] = $_REQUEST['pay'];
    $p_result = $mydb->ShowProfile($conObj, $_SESSION['email']);
    $_SESSION['pname'] = $app_result['p_name'];
    $_SESSION['padd'] = $app_result['p_address'];
    $_SESSION['pphone'] = $p_result['phone'];
    $_SESSION['dname'] = $app_result['d_name'];
    $_SESSION['dcat'] = $app_result['d_cat'];

    // SSLCommerz payment gateway
    $post_data = array();
    $post_data['store_id'] = "onlin663c67129cd1e";
    $post_data['store_passwd'] = "onlin663c67129cd1e@ssl";
    $post_data['total_amount'] = $app_result['amount'];
    $post_data['currency'] = "BDT";
    $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();
    $post_data['success_url'] = "http://localhost/online_healthcare/view/patient/receipt.php";
    $post_data['fail_url'] = "http://localhost/new_sslcz_gw/fail.php";
    $post_data['cancel_url'] = "http://localhost/new_sslcz_gw/cancel.php";
    # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

    # EMI INFO
    $post_data['emi_option'] = "1";
    $post_data['emi_max_inst_option'] = "9";
    $post_data['emi_selected_inst'] = "9";

    # CUSTOMER INFORMATION
    $post_data['cus_name'] = $app_result['p_name'];
    $post_data['cus_email'] = $_SESSION['email'];
    $post_data['cus_add1'] = $app_result['p_address'];
    $post_data['cus_add2'] = "";
    $post_data['cus_city'] = "";
    $post_data['cus_state'] = "";
    $post_data['cus_postcode'] = "";
    $post_data['cus_country'] = "Bangladesh";
    $post_data['cus_phone'] = $p_result['phone'];
    $post_data['cus_fax'] = "";

    # SHIPMENT INFORMATION
    $post_data['ship_name'] = "Online Healthcare";
    $post_data['ship_add1 '] = "Dhaka";
    $post_data['ship_add2'] = "Dhaka";
    $post_data['ship_city'] = "Dhaka";
    $post_data['ship_state'] = "Dhaka";
    $post_data['ship_postcode'] = "1000";
    $post_data['ship_country'] = "Bangladesh";

    # OPTIONAL PARAMETERS
    $post_data['value_a'] = "ref001";
    $post_data['value_b '] = "ref002";
    $post_data['value_c'] = "ref003";
    $post_data['value_d'] = "ref004";

    # CART PARAMETERS
    $post_data['cart'] = json_encode(array(
        array("product" => "DHK TO BRS AC A1", "amount" => "200.00"),
        array("product" => "DHK TO BRS AC A2", "amount" => "200.00"),
        array("product" => "DHK TO BRS AC A3", "amount" => "200.00"),
        array("product" => "DHK TO BRS AC A4", "amount" => "200.00")
    ));
    $post_data['product_amount'] = "100";
    $post_data['vat'] = "5";
    $post_data['discount_amount'] = "5";
    $post_data['convenience_fee'] = "3";

    # REQUEST SEND TO SSLCOMMERZ
    $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $direct_api_url);
    curl_setopt($handle, CURLOPT_TIMEOUT, 30);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($handle, CURLOPT_POST, 1);
    curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


    $content = curl_exec($handle);

    $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

    if ($code == 200 && !(curl_errno($handle))) {
        curl_close($handle);
        $sslcommerzResponse = $content;
    } else {
        curl_close($handle);
        echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
        exit;
    }

    # PARSE THE JSON RESPONSE
    $sslcz = json_decode($sslcommerzResponse, true);

    if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != "") {
        # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
        # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
        echo "<meta http-equiv='refresh' content='0;url=" . $sslcz['GatewayPageURL'] . "'>";
        # header("Location: ". $sslcz['GatewayPageURL']);
        exit;
    } else {
        echo "JSON Data parsing error!";
    }
} elseif (isset($_SESSION['token'])) {
}
