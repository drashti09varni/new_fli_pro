<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css">
</head>

<body>

    <div class="container-fluid py-3 header-container" style="background-color:#2874f0">
        <div class="row header">
            <div class="col-5">
                <div class="menu-logo" style="display: flex;align-items: center;">

                    <div class="menu-icon" id="back_btn">
                    <a class="Z4_K_h fnd_amz" href="<?php echo base_url() ?>"
                                                style="width:95px">
                        <svg width="19" height="16" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.556 7.847H1M7.45 1L1 7.877l6.45 6.817" stroke="#FFF" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                        </svg>
</a>
                    </div>
                    <a class="Z4_K_h fnd_amz" href="<?php echo base_url() ?>" style="width:95px">
                                            <img src="<?php echo base_url() ?><?php echo $web_settings['logo']; ?>"
                                                class="_31Y9yB" style="width:85px">
                                        </a>
                </div>
            </div>
            <div class="col-2"></div>
            <a href="#/mobile.html#" class="_3NH1qf fnd_amz col-5" style="text-align: right;">
                <div class="menu-icon">
                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#FFF" fill-rule="evenodd">
                            <path
                                d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203">
                            </path>
                            <path
                                d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="menu-icon menu-icon2">
                    <svg width="16" height="16" viewBox="0 0 15 15"
                        xmlns="external452e452e452e452e.html?link=http://www.w3.org/2000/svg">
                        <g fill="#fff" fill-rule="evenodd">
                            <path
                                d="m5.189 13.04c0 .996-.791 1.804-1.767 1.804-.976 0-1.767-.808-1.767-1.804 0-.996.791-1.804 1.767-1.804.976 0 1.767.808 1.767 1.804">
                            </path>
                            <path
                                d="m14.912 2.259h-14.298l2.247 6.917c.042.129.16.216.293.216h8.06c-.064.69-.629 1.841-1.702 1.841h-6.04l1.072 1.991h5.611c1.881 0 2.938-2.278 3.657-4.719.888-3.01 1.219-6.245 1.106-6.245">
                            </path>
                            <path
                                d="m.615 2.259l-.592-1.828c-.08-.207.069-.431.287-.431h1.482c.126 0 .24.079.287.198l.682 2.061c0 0-.63 1.642-1.942.066">
                            </path>
                            <path d="m2.262.756c0 0 .498 1.503 2.234 1.503l-1.736.749-1.104-.749.607-1.503"></path>
                            <path
                                d="m13.424 13.325c0 .837-.664 1.516-1.484 1.516-.82 0-1.484-.679-1.484-1.516 0-.837.664-1.516 1.484-1.516.82 0 1.484.679 1.484 1.516">
                            </path>
                        </g>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <h1>Contact Us !</h1>

                <p style="font-size: 17px;">Please email us if you have any queries about the site, advertising, or
                    anything else.</p>

                <div style="text-align: center;">


                    <p style="">Email:</i> <b><i> <span id="W_Email"><a
                                        href="mailto:test@gmail.com"><?php echo $email;?></a></span></i></b><br>
                    </p>

                    <p style="">Number:</i> <b><i> <span id="W_Email"><a
                                        href="tel:7600176097"><?php echo $contact;?></a></span></i></b><br>

                    </p>

                    <p style="">Address:</i> <b><i> <span id="W_Email"><?php echo $address;?></span></i></b><br>


                    </p>

                    <h3 style="color: #3e005d;">We will revert you as soon as possible...!</h3>
                    <p style="color: #3e005d; text-align: center;">Thank you for contacting us! <br><b>Have a great
                            day</b></p>
                   
                </div>


            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>

</html>