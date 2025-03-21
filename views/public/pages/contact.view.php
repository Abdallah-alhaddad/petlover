
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/views/layout/public/nav.php';
?>
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Contact Us</h4>
            <h1 class="display-4 m-0">Contact For <span class="text-primary">Any Query</span></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <div id="form-container">
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group ">
                                <div class="form-control p-4 h-auto ">
                                    <label>
                                        <input type="radio" name="receiver_email" id="receiver_email" value="abdallahsamsal@gmail.com" onchange="updateOptionValue()" checked> Contact Abdallah Salameh ---- (Customer Support)
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="receiver_email" id="receiver_email" value="abdallahalhaddad34@gmail.com" onchange="updateOptionValue()"> Contact Abdallah Al-Hadad ---- (Developer)
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="receiver_email" id="receiver_email" value="khaleelbader452278@gmail.com" onchange="updateOptionValue()"> Contact Khalil ---- (Scrum Master)
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="receiver_email" id="receiver_email" value="Nadeenqadoomi11@gmail.com" onchange="updateOptionValue()"> Contact Nadeen ---- (Produc Owner)
                                    </label>
                                    <br>
                                    <label>
                                        <input type="radio" name="receiver_email" id="receiver_email" value="mohammadnsr1997@gmail.com" onchange="updateOptionValue()"> Contact Mohammed ---- (Developer)
                                    </label>
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton" disabled="true" onclick="sendEmail()" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-n2 p-0">
                <iframe style="width: 100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <!-- <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Lover</h1>
                <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
    <?php
    require_once __DIR__.'../../../layout/public/footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../../js/mail/jqBootstrapValidation.min.js"></script>
    <script src="../../../js/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../../js/main.js"></script>
</body>
</html>
<script>
    function sendEmail() {
            const name = document.getElementById('name').value;
            const email = document.querySelector('input[name="receiver_email"]:checked').value;
            const message = document.getElementById('message').value;
            const subject = document.getElementById('subject').value + " From " + name;
            const receiverEmail = email;
            const body = message;
            const mailtoLink = 'mailto:' + receiverEmail + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
            window.location.href = mailtoLink;
        }

    const form = document.getElementById("contactForm");
    const dform = document.getElementById("form-container");
    const name = document.getElementById("name");
    const subject = document.getElementById("subject");
    const email = document.getElementById("receiver_email");
    const message = document.getElementById("message");
    const sbtn = document.getElementById("sendMessageButton");

    const nwarning = document.createElement("span");
    const pwarning = document.createElement("span");
    const cpwarning = document.createElement("span");

    document.addEventListener("DOMContentLoaded" , function(){
        const namecheck = () => {
            if (name.value.trim() == "" && document.getElementById("nwarning") == null){
                nwarning.setAttribute("id","nwarning")
                nwarning.innerHTML = "**This field is required**";
                nwarning.style.color = "red";
                name.insertAdjacentElement("afterend",nwarning);
            } 
            if (name.value.trim() != "" && document.getElementById("nwarning") != null){
                document.getElementById("nwarning").remove();
            }
            ablebtn();
        }

        const emailcheck = () => {
            if (email.value.trim() == "" && document.getElementById("nwarning") == null){
                nwarning.setAttribute("id","nwarning")
                nwarning.innerHTML = "**This field is required**";
                nwarning.style.color = "red";
                email.insertAdjacentElement("afterend",nwarning);
            } 
            if (email.value.trim() != "" && document.getElementById("nwarning") != null){
                document.getElementById("nwarning").remove();
            }
            ablebtn();
        }

        const subjectcheck = () => {
            if (subject.value == "" && document.getElementById("pwarning") == null){
                pwarning.setAttribute("id","pwarning")
                pwarning.innerHTML = "**This field is required**";
                pwarning.style.color = "red";
                subject.insertAdjacentElement("afterend",pwarning);
            } 
            if (subject.value != "" && document.getElementById("pwarning") != null){
                document.getElementById("pwarning").remove();
            }
            ablebtn();
        }

        const messagecheck =() => {
            if (message.value == "" && document.getElementById("cpwarning") == null){
                cpwarning.setAttribute("id","cpwarning")
                cpwarning.innerHTML = "**This field is required**";
                cpwarning.style.color = "red";
                message.insertAdjacentElement("afterend",cpwarning);
            } 
            if (message.value != "" && document.getElementById("cpwarning") != null){
                document.getElementById("cpwarning").remove();
            }
            ablebtn();
        }
        
        const ablebtn = () => {
            if (name.value.trim() != "" && document.getElementById("nwarning") == null &&
            subject.value != "" && document.getElementById("pwarning") == null &&
            message.value != "" && document.getElementById("cpwarning") == null)
            {
                sbtn.disabled = false;
                sbtn.addEventListener("click", function(){
                    alert("Register Submitted Successfully");
                    window.location.href ="dom.html";
                })
            } else {
                sbtn.disabled = true;
            }
        }

        name.addEventListener("input",namecheck);
        subject.addEventListener("input",subjectcheck);
        message.addEventListener("input",messagecheck);

    });
</script>