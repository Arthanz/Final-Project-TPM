<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ================ Icons ================ -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ================ CSS ================ -->
    <link rel="stylesheet" href="homestyle.css" />
    
    <!-- ================ JS ================ -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <title>Hackathon</title>
</head>

<body>
  <!-- ================ Header ================ -->
  <header>
    <div class="header" id="header">
      <nav class="nav-container">
          <a href="#" class="nav_logo">Hackthon</a>

          <div class="nav-menu">
            <ul class="nav__list">
              <li class="nav-item">
                <a href="#home-section" class="nav__link">Home</a>
              </li>
              
              <li class="nav-item">
                <a href="#juara-section" class="nav__link">Champion Prizes</a>
              </li>

              <li class="nav-item">
                <a href="#mentor-section" class="nav__link">Mentor and Jury</a>
              </li>
              
              <li class="nav-item">
                <a href="#faq-section" class="nav__link">FAQ.</a>
              </li>
              <li class="nav-item">
                <a href="#timeline-section" class="nav__link">Timeline</a>
              </li>
              <li class="nav-item">
                <a href="#contact-section" class="nav__link">Contact Us</a>
              </li>
            </ul>
          </div>
           
          <div class="login-menu">
            <ul>
              <li><a href="/login" class="nav__link">Login</a></li>
              <li><button type="button" class="register" href="/register"><a href="/register">Register</a></button></li>
            </ul>
          </div> 
      </nav>
    </div>
  </header>

  
    <!-- ================ Home ================ -->
    <section id="home-section">
      <div class="container__home">
        <h2 class="section__title">Hackthon</h2>
          <div id="square">
            <p class="tema-event">Tema Event</p>
              <div class="container__video">
                <svg class="home__eclipse" width="678" height="352" viewBox="0 0 678 352" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <ellipse cx="338.704" cy="176.065" rx="330.322" ry="167.572" fill="#D66F4C"/>
                </svg>

                <svg class="home__frame" width="684" height="365" viewBox="0 0 684 365" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M681.929 123.674C690.129 171.11 659.66 220.712 603.528 262.561C547.416 304.395 465.757 338.398 371.85 354.631C277.943 370.864 189.608 366.247 122.709 345.677C55.7853 325.1 10.4333 288.605 2.23331 241.169C-5.96667 193.733 24.5023 144.131 80.6345 102.282C136.747 60.4484 218.406 26.4452 312.312 10.212C406.219 -6.02112 494.554 -1.40377 561.454 19.1659C628.377 39.743 673.729 76.2381 681.929 123.674Z" stroke="black" stroke-width="0.803704"/>
                </svg>
              </div>  
          </div>
      </div>
    </section>

    <!-- ================ Juara ================ -->
    <section class="juara section" id="juara-section">
      <div class="container__champion">
        <h2 class="section__title">Champion Prizes</h2>
      <div class="class__juara">
          <!--===== Juara 2 =====  -->
          <div class="container__juara2">
            <div class="juara-2">
              <h3>Juara 2</h3>
              <div>
                <img src="/assets/img/trophy.png" alt="" class="thropy__icon">
              </div>
              <p>Rp5.000.000</p>
            </div>  
          </div>

          <div class="container__benefit2">
            <div class="merch2">Merchandise
              <div>
                <img src="/assets/img/Merch.png" alt="" class="merch__img">
              </div>
            </div>

            <div class="merch2">Sertifikat
              <div>
                <img src="/assets/img/Sertif.png" alt="" class="sertif__img">
              </div>
            </div>
          </div>
          <!--===== Juara 1 =====  -->
            <div class="container__juara1">
              <div class="juara-1">
                <h3>Juara 1</h3>
                <img src="/assets/img/trophy1.png" alt="" class="thropy1__icon">
                <p>Rp7.000.000</p>
              </div>  

              <div class="container__benefit1">
                <div class="merch1">Merchandise
                  <div>
                    <img src="/assets/img/Merch2.png" alt="" class="merch__img">
                  </div>
                </div>

                <div class="merch1">Sertifikat
                  <div>
                    <img src="/assets/img/Sertif2.png" alt="" class="sertif__img">
                  </div>
                </div>
              </div>
            </div>

          <!--===== Juara 3 =====  -->
            <div class="container__juara3">
              <div class="juara-3">
                <h3>Juara 3</h3>
                <img src="/assets/img/trophy.png" alt="" class="thropy__icon">
                <p>Rp2.500.000</p>
              </div>  

              <div class="container__benefit3">
                <div class="merch3">Merchandise
                  <div>
                    <img src="/assets/img/Merch.png" alt="" class="merch__img">
                  </div>
                </div>

                <div class="merch3">Sertifikat
                  <div>
                    <img src="/assets/img/Sertif.png" alt="" class="sertif__img">
                  </div>
                </div>
              </div>

            </div>
          </div>
      </div>
    </section>

    
    <!-- ================ Mentor & Jury ================ -->
    <section class="mentor section" id="mentor-section">
      <div class="container">
        <h2 class="section__title">Mentor &amp; Jury</h2>
        <div class="mentor__list">
          <a href="#" class="mentors">Mentors</a>
          <a href="#" class="juries">Juries</a>
        </div>
        
        <div class="container__mentors">
          <svg width="236" height="236" viewBox="0 0 236 236" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="117.77" cy="117.633" r="117.633" fill="#D66F4C"/>
          </svg>

          <svg width="236" height="236" viewBox="0 0 236 236" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="117.77" cy="117.633" r="117.633" fill="#D4DDD4"/>
          </svg>

          <svg width="236" height="236" viewBox="0 0 236 236" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="117.77" cy="117.633" r="117.633" fill="#D66F4C"/>
          </svg>
        </div>

      </div>
    </section>

    
    <!-- ================ About ================ -->
    <section class="about section" id="about-section">
      <div class="container">
        <h2 class="section__title">About Hackathon</h2>
        <div class="about__content">
          <p><b>Hackton</b> adalah dolor sit amet consectetur. Urna congue dictum magna elit ullamcorper. 
            Pellentesque et dui elementum porta lorem vitae. Fermentum consectetur dui enim nunc facilisis est et nulla. 
            Quis in massa varius nisl. Elementum blandit tortor mattis purus. Et eu nisl mauris in. 
            Ut quisque convallis mauris diam velit elementum amet.</p>
        </div>
        <div class="about__button">
          <!-- Link Register Disini-->
          <a href="" class="register__button">Register Now</a>
          <a download="" href="/assets/pdf/Guidebook_Hackthon.pdf" class="button button--flex">Guidebook</a>
        </div>
      </div>
    </section>

    <section id="why-section">
      <div class="container">
        <h2>Why should you join us</h2><br>
        <div class="benefit">
          <div class="why-content">
            <h3>Benefit 1</h3>
            <img src="/assets/img/benefit.png" alt="Benefit">
            <p> <b>Hackthon</b> dolor sit amet consectetur. Urna congue dictum magna elit ullamcorper. Pellentesque et dui elementum porta lorem vitae. Fermentum consectetur dui enim nunc facilisis est et nulla. Quis in massa varius nisl.</p>
          </div>
          <div class="why-content">
            <h3>Benefit 2</h3>
            <img src="/assets/img/benefit.png" alt="Benefit">
            <p> <b>Hackthon</b> dolor sit amet consectetur. Urna congue dictum magna elit ullamcorper. Pellentesque et dui elementum porta lorem vitae. Fermentum consectetur dui enim nunc facilisis est et nulla. Quis in massa varius nisl.</p>
          </div>
          <div class="why-content">
            <h3>Benefit 3</h3>
            <img src="/assets/img/benefit.png" alt="Benefit">
            <p> <b>Hackthon</b> dolor sit amet consectetur. Urna congue dictum magna elit ullamcorper. Pellentesque et dui elementum porta lorem vitae. Fermentum consectetur dui enim nunc facilisis est et nulla. Quis in massa varius nisl.</p>
          </div>
        </div>      
      </div>
    </section>


    <!-- ================ FAQ. ================ -->
    <section class="faq section" id="faq-section">
      <div class="container">
        <h2 class="section__title">FAQ.</h2>
      
      <div class="card-wrapper content-cc">
        <div class="faq-card">
          <div class="faq-ilustrations">
          </div>
          <main class="faq-content">
            <div class="faq-articles">

              <!-- === FAQ 1 === -->
              <article class="faq-accordion">
                <input type="checkbox" class="tgg-title" id="tgg-title-1">

                <div class="faq-accordion-title">
                  <label for="tgg-title-1">
                    <h2><b>Question</b><br>Lorem ipsum dolor sit amet consectetur?
                    </h2>
                    <span class="arrow-icon">
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </span>
                  </label>
                </div>

                <div class="faq-accordion-content">
                  <p>Lorem ipsum dolor sit amet consectetur asdasdasd asdasd as asdasd d </p>
                </div>
              </article>

              <!-- === FAQ 2 === -->
              <article class="faq-accordion">
                <input type="checkbox" class="tgg-title" id="tgg-title-2">

                <div class="faq-accordion-title">
                  <label for="tgg-title-2">
                    <h2><b>Question</b><br>Lorem ipsum dolor sit amet consectetur?</h2>
                    <span class="arrow-icon">
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </span>
                  </label>
                </div>

                <div class="faq-accordion-content">
                 <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
              </article>

              <!-- === FAQ 3 === -->
              <article class="faq-accordion">

                <input class="tgg-title" type="checkbox" id="tgg-title-3">

                <div class="faq-accordion-title">
                  <label for="tgg-title-3">
                    <h2><b>Question</b><br>Lorem ipsum dolor sit amet consectetur?</h2>
                    <span class="arrow-icon">
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </span>
                  </label>
                </div>

                <div class="faq-accordion-content">
                  <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>

              </article>
              
              <!-- === FAQ 4 === -->
              <article class="faq-accordion">

                <input class="tgg-title" type="checkbox" id="tgg-title-4">

                <div class="faq-accordion-title">
                  <label for="tgg-title-4">
                    <h2><b>Question</b><br>Lorem ipsum dolor sit amet consectetur?</h2>
                    <span class="arrow-icon">
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </span>
                  </label>
                </div>

                <div class="faq-accordion-content">
                  <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
              </article>

              <!-- === FAQ 5 === -->
              <article class="faq-accordion">
                <input class="tgg-title" type="checkbox" id="tgg-title-5">
                <div class="faq-accordion-title">
                  <label for="tgg-title-5">
                    <h2><b>Question</b><br>Lorem ipsum dolor sit amet consectetur?</h2>
                    <span class="arrow-icon">
                      <i class="uil uil-angle-down skills__arrow"></i>
                    </span>
                  </label>
                </div>

                <div class="faq-accordion-content">
                  <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
              </article> 
            </div>
          </main>
        </div> 
      </div> 
      </div>
    </section>

    <!-- ================ Sponsor ================ -->
    <section id="sponsor-section">
      <div class="container">
        <div class="platinum">
          <img src="" alt="">
        </div>
        <div class="gold">
          <img src="" alt="">
        </div>
        <div class="silver">
          <img src="" alt="">
        </div>
      </div>
    </section>
    <section id="partner-section">
      <div class="container">
        <img src="" alt="">
      </div>
    </section>

    <section id="other-section">
      <div class="container">
        <div class="container-grid">
          <div class="content1">
            <img src="" alt="">
            <button>Daftar disini!</button>
          </div>
          <div class="content2">
            <img src="" alt="">
            <button>Daftar disini!</button>
          </div>
        </div>
      </div>
    </section>


    <!-- ================ Contact Us ================ -->
    <section id="contact-section">
      <div class="container">
        <div id="form">
              <h1>Contact Us</h1>
          
              <form action="">
                  <div class="pad nama_lengkap">
                      <label for="">Nama</label><br>
                      <input type="text" placeholder="Masukkan Nama Lengkap Anda">
                  </div>
                  <div class="pad email">
                      <label for="">Email</label><br>
                      <input type="email" placeholder="Masukkan email anda"><br>
                  </div>
                  <div class="pad nomor_handphone">
                      <label for="">Subject</label><br>
                      <input type="text" placeholder="Masukkan subject anda"><br>
                  </div>
                  <div class="pad id_line">
                      <label for="">Message</label><br>
                      <input type="text" placeholder="Masukkan pesan anda"><br>
                  </div>
  
                  <div class="pad form_btn">
                      <button class="btn back">Send</button>
                  </div>
              </form>
          </div>
      </div>
    </section>

    <footer class="footer_section">
      <div class="container">
        <div class="content1">
          <p>Powered and Organized by</p><br>
          <img src="/assets/img/bncc.png" alt="BNCC">
        </div>
        <div class="content2">
          <p>Offcial Learning Partner Of</p>
          <img src="/assets/img/gojek (1).png" alt="GOJEK">
          <p>Official Empowering Affiliate of</p>
          <img src="/assets/img/tiket.com.png" alt="TIKET">
        </div>
        <div class="content3">
          <div class="content3_logo">
            <!-- logo1
            logo2
            logo3
            logo4
            logo5 -->
          </div>
          <p>All Rights Reserved BNCC 2023 © Bina Nusantara Computer Club</p>
          <a href="">Privacy Policy and Terms of Service</a>
        </div>

      </div>
    </footer>

  </body>
</html>
