<header>
  <?php
  require_once './pages/layout/header.php'
  ?>
</header>
<main>
  <section class="first-section">
    <h3>About Me</h3>
  </section>
  <style>
    section h4 {
      text-align: center;
      font-size: 1.5em;
    }

    ul {
      margin-top: -15px;
    }

    .course-list {
      list-style: none;
    }

    .course-list li::before {
      content: '✓ ';
      font-weight: bold;
    }

    .course-list li {
      width: 530px;
      overflow: hidden;
      padding: 15px;
    }

    .course-list a {
      float: right;
      margin-left: 5px;
    }

    @media screen and (max-width: 600px) {
      .course-list li {
        width: 275px;
        padding: 5px;
      }
    }
  </style>
  <section class="col-1">
    <article style="margin-left: 20px;">
      <h4><i class="fas fa-puzzle-piece" aria-hidden="true"></i> Skills</h4>
      <div class="center">
        <ul>
          <li>HTML5/CSS3</li>
          <li>Bootstrap</li>
          <li>React</li>
          <li>Javascript</li>
          <li>Python</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>Wordpress</li>
        </ul>
      </div>

      <h4><i class="fas fa-certificate" aria-hidden="true"></i> Complete Courses</h4>
      <div class="center">
        <ul class="course-list">
          <li><span>FCC Responsive Web Design</span> <a href="http://https://www.freecodecamp.org/certification/mahfuz225bd/responsive-web-design" target="_blank" rel="noopener noreferrer">View Certificate</a></li>
          <li><span>FCC JavaScript Algorithms and Data Structures</span> <a href="http://https://www.freecodecamp.org/certification/mahfuz225bd/javascript-algorithms-and-data-structures" target="_blank" rel="noopener noreferrer">View Certificate</a></li>
          <li><span>Python Core from SoloLearn</span> <a href="https://www.sololearn.com/certificates/course/en/18211986/1073/landscape/png" target="_blank" rel="noopener noreferrer">View Certificate</a></li>
          <li><span>PHP from SoloLearn</span> <a href="https://www.sololearn.com/Certificate/1059-18211986/jpg/" target="_blank" rel="noopener noreferrer">View Certificate</a></li>
          <li><span>SQL from SoloLearn</span> <a href="https://www.sololearn.com/certificates/course/en/18211986/1060/landscape/png" target="_blank" rel="noopener noreferrer">View Certificate</a></li>
          <li><span>React + Redux from SoloLearn</span> <a href="https://www.sololearn.com/Certificate/1097-18211986/jpg/" target="_blank" rel="noopener noreferrer">View Certificate</a></li>
        </ul>
      </div>
      <h4><i class="fas fa-briefcase" aria-hidden="true"></i> Work Experiences</h4>
      <div class="timeline">
        <div class="container left">
          <div class="content">
            <h5 class="title">Front End Developer <span class="subtitle">Belayet Basic</span></h5>
            <span class="datetime"><i class="fa fa-calendar" aria-hidden="true"></i> May 2022 - Current</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita repellat voluptatibus quis! Cumque libero voluptas temporibus repudiandae totam, rerum illum ipsa rem, sed excepturi magnam. Cupiditate repellendus officia animi a.</p>
          </div>
        </div>
        <div class="container right">
          <div class="content">
            <h5 class="title">Web Developer <span class="subtitle">something.com</span></h5>
            <span class="datetime"><i class="fa fa-calendar" aria-hidden="true"></i> Jan 2020 - May 2022</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita repellat voluptatibus quis! Cumque libero voluptas temporibus repudiandae totam, rerum illum ipsa rem, sed excepturi magnam. Cupiditate repellendus officia animi a.</p>
          </div>
        </div>
        <div class="container left">
          <div class="content">
            <h5 class="title">Freelance Web Designer at <span class="subtitle">Fiver</span></h5>
            <span class="datetime"><i class="fa fa-calendar" aria-hidden="true"></i> Jul 2017 - Jan 2020</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita repellat voluptatibus quis! Cumque libero voluptas temporibus repudiandae totam, rerum illum ipsa rem, sed excepturi magnam. Cupiditate repellendus officia animi a.</p>
          </div>
        </div>
      </div>

      <h4><i class="fas fa-graduation-cap"></i> Education</h4>
      <div class="timeline">
        <div class="container left">
          <div class="content">
            <h5 class="title">Diploma in Computer Science and Technology</h5>
            <span class="datetime"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 2019 - Current</span>
            <p>Doing 4 years Diploma in Engineering Course at Dhaka Polytechnic Institute, Tejgaon Industrial Area, Dhaka-1208 under <abbr title="Bangladesh Technical Education Board">BTEB</abbr>.</p>
          </div>
        </div>
        <div class="container right">
          <div class="content">
            <h5 class="title">Secondary School Certificate (SSC)</h5>
            <span class="datetime"><i class="fa fa-calendar" aria-hidden="true"></i> Feb 2019</span>
            <p>At Mirpur Bangla Higher Secondary School, Mirpur, Dhaka-1216.</p>
          </div>
        </div>
      </div>
    </article>
  </section>
</main>
<footer>
  <?php
  require_once './pages/layout/footer.php'
  ?>
</footer>