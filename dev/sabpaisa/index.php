    <?php                                                                                                                                                                                                                               
	$mainpage = 'active';
	include 'header.php';
?>
    
    <main class="sp-main-wrapper">

        <section class="sp-dashboard" aria-label="dashboard page">
            <div class="sp-container">
                <div class="sp-page-header sp-flex sp-content-between sp-items-center">
                    <h2 class="sp-page-subtitle sp-lg-x-auto sp-text-lg-center">KYC Status</h2>
                    <a href="kyc.php" class="sp-btn sp-lg-none" data-btn-type="primary">complete your KYC</a>
                </div>
                <div class="sp-kyc-status-wrap" data-progress="1">
                    <div class="sp-kyc-status-item">Pending</div>
                    <div class="sp-kyc-status-item">in process</div>
                    <div class="sp-kyc-status-item">verified</div>
                    <div class="sp-kyc-status-item">approved</div>
                </div>
            </div>
            <div class="sp-container">
                <div class="sp-page-header sp-flex sp-content-between sp-items-center">
                    <h1 class="sp-page-title">All transactions</h1>
                    <button class="sp-btn sp-left-auto sp-dropdown-btn" data-btn-type="primary" data-select="true" data-drop-position="right" data-dropdown="selectDrop" data-unread="true" role="button">select period</button>
                    <div class="sp-dropdown sp-select-drop-wrap"  data-offset-top="4" id="selectDrop">
                        <ul class="sp-more-nav-list">
                            <li class="sp-select-list">
                                <a href="" class="sp-select-link">Today</a>
                            </li>
                            <li class="sp-select-list">
                                <a href="" class="sp-select-link">Yesterday</a>
                            </li>
                            <li class="sp-select-list">
                                <a href="" class="sp-select-link">This Week</a>
                            </li>
                            <li class="sp-select-list">
                                <a href="" class="sp-select-link">Past 7 Days</a>
                            </li>
                            <li class="sp-select-list">
                                <a href="" class="sp-select-link">Past 30 Days</a>
                            </li>
                        </ul>
                    </div>
                    <button class="sp-btn sp-content-between sp-filter-btn sp-dropdown-btn" data-drop-position="right" data-dropdown="filtertDrop" data-offset-top="4" data-unread="true" role="button">filter <i class="spi-filter"></i></button>
                    <div class="sp-dropdown sp-filter-drop-wrap" id="filtertDrop">
                        <ul class="sp-more-nav-list">
                            <li class="sp-filter-list">
                                <a href="" class="sp-select-link">By Net banking</a>
                            </li>
                            <li class="sp-filter-list">
                                <a href="" class="sp-filter-link">By UPI</a>
                            </li>
                            <li class="sp-filter-list">
                                <a href="" class="sp-filter-link">By COD</a>
                            </li>
                            <li class="sp-filter-list">
                                <a href="" class="sp-filter-link">Failed</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sp-info-tile-wraps sp-mb-3" aria-label="statitics information">
                    <div class="sp-info-tile" data-variant="blue" aria-label="total income">
                        <div class="sp-tile-icon-wrap"><i class="spi-success-rate"></i></div>
                        <div class="sp-tile-content">
                            <h2 class="sp-info-tile-title" title="total income title">Total income</h2>
                            <span class="sp-info-tile-value" title="ammount">Rs.250,00,000</span>
                        </div>
                    </div>
                    <div class="sp-info-tile" data-variant="orange" aria-label="success rate">
                        <div class="sp-tile-icon-wrap"><i class="spi-success-rate"></i></div>
                        <div class="sp-tile-content">
                            <h2 class="sp-info-tile-title" title="success rate title">Success Rate</h2>
                            <span class="sp-info-tile-value" title="success rate value">93%</span>
                        </div>
                    </div>
                    <div class="sp-info-tile" data-variant="indigo" aria-label="new transactions today">
                        <div class="sp-tile-icon-wrap"><i class="spi-success-rate"></i></div>
                        <div class="sp-tile-content">
                            <h2 class="sp-info-tile-title" title="New transactions today">New transactions today</h2>
                            <span class="sp-info-tile-value" title="number of today's transactions">5131</span>
                        </div>
                    </div>
                    <div class="sp-info-tile" data-variant="pale" aria-label="completed transactions">
                        <div class="sp-tile-icon-wrap"><i class="spi-success-rate"></i></div>
                        <div class="sp-tile-content">
                            <h2 class="sp-info-tile-title" title="completed transactions">completed transactions</h2>
                            <span class="sp-info-tile-value" title="number of completed transactions">234515</span>
                        </div>
                    </div>
                </div>

                <div class="sp-grid-row-3 sp-dashboard-cards-wrap">
                    <article class="sp-card">
                        <h2 class="sp-card-title">Ammount per Month</h2>
                        <canvas id="monthRevenue" class="sp-month-revenue"></canvas>
                    </article>
                    <article class="sp-card">
                        <h2 class="sp-card-title">Mode of transaction</h2>
                        <div class="sp-chart-container">
                            <canvas id="secondChart"></canvas>
                            <canvas id="tnxModeChart"></canvas>
                            <span class="sp-chart-dot">
                                <label><span class="sp-chart-numbers">5463</span><span>net banking</span></label>
                            </span>
                            <span class="sp-chart-dot" data-pos="right">
                                <label><span class="sp-chart-numbers">02</span><span>UPI</span></label>
                            </span>
                        </div>
                        <div class="sp-flex sp-content-around sp-items-center sp-gap-16">
                            <span class="sp-btn sp-info-badge"><i class="sp-info-dot" data-color="#1A9CED"></i>net
                                banking</span>
                            <span class="sp-btn sp-info-badge"><i class="sp-info-dot"
                                    data-color="#FF8800"></i>UPI</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

    </main>

    <script src="./assets/js/chart.js"></script>

    <script>
        const ctx = document.getElementById('monthRevenue');
            const padding = 6;

           
            const newCanvasWidth = ctx.width + padding;

           
            ctx.width = newCanvasWidth;

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                    ],
                    datasets: [
                        {
                            label: 'Dataset 1',
                            data: [
                                10000, 20000, 10000, 20000, 10500, 22000, 17200, 10000, 16800, 11300, 15000, 23600
                            ],
                            backgroundColor: 'rgba(26, 156, 237, 1)',
                            borderWidth: 0,
                            borderRadius: {
                                topLeft: 28,
                                topRight: 28
                            },
                            borderSkipped: false,
                            
                        },
                        {
                            data: [
                                50000, 50000, 50000, 50000, 50000, 50000, 50000, 50000, 50000, 50000, 50000, 50000
                            ],
                            backgroundColor: 'rgba(239, 242, 255, 1)',
                            borderWidth: 0,
                            borderRadius: {
                                topLeft: 28,
                                topRight: 28
                            },
                            tooltips: {
                                filter: function (tooltipItem) {
                                    return tooltipItem.datasetIndex === 0;
                                }
                            }
                        }
                    ]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        },
                    },
                    scales: {
                        x: {
                            stacked: true,
                            grid: {
                                display: false
                            },
                            axis: {
                                borderColor: '#CDE2F7'
                            }

                        },
                        y: {
                            ticks: {
                                stepSize: 10000,
                                callback: function (value, index, values) {
                                    return value;
                                }
                            },
                            grid: {
                                display: false
                            },
                            axis: {
                                borderColor: '#CDE2F7'
                            }
                        }
                    }
                },
                plugins: [
                    {
                        afterDraw: function (chart) {
                            const ctx = chart.ctx;
                            const yAxis = chart.scales.y;
                            const xAxis = chart.scales.x;
                            const yDotRadius = 5;
                            const xDotRadius = 5;
                            const dotBorderWidth = 2;
                            const dotBorderColor = '#CDE2F7';

                           
                            const yDotX = xAxis.left;
                            const yDotY = yAxis.getPixelForValue(yAxis.max);

                           
                            const xDotX = xAxis.right - padding;
                            const xDotY = yAxis.getPixelForValue(0);

                           
                            ctx.beginPath();
                            ctx.arc(yDotX, yDotY, yDotRadius, 0, Math.PI * 2);
                            ctx.fillStyle = '#1A9CED';
                            ctx.fill();
                            ctx.strokeStyle = dotBorderColor;
                            ctx.lineWidth = dotBorderWidth;
                            ctx.stroke();

                           
                            ctx.beginPath();
                            ctx.arc(xDotX, xDotY, xDotRadius, 0, Math.PI * 2);
                            ctx.fillStyle = '#1A9CED';
                            ctx.fill();
                            ctx.strokeStyle = dotBorderColor;
                            ctx.lineWidth = dotBorderWidth;
                            ctx.stroke();
                        }
                    }
                ]

            });
    </script>


    <script>
        const ctx1 = document.getElementById('tnxModeChart');
        const secondCtx = document.getElementById('secondChart');

        new Chart(secondCtx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [100, 0],
                    backgroundColor: ["#FF8800", "white"],
                    borderWidth: 0,
                    borderRadius: [0, 30],
                }]
            },
            options: {
                cutout: '65%',
                responsive: true,
                maintainAspectRatio: false,
                rotation: 60,
                plugins: {
                    legend: false,
                    tooltip: {
                        enabled: false, // Disable the default tooltip
                    },
                },
            },
        });

        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [15, 85],
                    backgroundColor: ["#FF8800", "#1A9CED"],
                    borderWidth: 0,
                    borderRadius: [0, 20],
                }]
            },
            options: {
                cutout: '65%',
                responsive: true,
                maintainAspectRatio: false,
                rotation: 60,
                plugins: {
                    legend: false,
                    tooltip: {
                        enabled: false, // Disable the default tooltip
                    },
                },
            },
        });

    </script>

<?php 
	include 'footer.php';
?>