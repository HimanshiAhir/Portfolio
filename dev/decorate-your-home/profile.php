<?php
    $link6 = 'active';
    $page_css = './assets/css/profile.css';
    include 'header.php'
?>
    <!-- Profile Page Start -->
    <section>
        <div class="profile-page py-5">
            <div class="max-container">
                <div class="profile-page-wrapper">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="profile-left-col">
                                <div class="img-wrapper">
                                    <a href="">
                                        <img src="./assets/img/profile.jpg" alt="profile image">
                                    </a>
                                </div>
                                <h5 class="text-capitalize text-black text-center 
                                mt-3 mb-4">anaya john</h5>
                                <hr class="m-0">
                                <div>
                                    <ul class="text-capitalize text-black">
                                        <li>
                                            <a href="" class="p-3 w-100 profile-link active-profile-link">
                                                <i class="fa fa-home"></i> 
                                                account
                                            </a>
                                        </li>
                                        <hr class="m-0">
                                        <li>
                                            <a href="" class="p-3 w-100 profile-link">
                                                <i class="fa fa-key"></i>
                                                password
                                            </a>
                                        </li>
                                        <hr class="m-0">
                                        <li>
                                            <a href="" class="p-3 w-100 profile-link">
                                                <i class="fa fa-lock"></i>
                                                security
                                            </a>
                                        </li>
                                        <hr class="m-0">
                                        <li>
                                            <a href="" class="p-3 w-100 profile-link">
                                                <i class="fa fa-television"></i>
                                                application
                                            </a>
                                        </li>
                                        <hr class="m-0">
                                        <li>
                                            <a href="" class="p-3 w-100 profile-link">
                                                <i class="fa fa-bell"></i>
                                                notification
                                            </a>
                                        </li>
                                        <hr class="m-0">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="profile-right-col text-black">
                                <h3 class="text-capitalize mb-4">account setting</h3>
                                <form action="/action_page.php">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="profile-lables" for="first-name">First Name:</label>
                                            <input type="text" class="form-control mb-4" id="first-name" placeholder="Anaya" name="first-name">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="profile-lables" for="last-name">Last Name:</label>
                                            <input type="text" class="form-control mb-4" 
                                            id="last-name" placeholder="John" name="last-name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="profile-lables" for="first-name">Email:</label>
                                            <input type="email" class="form-control mb-4" id="email" placeholder="Anaya433@gmail.com" name="email">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="profile-lables" for="phone">Phone Number:</label>
                                            <input type="phone" class="form-control mb-4" 
                                            id="phone" placeholder="+91 9465455494" name="phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="profile-lables" for="first-name">Company:</label>
                                            <input type="text" class="form-control mb-4" id="company-name" placeholder="Anaya Workspace" name="company-name">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="profile-lables" for="designation">Designation:</label>
                                            <input type="text" class="form-control mb-4" 
                                            id="designation" placeholder="UI Developer" name="designation">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="profile-lables" for="bio">Bio:</label>
                                        <textarea class="form-control" rows="5" id="bio" placeholder="lorem ispusum assumenda ipsa repudiandae nisi sint culpa tempore impedit, nobis facilis consequatur quo perferendis nihil natus veniam minus itaque...."></textarea>
                                    </div>
                                    <a href="" class="btn button-primary">update</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile Page End -->
<?php 
    include 'footer.php'
?>