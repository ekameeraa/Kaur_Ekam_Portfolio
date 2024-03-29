<?php
require_once('includes/connect_pdo.php');
$query = 'SELECT case_title,project_goals,  development_description,design_description, result_description, conclusion_description  FROM case_studies';
$stmt = $connection->prepare($query);
$stmt->execute();
$caseStudy = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Ekampreet Kaur</title>
    <link rel="stylesheet" href="style/main.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Play&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
    <script src="https://unpkg.com/gsap@3.9.2/dist/gsap.min.js"></script>
    <script
      src="https://kit.fontawesome.com/your-font-awesome-kit.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

  </head>
  <body>
    <!-- header -->
    <nav class="navbar">
      <div class="navbar_container">
        <div class="logo"><img src="images/logo.svg" alt="logo" /></div>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="nav-list" id="nav-list">
          <li><a href="index.html">Home</a></li>
          <li><a href="#about">About Me</a></li>
          <li><a href="#skills">Skills</a></li>
<li><a href="spinner.html?redirect=projects.php">Projects</a></li>
          <li><a href="spinner.html?redirect=case-study.php">Case Study</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>

    <section class="" id="case-study-body">
      <!-- case study body -->
      <h2 class="casestudy_heading"><?php echo $caseStudy['case_title']; ?></h2>
      <!--  -->
      <div class="project-steps">
        <section class="projects-steps__item project-goals">
          <div class="goalinfo" id="">
            <h2>Project Goals<br />(web developer and motion designer)</h2>
            <p>
            <?php echo $caseStudy['project_goals']; ?>
              <!-- The main objective is to create an eye-catching website with
              engaging animations and interactive features. A flawless user
              experience on all platforms by putting SEO principles, responsive
              design, and performance optimization into effect. In order to
              accomplish these objectives and successfully promote the Billy
              Beer brand, cooperation with the customer and meeting deadlines
              are essential. -->
            </p>
          </div>
          <div class="goalinfo__image-container" id="projectimg">
            <img
              class="animate__animated animate__lightSpeedInRight goalinfo__image"
              src="images/projectimg.jpg"
              alt=""
            />
          </div>
        </section>

        <section class="projects-steps__item development">
          <div class="goalinfo__image-container">
            <img
              class="animate__animated animate__lightSpeedInRight goalinfo__image"
              src="images/development.png"
              alt=""
            />
          </div>
          <div class="goalinfo">
            <h2>Development</h2>
            <p>  <?php echo $caseStudy['development_description']; ?>
              <!-- Create a responsive website with dynamic features and animations
              for Billy Beer, including important sections like products,
              contact, about, and home. This will increase user engagement.Make
              sure all users can browse with ease by optimizing loading times
              and maintaining cross-browser compatibility. -->
            </p>
          </div>
        </section>

        <section class="projects-steps__item design">
          <div class="goalinfo" id="">
            <h2>Design</h2>
            <p>  <?php echo $caseStudy['design_description']; ?>
              <!-- Make eye-catching visual effects and animations for the website,
              such as movable product displays and logos. Create motion graphics
              in close coordination with the web development team for
              promotional videos, making sure that all assets maintain brand
              consistency. -->
            </p>
          </div>
          <div class="goalinfo__image-container">
            <img
              class="animate__animated animate__lightSpeedInRight goalinfo__image"
              src="images/design-billy.png"
              alt=""
            />
          </div>
        </section>

        <section class="projects-steps__item result">
          <div class="goalinfo__image-container">
            <img
              class="animate__animated animate__lightSpeedInRight goalinfo__image"
              src="images/result-billybeer.png"
              alt=""
            />
          </div>
          <div class="goalinfo">
            <h2>Result</h2>
            <p>  <?php echo $caseStudy['result_description']; ?>
              <!-- The project produced an attractive website with engaging
              animations and interactive elements that guaranteed a top-notch
              user experience across all platforms with search engine
              optimization,responsive design, and performance optimization.
              Positive user feedback, better search engine rankings, and higher
              brand visibility were the results of this. Billy Beer’s brand was
              effectively promoted by the successful teamwork that ensured
              timely completion and attainment of the project goal. -->
            </p>
          </div>
        </section>

        <section class="projects-steps__item conclusion">
          <div class="goalinfo" id="">
            <h2>Conclusion</h2>
            <p>  <?php echo $caseStudy['conclusion_description']; ?>
              <!-- The aim is to improve the Billy Beer website by emphasizing
              attractive animations, smooth integration, and brand consistency.
              This will guarantee an interesting user experience and powerful
              brand representation. The web development and motion design teams
              will work closely together to create a visually attractive
              platform that successfully conveys Billy Beer’s spirit. -->
            </p>
          </div>
          <div class="goalinfo__image-container">
            <img
              class="animate__animated animate__lightSpeedInRight goalinfo__image"
              src="images/conclusion-billybeer.png"
              alt=""
            />
          </div>
        </section>
      </div>
    </section>
    <!-- footer -->
    <footer class="" id="contact">
      <section class="footer">
        <section class="footer__social-links">
          <a href="https://www.facebook.com/" target="_blank">
            <div class="social-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"
                />
              </svg>
            </div>
          </a>
          <a href="https://linkedin.com/" target="_blank">
            <div class="social-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                  d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"
                />
              </svg>
            </div>
          </a>
          <a href="https://www.github.com/" target="_blank">
            <div class="social-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                <path
                  d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                />
              </svg>
            </div>
          </a>
          <a href="https://instagram.com/" target="_blank">
            <div class="social-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                />
              </svg>
            </div>
          </a>
        </section>
        <!-- contact-form -->
        <section class="footer__contact-form">
          <div id="contact_form">
            <form id="feedback_form">
              <div>
                <label for="fname">First Name</label>
                <input
                  type="text"
                  id="fname"
                  name="fname"
                  placeholder="Your name.."
                />
              </div>

              <div>
                <label for="lname">Last Name</label>
                <input
                  type="text"
                  id="lname"
                  name="lname"
                  placeholder="Your last name.."
                />
              </div>

              <div>
                <label for="email">Your Email Address</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  placeholder="Your email address.."
                />
              </div>

              <div>
                <label for="country">Country</label>
                <select id="country" name="country">
                  <option value="india">INDIA</option>
                  <option value="australia">Australia</option>
                  <option value="dubai">DUBAI</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                </select>
              </div>

              <div>
                <label for="Message">Message</label>
                <textarea
                  id="Message"
                  name="message"
                  placeholder="Write something.."
                  style="height: 200px"
                ></textarea>
              </div>

              <div>
                <input type="submit" value="Submit" />
              </div>

              <section id="feedback">
                <p>*Please fill out all required sections</p>
              </section>
            </form>
          </div>
        </section>
      </section>
    </footer>
    <div class="footer__copyright">
      <p>ALL RIGHTS RESERVED @2024-EKAMPREET KAUR.<br />THANKS!</p>
    </div>
    <!-- spinner -->
    <script>
      function clickBtn(e) {
        e.preventDefault();
        window.location.href = "spinner.html";
      }
    </script>

<script src="js/main.js"></script>
<script type="module" src="js/modules.js"></script>
    <script type="module" src="js/spinner.js"></script>

  </body>
</html>
