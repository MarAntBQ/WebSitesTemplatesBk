<div class="slideshow-container">

            <div class="mySlides">
                <!--<div class="numbertext">1 / 3</div>-->
                <img src="images/slider/slide1.jpg" style="width:100%" class="fade">
                <div class="text"><a href="#about">About</a></div>
            </div>

            <div class="mySlides">
                <!--<div class="numbertext">2 / 3</div>-->
                <img src="images/slider/slide2.jpg" style="width:100%" class="fade">
                <div class="text"><a href="#services">Services</a></div>
            </div>

            <div class="mySlides">
                <!--<div class="numbertext">3 / 3</div>-->
                <img src="images/slider/slide3.jpg" style="width:100%" class="fade">
                <div class="text"><a href="#contact">Contact Us</a></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <div class="slidercontrols" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000);
            }
            var slideIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {
                    slideIndex = 1
                }
                x[slideIndex - 1].style.display = "block";
                setTimeout(carousel, 5000); // Change image every 2 seconds
            }

        </script>
        <br>
        <!--End of Slider-->

        <div class="page-section" id="about">
            <h1>Page or Business Name</h1>
            <h2>About us:</h2>
            <img src="images/about/about.jpg" alt="About Picture" class="dblock mauto w80p maxw600px mb15px br15px shadow">
            <p class="lh2em tac fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi hic maiores quidem quisquam odit temporibus distinctio totam voluptates esse, blanditiis quis officiis eos animi architecto tempore tempora quos quaerat fugit provident neque unde quam delectus mollitia, quas ab. Quia veritatis, soluta cupiditate repellat accusamus sed corrupti aut, enim, repellendus fuga porro minus. Accusantium quia, cupiditate cumque. Laboriosam dolores quisquam, optio.</p>
            <div class="flex-s-a">
                <div class="box-6 box-m-12">
                    <h2>Mission</h2>
                    <img src="images/about/mission.jpg" alt="Mission Picture" class="dblock mauto w50p maxw600px mb15px br15px shadow">
                    <p class="lh2em tac fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi hic maiores quidem quisquam odit temporibus distinctio totam voluptates esse, blanditiis quis officiis eos animi architecto tempore tempora quos quaerat fugit provident neque unde quam delectus mollitia, quas ab. </p>
                </div>
                <div class="box-6 box-m-12">
                    <h2>Vission</h2>
                    <img src="images/about/vission.jpg" alt="Vission Picture" class="dblock mauto w50p maxw600px mb15px br15px shadow">
                    <p class="lh2em tac fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi hic maiores quidem quisquam odit temporibus distinctio totam voluptates esse, blanditiis quis officiis eos animi architecto tempore tempora quos quaerat fugit provident neque unde quam delectus mollitia, quas ab. </p>
                </div>
            </div>
        </div>
        <div class="page-section" id="services">
            <h1>Services</h1>
            <div class="flex-s-a">
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fas fa-address-book"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fas fa-address-card"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fab fa-angellist"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fas fa-baby"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fas fa-bath"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fas fa-chess"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fas fa-bicycle"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
                <div class="box-3 box-i-4 box-m-6 box-p-11 tac lh2em">
                    <p><i class="fas fa-birthday-cake"></i></p>
                    <h2>Service Name</h2>
                    <p class="fs20px fs-i-19px fs-m-18px fs-p-17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates natus tenetur iure illo omnis, explicabo iusto aspernatur repellendus deserunt.</p>
                </div>
            </div>
        </div>
        <?php
SendMailctr::mailController("General-Support");
?>
        <div class="page-section" id="contact">
            <h1>Contact Us</h1>
            <div class="flex-s-a">
                <div class="box-4 box-m-6 box-p-11">
                    <h2>Find us on Maps</h2>
                    <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.195963511449!2d-78.507087!3d-0.1783492!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed0c96cffb8542dd!2sMarbust%20Technology%20Company!5e0!3m2!1ses-419!2sec!4v1569550552756!5m2!1ses-419!2sec" frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="box-4 box-m-6 box-p-11 tac lh2em">
                    <h2 class="w100p">Address</h2>
                    <p class="fs18px w100p"><strong>Calle L 317 and Juan Pablo II</strong></p>
                    <p class="fs17px w100p">El Trigal</p>
                    <p class="fs16px w100p">Quito - Ecuador</p>
                    <h2 class="w100p">Office Hours</h2>
                    <p class="fs18px w100p"><strong>Monday through Friday</strong></p>
                    <p class="fs17px w100p">8:00 AM - 5:00 PM</p>
                </div>
                <div class="box-4 box-m-8 box-p-11">
                    <h2>Escribenos</h2>
                    <?php
                    if (isset($_SESSION["MailerAnswer"])) {
                        echo $_SESSION["MailerAnswer"];
                    }
                    unset($_SESSION["MailerAnswer"]);
                    ?>
                    <form class="contactform" method="post">
                        <label for="name" class="tac w100p dblock">Tu nombre:</label>
                        <input id="name" class="input dblock w100p mauto mt5px mb5px fs18px br5px" name="name" type="text" value="" size="30" required placeholder="Escribe tu nombre">
                        <label for="email" class="tac w100p dblock">Tu E-mail:</label>
                        <input id="email" class="input dblock w100p mauto mt5px mb5px fs18px br5px" name="email" type="email" value="" placeholder="name@example.com" size="30" required />
                        <label for="tel" class="tac w100p dblock">Tu teléfono:</label>
                        <input id="phone" class="input dblock w100p mauto mt5px mb5px fs18px br5px" name="phone" type="tel" value="" placeholder="0999999999" size="30" required maxlength="10" pattern="[0-9]{10}">
                        <label for="message" class="tac w100p dblock"><strong>Escribe tu Mensaje:</strong></label>
                        <textarea id="message" class="input dblock w100p mauto mt10px fs18px br5px" name="message" rows="7" cols="30" style="max-width: 100%; min-width: 100%; max-height: 150px;" placeholder="Escribe todas tus preguntas, dudas, sugerencias o inquietudes." required></textarea>

                        <input id="submit_button" type="submit" class="btn-center mt15px" value="Enviar Mensaje">
                        <input type="hidden" name="controller-action" value="SendMessage">
                    </form>
                </div>
            </div>
        </div>