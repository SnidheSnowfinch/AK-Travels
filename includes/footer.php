<footer class="footer">
    <div class="footer-top">
        <div class="footer-section">
            <div class="brand">PAWAR <span>TRAVELS</span></div>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Term and Conditions</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3 class="footer-heading">Address</h3>
            <ul class="contact-info">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Chandramani Housing Society,<br>Tingre Nagar, Vishrambag,<br>Pune - 411015</span>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>
                        +91-9822550396<br>
                        +91-9325668721
                    </span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <span>23ajaypower@gmail.com</span>
                </li>
            </ul>
        </div>

        <div class="footer-section">
            <h3 class="footer-heading">Get in Touch</h3>
            <form class="contact-form">
                <input type="text" class="form-input" placeholder="Name" required>
                <input type="tel" class="form-input" placeholder="Contact">
                <input type="email" class="form-input" placeholder="Email" required>
                <input type="text" class="form-input" placeholder="Subject">
                <textarea class="form-input" placeholder="Message" required></textarea>
                <button type="submit" class="book-btn glaze-btn">Submit</button>
            </form>
        </div>

        <div class="footer-section">
            <h3 class="footer-heading">Locate Us</h3>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.009157033367!2d76.2673025!3d9.931232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d5123456789%3A0xabcdef1234567890!2sYour%20Company%20Name!5e0!3m2!1sen!2sin!4v1658123456789!5m2!1sen!2sin"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="icon-div">
                <a><i class="bi bi-instagram"></i></a>
                <a><i class="bi bi-facebook"></i></a>
                <a><i class="bi bi-pinterest"></i></a>
                <a><i class="bi bi-twitter"></i></a>
                <a><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2023 Pawar Travels. All rights reserved.</p>
    </div>
</footer>

<script>
    // document.getElementById('menuToggle').addEventListener('click', () => {
    //     document.getElementById('navMenu').classList.toggle('show');
    // });
    const carData = [
        { img: 'bootstrap/images/home-img-1.png', date: 'NO.1 PUNE TO MUMBAI AIRPORT CAR | BUS' },
        { img: 'bootstrap/images/home-img-2.png', date: 'BUS HIRE SERVICE IN PUNE' },
        { img: 'bootstrap/images/home-img-3.png', date: 'PUNE TO MAHABALESHWAR BUS FACILITY' },

    ];

    let currentIndex = 0;
    const carImage = document.getElementById('carImage');
    // const carType = document.getElementById('carType');
    const carDate = document.getElementById('carDate');


    function updateHero() {
        if(carImage){
        carImage.style.opacity = 0;
        setTimeout(() => {
            carImage.src = carData[currentIndex].img;
            // carType.textContent = carData[currentIndex].type;
            carDate.textContent = carData[currentIndex].date;

            carImage.style.opacity = 1;
        }, 500);
    }}
    document.addEventListener('DOMContentLoaded', () => {
const nexttBtn = document.getElementById('nextBtn');
const prevvBtn = document.getElementById('prevBtn');

if (nexttBtn) {
    nexttBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carData.length;
        updateHero();
    });
}

if (prevvBtn) {
    prevvBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + carData.length) % carData.length;
        updateHero();
    });
}
});

    setInterval(() => {
        currentIndex = (currentIndex + 1) % carData.length;
        updateHero();
    }, 5000);

    updateHero();

    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const target = button.getAttribute('data-tab');
            tabContents.forEach(content => {
                content.classList.add('hidden');
                if (content.id === target) {
                    content.classList.remove('hidden');
                }
            });
        });
    });
    const track = document.getElementById('carouselTrack');
    const prevBtnn = document.getElementById('prevBtnn');
    const nextBtnn = document.getElementById('nextBtnn');

    let index = 0;
    const cardWidth = 330; // width + margin of a single card
    const maxIndex = document.querySelectorAll('.package-card').length - 3;

    function updateCarousel() {
        track.style.transform = `translateX(-${index * cardWidth}px)`;
    }
    if(nextBtnn){

    nextBtnn.addEventListener('click', () => {
        index = (index < maxIndex) ? index + 1 : 0;
        updateCarousel();
    });
}
if(prevBtnn){
    prevBtnn.addEventListener('click', () => {
        index = (index > 0) ? index - 1 : maxIndex;
        updateCarousel();
    });
}
    const Cartrack = document.getElementById('CarTrack');
    const CarprevBtn = document.getElementById('CarprevBtn');
    const CarnextBtn = document.getElementById('CarnextBtn');

    let Carindex = 0;
    const CarcardWidth = 330;
    const CarmaxIndex = document.querySelectorAll('.car-card').length - 3;

    function updateCarCarousel() {
      Cartrack.style.transform = `translateX(-${Carindex * CarcardWidth}px)`;
    }
if(CarnextBtn){
    CarnextBtn.addEventListener('click', () => {
        Carindex = (Carindex < CarmaxIndex) ? Carindex + 1 : 0;
        updateCarCarousel();
    });}
    if(CarprevBtn){

    CarprevBtn.addEventListener('click', () => {
        Carindex = (Carindex > 0) ? Carindex - 1 : CarmaxIndex;
        updateCarCarousel();
    });}



    // ------
    document.addEventListener('DOMContentLoaded', function () {
        const testimonials = [
            {
                text: "We booked 2 days trip from Pune to Shirdi. Driver Rahul was very professional and kind. We had a good time. Value for money.",
                author: "Uma Rams",
                role: "Customer from Pune"
            },
            {
                text: "Excellent service! The car was clean and well-maintained. The driver was punctual and knew all the best routes. Will definitely use again.",
                author: "Rajesh Kumar",
                role: "Business Traveler"
            },
            {
                text: "Affordable prices and great customer support. They helped me change my booking at the last minute without any extra charges.",
                author: "Priya Singh",
                role: "Weekend Traveler"
            },
            {
                text: "I've been using this service for all my business trips. Reliable, professional, and always on time. Highly recommended!",
                author: "Michael Thomas",
                role: "Frequent Customer"
            }
        ];

        const testimonialEl = document.querySelector('.testimonial');
        const textEl = testimonialEl.querySelector('.test-text');
        const authorEl = testimonialEl.querySelector('.author');
        const roleEl = testimonialEl.querySelector('.role');
        const prevBtnTest = document.getElementById('test-prev-btn');
        const nextBtnTest = document.getElementById('test-next-btn');
        const dots = document.querySelectorAll('.dot');

        let currentIndexTest = 0;

        function showTestimonial(index) {
            const testimonial = testimonials[index];

            textEl.textContent = testimonial.text;
            authorEl.textContent = testimonial.author;
            roleEl.textContent = testimonial.role;



            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });

            currentIndexTest = index;
        }

        prevBtnTest.addEventListener('click', function () {
            let newIndex = currentIndexTest - 1;
            if (newIndex < 0) newIndex = testimonials.length - 1;
            showTestimonial(newIndex);
        });

        nextBtnTest.addEventListener('click', function () {
            let newIndex = currentIndexTest + 1;
            if (newIndex >= testimonials.length) newIndex = 0;
            showTestimonial(newIndex);
        });

        dots.forEach(dot => {
            dot.addEventListener('click', function () {
                const index = parseInt(this.getAttribute('data-index'));
                showTestimonial(index);
            });
        });

        setInterval(() => {
            let newIndex = currentIndexTest + 1;
            if (newIndex >= testimonials.length) newIndex = 0;
            showTestimonial(newIndex);
        }, 5000);
    });

    document.addEventListener('DOMContentLoaded', function () {
        const serviceHeaders = document.querySelectorAll('.service-header');

        const firstContent = document.querySelector('.service-content');
        const firstHeader = document.querySelector('.service-header');

        serviceHeaders.forEach(header => {
            header.addEventListener('click', function () {
                const content = this.nextElementSibling;

                this.classList.toggle('active');

                content.classList.toggle('active');

                if (content.classList.contains('active')) {
                    serviceHeaders.forEach(otherHeader => {
                        if (otherHeader !== this && otherHeader.classList.contains('active')) {
                            otherHeader.classList.remove('active');
                            otherHeader.nextElementSibling.classList.remove('active');
                        }
                    });
                }
            });
        });
    });

    // --------
    document.addEventListener('DOMContentLoaded', function () {

    const images = document.querySelectorAll('.img-card img');
    const modal = document.getElementById('modal');
    const modalImg = document.getElementById('modalImg');
    const closeBtnImg = document.getElementById('closeBtnImg');
    const prevBtnImg = document.getElementById('prevBtnImg');
    const nextBtnImg = document.getElementById('nextBtnImg');

    let currentIndexImg = 0;

    function openModal(index) {
      modal.style.display = 'flex';
      modalImg.src = images[index].src;
      currentIndexImg = index;
    }

    images.forEach((img, index) => {
      img.addEventListener('click', () => openModal(index));
    });
if(closeBtnImg){
    closeBtnImg.addEventListener('click', () => {
      modal.style.display = 'none';
    });
}
if(prevBtnImg){

    prevBtnImg.addEventListener('click', () => {
      currentIndexImg = (currentIndexImg - 1 + images.length) % images.length;
      modalImg.src = images[currentIndexImg].src;
    });}
    if(nextBtnImg){

    nextBtnImg.addEventListener('click', () => {
      currentIndexImg = (currentIndexImg + 1) % images.length;
      modalImg.src = images[currentIndexImg].src;
    });
    }
    if(modal){
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });}
});

</script>

</body>

</html>