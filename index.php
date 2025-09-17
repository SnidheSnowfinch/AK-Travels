<?php include 'includes/header.php' ?>


    <div class="container-blue">

        <div class="hero">


            <div class="hero-info">
                <h2 id="carDate">NO.1 PUNE TO MUMBAI AIRPORT CAR | BUS</h2>
                <BUtton class="book-btn glaze-btn">Book Now</BUtton>
            </div>
            <div class="hero-image">
                <img id="carImage" src="bootstrap/images/home-img-1.png" alt="Car Image" />

            </div>

        </div>
        <div class="carousel-controls">
            <button id="prevBtn"><i class="bi bi-chevron-left"></i></button>
            <button id="nextBtn"><i class="bi bi-chevron-right"></i></button>
        </div>

        <div class="cab-booking">
            <div class="tabs">
                <button class="tab-btn active glaze-btn" data-tab="oneway">One Way</button>
                <button class="tab-btn glaze-btn" data-tab="roundtrip">Round Trip</button>
                <button class="tab-btn glaze-btn" data-tab="multicity">Multicity</button>
                <button class="tab-btn glaze-btn" data-tab="local">Local</button>
            </div>

            <div class="tab-content" id="oneway">
                <form>
                    <select required>
                        <option value="">Select From City</option>
                        <option value="pune">Pune</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                    </select>

                    <select required>
                        <option value="">Select To City</option>
                        <option value="pune">Pune</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                    </select>

                    <input type="date" required />

                    <input type="text" placeholder="Pick Up At" required />

                    <button type="submit" class="explore glaze-btn">Explore Cabs</button>
                </form>
            </div>

            <div class="tab-content hidden" id="roundtrip">
                <form>
                    <select required>
                        <option value="">Select From City</option>
                        <option value="pune">Pune</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                    </select>

                    <select required>
                        <option value="">Select To City</option>
                        <option value="pune">Pune</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                    </select>

                    <input type="date" placeholder="Departure Date" required />

                    <input type="date" placeholder="Return Date" required />

                    <button type="submit" class="explore glaze-btn">Explore Round Trip</button>
                </form>
            </div>

            <div class="tab-content hidden" id="multicity">
                <form>
                    <input type="text" placeholder="Multiple Cities (comma separated)" required />

                    <input type="date" placeholder="Start Date" required />

                    <button type="submit" class="explore glaze-btn">Explore Multicity</button>
                </form>
            </div>

            <div class="tab-content hidden" id="local">
                <form>
                    <input type="text" placeholder="Pick Up Location" required />

                    <input type="text" placeholder="Drop Location" required />

                    <input type="date" required />

                    <button type="submit" class="explore glaze-btn">Explore Local</button>
                </form>
            </div>
        </div>
    </div>
    <div class="div-container">
        <section class="why-choose">
            <h1>Why Choose Us for Best Cab/Bus Services in Pune?</h1>
            <div class="text-box">
                <p>Do you need to explore the beauty of Pune and its natural wonders then you’ve come to the right place
                    we specialize in offering airport transfer, one-way cab service, outstation cabs & bus hire
                    services. Pawar Travel has 15+ years of experience in the car rental industry and our team works
                    hard to find you the best possible cab fare for 1 & 2-day customized cab packages that suit your
                    requirements perfectly. We really are the best cab service provider in Pune with affordable pricing
                    and luxury, economy or a combination of all three find the below cab that suits your round-trip
                    travel.</p>
                <p>The more we get to know about you, like which cab you require, how many passengers are there, days of
                    travel & destinations you want to cover after that our team will provide the best & reasonable cab
                    packages.</p>
                <p>Excellent customer service which is patent through a score of on Google review which is 4.5</p>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="icon-div">
                            <img src="bootstrap/images/icon-1.png" alt="">
                            <p> No Hidden Charges</p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="icon-div">
                            <img src="bootstrap/images/icon-3.png" alt="">
                            <p>Customized Cab Packages</p>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="icon-div">
                            <img src="bootstrap/images/icon-4.png" alt="">
                            <p>Fixed & Reliable Price</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="icon-div">
                            <img src="bootstrap/images/icon-5.png" alt="">
                            <p>Experienced Drivers</p>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="icon-div">
                            <img src="bootstrap/images/icon-6.png" alt="">
                            <p>GPS Car Tracker</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="icon-div">
                            <img src="bootstrap/images/icon-2.png" alt="">
                            <p>24 x 7 Support</p>
                        </div>
                    </div>






                </div>
            </div>

        </section>
        <section class="packages-section">
            <h1>Our Popular Packages</h1>

            <div class="carousel-container">
                <div class="carousel-track" id="carouselTrack">
                    <div class="package-card">
                        <img src="bootstrap/images/ashvathvinayak.jpg" />
                        <div class="inner">
                            <p>Pune To Ashtavinayak Darshan</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/bhimashakar.jpg" />
                        <div class="inner">
                            <p>Pune To bhimashakar Cab Hire</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/goa.jpg" />
                        <div class="inner">
                            <p>Pune To Goa</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/mahabaleshwar.jpg" />
                        <div class="inner">
                            <p>Pune To Mahabaleshwar</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/mumbai.jpg" />
                        <div class="inner">
                            <p>Pune To Mumbai</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/nashik.jpg" />
                        <div class="inner">
                            <p>Pune To Nashik</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/pandharpur.jpg" />
                        <div class="inner">
                            <p>Pune To pandharpur</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/trimbakeshwar.jpg" />
                        <div class="inner">
                            <p>Pune To Trimbakeshwar</p>
                        </div>
                    </div>
                    <div class="package-card">
                        <img src="bootstrap/images/trimbakeshwar.jpg" />
                        <div class="inner">
                            <p>Pune To Trimbakeshwar</p>
                        </div>
                    </div>




                </div>
            </div>

            <div class="carousel-controls">
                <button id="prevBtnn"><i class="bi bi-chevron-left"></i></button>
                <button id="nextBtnn"><i class="bi bi-chevron-right"></i></button>
            </div>
        </section>
        <div class="wrapper-work">
            <div class="header-div">
                <h1>How it Works</h1>
                <p>4 Simple steps-div to Book Your Car</p>
            </div>

            <div class="steps-div">
                <div class="step">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="title">Select Destination</h3>
                </div>

                <div class="step">
                    <div class="icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3 class="title">Select Your Car</h3>
                </div>

                <div class="step">
                    <div class="icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="title">Define Your Booking</h3>
                </div>

                <div class="step">
                    <div class="icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3 class="title">Payment</h3>
                </div>
            </div>
        </div>
        <section class="car-section">
            <h1>Our Fleets</h1>

            <div class="carousel-container">
                <div class="carousel-track" id="CarTrack">
                    <div class="car-card">
                        <img src="bootstrap/images/premium-sedan.png" />
                        <div class="outer">
                            <h6>Premium Sedan (Petrol or Diesel)</h6>
                            <p>(4+1 seater)</p>
                        </div>
                    </div>
                    <div class="car-card">
                        <img src="bootstrap/images/sedan-img.png" />
                        <div class="outer">
                            <h6>Sedan (Suzuki Dzire /Hyundai Xcent)</h6>
                            <p>(6+1 seater)</p>
                        </div>
                    </div>
                    <div class="car-card">
                        <img src="bootstrap/images/suv-img.png" />
                        <div class="outer">
                            <h6>SUV (Suzuki Ertiga /Toyota Rumion) </h6>
                            <p>(4+1 seater)</p>
                        </div>
                    </div>
                    <div class="car-card">
                        <img src="bootstrap/images/premium-suv.png" />
                        <div class="outer">
                            <h6>Premium SUV (Innova Crysta )</h6>
                            <p>(6+1 seater)</p>
                        </div>
                    </div>
                    <div class="car-card">
                        <img src="bootstrap/images/13-seater.png" />
                        <div class="outer">
                            <h6>13 seater Winger/Urbania </h6>
                            <p>(13+1 seater)</p>
                        </div>
                    </div>
                    <div class="car-card">
                        <img src="bootstrap/images/17-seater.png" />
                        <div class="outer">
                            <h6>17 seater Tempo traveller/Urbania</h6>
                            <p>(17+1 seater)</p>
                        </div>
                    </div>
                    <div class="car-card">
                        <img src="bootstrap/images/20-seater.png" />
                        <div class="outer">
                            <h6>20 seater Tempo Traveller</h6>
                            <p>(20+1 seater)</p>
                        </div>
                    </div>





                </div>
            </div>

            <div class="carousel-controls">
                <button id="CarprevBtn"><i class="bi bi-chevron-left"></i></button>
                <button id="CarnextBtn"><i class="bi bi-chevron-right"></i></button>
            </div>
        </section>
        <div class="test-section">

            <h1>What Customer Says</h1>


            <div class="testimonial">
                <p class="test-text">We booked 2 days trip from Pune to Shirdi. Driver Rahul was very professional and
                    kind. We had a good time. Value for money.</p>

                <div class="author">Uma Rams</div>
                <div class="role">Customer from Pune</div>
            </div>

            <div class="nav-buttons-test">
                <button class="nav-btn-test" id="test-prev-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="nav-btn-test" id="test-next-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="dots">
                <div class="dot active" data-index="0"></div>
                <div class="dot" data-index="1"></div>
                <div class="dot" data-index="2"></div>
                <div class="dot" data-index="3"></div>
            </div>
        </div>
        <div class="service-div">

            <h1 class="text-center">Our Services</h1>


            <div class="services">
                <div class="service-category">
                    <div class="service-header active">
                        <h2>Airports Transfer</h2>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content active">
                        <div class="service-list">
                            <div class="service-item">

                                <ul class="route-list">
                                    <li>Pune To Mumbai Airport Drop Cab</li>
                                    <li>Mumbai Airport To Pune</li>

                                    <li>Mumbai Airport To Shirdi One Way</li>
                                    <li>Mumbai Airport To Shirdi</li>
                                    <li>Mumbai To Pune</li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="divider"></div>

                <div class="service-category">
                    <div class="service-header">
                        <h2>Popular Destination</h2>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-list">
                            <div class="service-item">
                                <ul class="route-list">
                                    <li>Pune To Mahabaleshwar</li>
                                    <li>Pune To Panchgani</li>
                                    <li>Pune To Malshej Ghat</li>
                                    <li>Pune To Kaas Pathar</li>
                                    <li>Pune To Igatpuri</li>
                                    <li>Pune To Goa</li>
                                    <li>Pune To Tarkarli Beach</li>
                                    <li>Pune To Ganapatipule</li>
                                    <li>Pune To Guhagar</li>
                                    <li>Pune To Harihareshwar</li>
                                    <li>Pune To Alibaug Beach Cab</li>
                                    <li>Pune To Dapoli</li>
                                    <li>Pune To Murud Janjira</li>
                                    <li>Pune To Raigad</li>
                                    <li>Pune To Panhala</li>
                                    <li>Pune To Kolhapur</li>
                                    <li>Pune To Tuljapur</li>
                                    <li>Pune To Ashtavinayak Yatra</li>
                                    <li>Pune To Bhimashankar Cab</li>
                                    <li>Pune To Trimbakeshwar</li>
                                    <li>Pune To Ashtavinayak Places Cab</li>
                                    <li>Pune To Aundha Nagnath</li>
                                    <li>Pune To Ashtavinayak Tour Cab</li>
                                    <li>Pune To Parli Vajinath</li>
                                    <li>Pune To Sadetin Shakti Peeth</li>
                                    <li>Pune To Pandharpur</li>
                                    <li>Pune To Vani Saptashrungi</li>
                                    <li>Pune To Ashtavinayak Darshan</li>
                                    <li>Pune To Grishneshwar</li>
                                    <li>Pune To Mumbai Cab</li>
                                    <li>Pune To Nashik</li>
                                    <li>Pune To Mumbai</li>
                                    <li>Pune To Ratnagiri</li>
                                    <li>Pune To Satara</li>
                                    <li>Pune To Aurangabad</li>
                                    <li>Pune To Adlabs Imagica</li>
                                    <li>Pune To Ashtavinayak Bus Booking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>

                <div class="service-category">
                    <div class="service-header">
                        <h2>Outstation Services</h2>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="service-content">
                        <div class="service-list">
                            <div class="service-item">
                                <h3>One Way & Round Trips</h3>
                                <ul class="route-list">
                                    <li>Pune to Pune</li>

                                    <li>Pune to Outstation/li>
                                </ul>
                            </div>

                            <div class="divider"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php include 'includes/footer.php' ?>
