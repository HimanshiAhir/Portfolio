<?php 
	$kycpage = 'active';
	include 'header.php';
?>

    <main class="sp-main-wrapper">


        <section class="sp-kyc-status" aria-label="KYC page">
            <div class="sp-container">
                <div class="sp-page-header sp-flex sp-content-between">
                    <h2 class="sp-page-title">Complete KYC</h2>
                </div>
                <article class="sp-card" style="min-height: 50vh;">
                    <div class="sp-page-header sp-flex sp-content-between sp-items-center">
                        <h2 class="sp-page-subtitle sp-lg-x-auto sp-text-lg-center">KYC Status</h2>
                    </div>
                    <div class="sp-kyc-status-wrap" data-progress="1">
                        <div class="sp-kyc-status-item">Pending</div>
                        <div class="sp-kyc-status-item">in process</div>
                        <div class="sp-kyc-status-item">verified</div>
                        <div class="sp-kyc-status-item">approved</div>
                    </div>
                </article>
            </div>
        </section>

    </main>

<?php 
	include 'footer.php';
?>