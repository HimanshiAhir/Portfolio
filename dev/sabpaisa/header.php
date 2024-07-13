<?php 
	include 'head.php';
	include 'sidebar.php';
?>

<header class="sp-header" aria-label="dashboard header">
    <div class="sp-container sp-flex sp-content-between sp-items-center">
        <a href="./index.html" class="sp-logo-link sp-lg-none" title="click here for main page">
            <img src="./assets/media/sabpaisa.svg" alt="sab paisa logo svg"></a>
        <h4 class="sp-header-title sp-sm-none">Welcome Back</h4>
        <span class="sp-merchant-id-wrap sp-left-auto">Merchant ID: <span class="sp-m-id">14662</span></span>
        <span class="sp-notification-wrap sp-drop-wrap sp-dropdown-btn" data-drop-position="right"
            data-dropdown="notifiyDrop"  data-offset-top="14" data-unread="true" role="button">
            <i class="spi-bell"></i>
        </span>
        <div class="sp-dropdown" id="notifiyDrop">
            <div class="sp-notifications-wrap">
                <div class="sp-flex sp-items-center sp-content-between sp-notification-heading">
                    <h3>Notifications</h3>
                    <span class="sp-notification-alert">3 unread</span>
                </div>
                <ul class="sp-notification-list-wrap sp-more-nav-list">
                    <li class="sp-notification-list">
                        <a href="" class="sp-notification-link sp-flex sp-items-center">
                            <img src="./assets/media/notification-profile.jpg" class="sp-notification-img" alt="">
                            <div class="sp-notification-info sp-flex sp-items-center sp-content-between">
                                <div class="sp-flex sp-flex-column">
                                    <span class="sp-noti-title">Elizabeth Lewis</span>
                                    <span class="sp-noti-desc">added new schedule realease date</span>
                                </div>
                                <i class="spi-delete sp-notify-delete-btn"></i>
                            </div>
                        </a>
                    </li>
                    <li class="sp-notification-list">
                        <a href="" class="sp-notification-link sp-flex sp-items-center">
                            <img src="./assets/media/notification-profile.jpg" class="sp-notification-img" alt="">
                            <div class="sp-notification-info sp-flex sp-items-center sp-content-between">
                                <div class="sp-flex sp-flex-column">
                                    <span class="sp-noti-title">Elizabeth Lewis</span>
                                    <span class="sp-noti-desc">added new schedule realease date</span>
                                </div>
                                <i class="spi-delete sp-notify-delete-btn"></i>
                            </div>
                        </a>
                    </li>
                    <li class="sp-notification-list">
                        <a href="" class="sp-notification-link sp-flex sp-items-center">
                            <img src="./assets/media/notification-profile.jpg" class="sp-notification-img" alt="">
                            <div class="sp-notification-info sp-flex sp-items-center sp-content-between">
                                <div class="sp-flex sp-flex-column">
                                    <span class="sp-noti-title">Elizabeth Lewis</span>
                                    <span class="sp-noti-desc">added new schedule realease date</span>
                                </div>
                                <i class="spi-delete sp-notify-delete-btn"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="sp-flex sp-items-center sp-content-center sp-notification-view-btn">
                    <a href="" class="sp-btn sp-content-center" data-btn-type="primary"> View All </a>
                </div>
            </div>
        </div>
        <span class="sp-user-button sp-dropdown-btn" data-drop-position="right" data-offset-top="14"
            data-dropdown="userDrop" role="button"><i class="spi-user"></i><span class="sp-user-text">Hello,
                User</span></span>
        <div class="sp-dropdown" id="userDrop">
            <div class="sp-user-dropdown-wrap">
                <ul class="sp-more-nav-list">
                    <li class="sp-profile-list">
                        <a href="" class="sp-profile-link sp-flex sp-items-center">
                            <i class="spi-profile sp-drop-icon"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sp-profile-list">
                        <a href="" class="sp-profile-link sp-flex sp-items-center">
                            <i class="spi-setting sp-drop-icon"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="sp-profile-list">
                        <a href="" class="sp-profile-link sp-flex sp-items-center">
                            <i class="spi-logout sp-drop-icon"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>