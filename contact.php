<?php $this->view('catlog/header',$data); ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?php echo ASSETS ?>catalog/img/hero.jpg"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-4 col-12 mb-5">
                <h2 class="tm-text-primary mb-5">Hire Me</h2>
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Photography</option>
                            <option value="sales">Videogrpahy &amp; </option>
                            <option value="creative">Creative Design</option>
                            <option value="uiux">UI / UX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>                
            </div>
            <div class="col-lg-4 col-12 mb-5">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5">Hiring Fee</h2>
                    <p class="tm-mb-50">Photography Services:
Are you looking to capture those special moments in stunning detail? Our photography services offer two distinct packages to suit your needs. Our Basic Package, priced at £250, includes two hours of photography and digital copies of edited high-resolution images. For those seeking a more comprehensive experience, our Premium Package, priced at £500, extends to four hours of photography, digital copies of edited high-resolution images, and even includes one 8x10 print of the best shot.

Videography Services:
Lights, camera, action! Our videography services are designed to bring your vision to life on screen. With our Basic Package priced at £400, you'll receive up to two hours of filming and an edited video montage lasting 3-5 minutes. Upgrade to our Premium Package for £800 and enjoy up to four hours of filming, an extended video montage lasting 5-7 minutes, and even aerial drone footage (weather permitting).</p>
                    <p class="tm-mb-50">Creative Design Services:
Make your mark with our creative design services tailored to your brand. Our Logo Design service, priced at £200, includes an initial consultation, concept development, and two rounds of revisions to ensure your logo reflects your vision. For a complete branding solution, opt for our Branding Package at £600, which encompasses logo design, brand guidelines (including colour palette and typography), and business card and letterhead design.</p>
<p class="tm-mb-50">UI/UX Design Services:
Elevate your digital presence with our UI/UX design services focused on user experience and interface aesthetics. Our Website Wireframes service, priced at £300, delivers initial wireframe designs for your website layout, accompanied by one round of revisions. For a fully realized digital presence, our Full Website Design package at £1000 offers custom website design based on approved wireframes, mobile-responsive design, and two rounds of revisions to ensure your online presence is polished to perfection.</p>                    
<address class="tm-text-gray tm-mb-50">
                        120-240 Fusce eleifend varius tempus<br>
                        Duis consectetur at ligula 10660,Scotland
                    </address>
                    <ul class="tm-contacts">
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: info@malcolmsgallery.com
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Tel: 010-020-0340
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-globe"></i>
                                URL: www.malcomsgallery.com
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="tm-text-primary mb-5">Our Location</h2>
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap-canvas">
                        <iframe width="100%" height="520" id="gmap-canvas"
                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>               
            </div>
        </div>
        <p>Client Satisfaction</p>
        <div class="row tm-mb-74 tm-people-row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="<?php echo ASSETS ?>catalog/img/people-1.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Ryan White</h2>
                
                <p class="mb-4">
                "I recently hired Malcolm's photography services for my engagement photoshoot, and I couldn't be happier with the results! The Basic Package provided exactly what I needed, and the digital copies of the images were stunning. Malcolm's attention to detail and professionalism made the entire experience enjoyable and stress-free."
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="<?php echo ASSETS ?>catalog/img/people-2.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Catherine Pinky</h2>
                
                <p class="mb-4">
                "Malcolm's videography services exceeded my expectations! From the initial consultation to the final edited video, everything was handled with precision and creativity. The Premium Package offered fantastic value, and the aerial drone footage added a unique touch to our wedding video. I highly recommend Malcolm for any videography needs."
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="<?php echo ASSETS ?>catalog/img/people-3.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Johnny Brief</h2>
                
                <p class="mb-4">
                "Working with Malcolm on our company logo design was a pleasure. He listened carefully to our ideas and delivered a logo that perfectly encapsulates our brand identity. The Logo Design service was efficient and affordable, and the two rounds of revisions ensured we were completely satisfied with the final result. I look forward to collaborating with Malcolm on future design projects."
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="<?php echo ASSETS ?>catalog/img/people-4.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">George Nelson</h2>
                
                <p class="mb-4">
                "Malcolm's UI/UX design services truly transformed our website! The Website Wireframes service provided a solid foundation for our digital presence, and the Full Website Design package brought our vision to life. Malcolm's expertise in user experience and attention to detail resulted in a website that is both visually stunning and user-friendly. I highly recommend his services to anyone looking to elevate their online presence."
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    <?php $this->view('catlog/footer'); ?>    

