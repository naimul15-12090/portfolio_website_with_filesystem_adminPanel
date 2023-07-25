<?php
$ppath = getcwd();
$path = str_replace("\\", "/", $ppath);
$rpathof = $path . "/db/contact.txt";

if (isset($_POST['btn-contact'])) {
    $contactFile->contactFile($rpathof);
}

?>

<section class="container contact my-5" id="contact">
    <div class="contact-container">
        <div class="main-title mb-5">
            <h2>Reach <span>Me</span><span class="bg-text">Reach Me</span></h2>
        </div>

        <div class="row">
            <div class="col-md-4 col-w-1320-l">
                <div class="">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#me" class="nav-link active contact-nav-tab" data-bs-toggle="tab">Myself</a>
                        </li>
                        <li>
                            <a href="#manager" class="nav-link contact-nav-tab" data-bs-toggle="tab">Manager</a>
                        </li>
                        <li>
                            <a href="#cordinator" class="nav-link contact-nav-tab" data-bs-toggle="tab">Cordinator</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="me">
                            <div class="left-contact">
                                <div class="contact-info">
                                    <div class="contact-img mb-3">
                                        <img src="assets/img/banner-main-img.png" alt="" width="100px" height="100px" />
                                    </div>

                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                            <span>Name :</span>
                                        </div>
                                        <p>Naimul Huda Walid</p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Location :</span>
                                        </div>
                                        <p>Dhaka, Bangladesh</p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                            <span>Email :</span>
                                        </div>
                                        <p>
                                            <span>thuhinwalid27@gmail.com</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user-graduate"></i>
                                            <span>Education :</span>
                                        </div>
                                        <p>
                                            <span>Daffodil University, Dhaka</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user-graduate"></i>
                                            <span>Mobile Number :</span>
                                        </div>
                                        <p>
                                            <span>+880 1778267062</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-globe-africa"></i>
                                            <span>Languages :</span>
                                        </div>
                                        <p>
                                            <span>Bangla, English, Hindi</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-icons">
                                    <div class="contact-icon">
                                        <a href="www.facebook.com" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="manager">
                            <div class="left-contact">
                                <div class="contact-info">
                                    <div class="contact-img mb-3">
                                        <img src="assets/img/manager.jpg" alt="" width="100px" height="100px" />
                                    </div>

                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                            <span>Name :</span>
                                        </div>
                                        <p>Ashvik Trehan</p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Location :</span>
                                        </div>
                                        <p>Dhaka, Bangladesh</p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                            <span>Email :</span>
                                        </div>
                                        <p>
                                            <span>manager@gmail.com</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user-graduate"></i>
                                            <span>Education :</span>
                                        </div>
                                        <p>
                                            <span>Brac University, Dhaka</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user-graduate"></i>
                                            <span>Mobile Number :</span>
                                        </div>
                                        <p>
                                            <span>+880 1778267062</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-globe-africa"></i>
                                            <span>Languages :</span>
                                        </div>
                                        <p>
                                            <span>Bangla, English, Hindi</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-icons">
                                    <div class="contact-icon">
                                        <a href="www.facebook.com" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="cordinator">
                            <div class="left-contact">
                                <div class="contact-info">
                                    <div class="contact-img mb-3">
                                        <img src="assets/img/cordinator.png" alt="" width="100px" height="100px" />
                                    </div>

                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                            <span>Name :</span>
                                        </div>
                                        <p>Rakib Huda</p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Location :</span>
                                        </div>
                                        <p>Brahmanbaria, Bangladesh</p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                            <span>Email :</span>
                                        </div>
                                        <p>
                                            <span>cordinator@gmail.com</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user-graduate"></i>
                                            <span>Education :</span>
                                        </div>
                                        <p>
                                            <span>Dhaka University, Dhaka</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-user-graduate"></i>
                                            <span>Mobile Number :</span>
                                        </div>
                                        <p>
                                            <span>+880 1778267062</span>
                                        </p>
                                    </div>
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fas fa-globe-africa"></i>
                                            <span>Languages :</span>
                                        </div>
                                        <p>
                                            <span>Bangla, English</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-icons">
                                    <div class="contact-icon">
                                        <a href="www.facebook.com" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-w-1320-r">
                <div class="right-contact mt-5">
                    <form action="" method="POST" class="contact-form">
                        <div class="input-control i-c-2">
                            <input type="text" name="name" required placeholder="YOUR NAME" />
                            <input type="email" name="email" required placeholder="YOUR EMAIL" />
                        </div>
                        <div class="input-control">
                            <input type="text" name="subject" required placeholder="ENTER SUBJECT" />
                        </div>
                        <div class="input-control">
                            <textarea name="msg" id="msg" cols="15" rows="8" placeholder="Message Here..."></textarea>
                        </div>
                        <div class="submit-btn">
                            <input type="submit" name="btn-contact" id="btn-contact" class="btn btn-outline-warning" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade my-mod" id="msgModal">
    <div class="modal-dialog">
        <div class="modal-content my-mod-content">
            <div class="modal-header">
                <h3>Form Submission Successfull</h3>
                <button type="button" class="btn-close my-mod-btn bg-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h3>We will Contact You as soon as Possible.</h3>
            </div>
            <div class="modal-footer">Thank You.</div>
        </div>
    </div>
</div>