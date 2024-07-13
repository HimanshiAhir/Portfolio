<aside class="sp-sidebar" aria-label="dashboard navigation">
    <a href="./index.php" class="sp-logo-link sp-sm-none" title="click here for main page">
        <img src="./assets/media/sabpaisa.svg" alt="sab paisa logo svg"></a>
    <nav class="sp-nav">
        <ul class="sp-nav-list">
            <li class="sp-nav-item <?php echo $mainpage;?>">
                <a href="./index.php" class="sp-nav-link"><i class="spi-dashboard"></i> dashboard <i
                        class="spi-chevron-right"></i></a>
            </li>
            <li class="sp-nav-item sp-sm-none <?php echo $kycpage;?>">
                <a href="./kyc.php" class="sp-nav-link"><i class="spi-kyc"></i> complete KYC <i
                        class="spi-chevron-right"></i></a>
            </li>
            <li class="sp-nav-item <?php echo $kitpage;?>">
                <a href="./integration.php" class="sp-nav-link"><i class="spi-integration"></i> integration kit <i
                        class="spi-chevron-right"></i></a>
            </li>
            <li class="sp-nav-item <?php echo $productspage;?>">
                <a href="./products.php" class="sp-nav-link"><i class="spi-product-catalog"></i> product catalog <i
                        class="spi-chevron-right"></i></a>
            </li>
            <li class="sp-more-nav-wrap">
                <ul class="sp-more-nav-list">
                    <li class="sp-nav-item <?php echo $tnxpage;?>">
                        <a href="./transaction-history.php" class="sp-nav-link"><i class="spi-tnx-history"></i> transaction
                            history <i class="spi-chevron-right"></i></a>
                    </li>
                    <li class="sp-nav-item <?php echo $tnxreportpage;?>">
                        <a href="./transaction-report.php" class="sp-nav-link"><i class="spi-report"></i> settlement report <i
                                class="spi-chevron-right"></i></a>
                    </li>
                    <li class="sp-nav-item <?php echo $refundpage;?>">
                        <a href="./transaction-refund.php" class="sp-nav-link"><i class="spi-tnx-history"></i> refund tnx
                            history <i class="spi-chevron-right"></i></a>
                    </li>
                    <li class="sp-nav-item <?php echo $chargebackpage;?>">
                        <a href="./transaction-chargeback.php" class="sp-nav-link"><i class="spi-chargeback-history"></i> chargeback
                            tnx history <i class="spi-chevron-right"></i></a>
                    </li>
                    <li class="sp-nav-item <?php echo $enquirypage;?>">
                        <a href="./transaction-enquiry.php" class="sp-nav-link"><i class="spi-tnx-enquiry"></i> transaction
                            enquiry <i class="spi-chevron-right"></i></a>
                    </li>
                    <li class="sp-nav-item <?php echo $tnxsummarypage;?>">
                        <a href="./transaction-summary.php" class="sp-nav-link"><i class="spi-tnx-summary"></i> transaction
                            summary <i class="spi-chevron-right"></i></a>
                    </li>
                    <li class="sp-nav-item <?php echo $faqpage;?>">
                        <a href="./faq.php" class="sp-nav-link"><i class="spi-faq"></i> FAQs/Help <i
                                class="spi-chevron-right"></i></a>
                    </li>
                </ul>
            </li>
            <li class="sp-nav-item sp-tnx-nav-item sp-lg-none <?php echo $morepage;?>">
                <a href="javascript:void(0)" class="sp-nav-link"><i class="spi-more"></i> <span
                        class="sp-more-text">more options</span> <i class="spi-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</aside>