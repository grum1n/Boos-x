<?php include('inc/hero.php'); ?>

<section class="row bg-dark-blue-lighten">
    <div class="site-right-radius-container bg-white">
        <ul class="container contact-boxes">
            <li class="contact-box-left">
                <h2>Contact Info</h2>
                <p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium.</p>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        For more Queries call us our Toll Free Number
                        <span>(+62) 234 678 9012</span>
                    </div>
                </div>
                <div>
                    <i class="fa-regular fa-map"></i>
                    <div>
                        Address
                        <span>99 S.t Jomblo Park Pekanbaru 28292. Indonesia</span>
                    </div>
                </div>
                <div>
                    <i class="fa-regular fa-clock"></i>
                    <div>
                        Work Hour
                        <span>Mon-Sat: 9.00-18.00</span>
                    </div>
                </div>
            </li>
            <li class="contact-box-right">
                <h3 id="msg">Request a Free Quote</h3>
                <form action="pages.php" method="post">
                    <input type="text" name="name" placeholder="Your Name" autofocus/>
                    <input type="email" name="email" placeholder="Your Email" />
                    <input type="text" name="subject" placeholder="Your Subject" />
                    <textarea name="message"  placeholder="Your Message" rows="4" cols="50" ></textarea>
                    <button class="form-btn" type="submit" name="submit" > Submit </button>
                </form>
            </li>
        </ul>
    </div>
</section>

<?php include('inc/partners.php'); ?>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62623.57025981118!2d22.873539094525057!3d56.320148643292946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ef638e5745ffd7%3A0xa00d18ec9ba72b0!2sNaujoji%20Akmen%C4%97!5e0!3m2!1slt!2slt!4v1629270460538!5m2!1slt!2slt" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
