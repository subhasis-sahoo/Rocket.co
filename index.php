<?php
include_once "navbar.php";
?>

<!-- The whole website(Rocket.co) code started here. -->
<section class="container_width container_height mx-auto px-12 row my-5 py-5" id="home">
    <div class=" col col-md-5 p-4 mt-4 mx-auto d-flex flex-column justify-content-center m-2 p-4 text-dark">
      <h3 class="">We are connect Talent with Opportunity!</h3>
      <p style="text-align: justify;">We connect recruiters with skilled programmers through smart matching, personalized recommendations, and a user-friendly platform, ensuring effortless hiring and career growth for all our users.</p>
      <p style="text-align: justify;">we believe in creating meaningful partnerships between recruiters and programmers. By combining innovative technology with a user-friendly experience, we simplify job hunting and talent acquisition. </p>
      <div class="d-flex flex-row gap-3">
        <button class="btn btn-primary" style="width: 5.08rem;"><a href="sign_up.php" class="text-white text-decoration-none">Sign Up</a></button>
        <button class="btn btn-primary" style="width: 5.08rem;"><a href="log_in.php" class="text-white text-decoration-none">Log In</a></button>
      </div>
    </div>

      <div class="col col-7">
        <img src="./assets/home_page_img.svg" alt="home_page_image" class="home-page-image img-fluid rounded float-end">
      </div>
</section>

  
<!-- Our services page -->
<section id="service">
    <div class="container_width mx-auto px-12 row mt-4 d-flex flex-row align-items-center py-5 mx-12" style="background-color: #edf4ff; height: 40rem;">
      <!-- <h1 class="fs-4 text-center mb-3">Our Services</h1> -->
      <!-- <div class="col-6 px-4">
        <img src="./assets/service_page_img.svg" alt="service page image" class="home-image img-fluid rounded">
      </div> -->
      <div id="carouselExampleSlidesOnly" class="col-6 px-4 carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/service_page_img1.svg" class="d-block img-fluid rounded" alt="service_page_img1">
          </div>
          <div class="carousel-item">
            <img src="./assets/service_page_img2.svg" class="d-block img-fluid rounded" alt="service_page_img2">
          </div>
          <div class="carousel-item">
            <img src="./assets/service_page_img3.svg" class="d-block img-fluid rounded" alt="service_page_img3">
          </div>
          <div class="carousel-item">
            <img src="./assets/service_page_img4.svg" class="d-block img-fluid rounded" alt="service_page_img4">
          </div>
        </div>
      </div>

      <div class="col-6 mb-4">
        <div class="text-dark mx-4">
          <p style="text-align: justify;">Welcome to <b>Rocket</b>, your trusted platform designed to simplify the hiring process for both employers and job seekers. For employers, posting job opportunities is easy—just provide job details such as role, requirements, responsibilities, and qualifications, and our platform will take care of the rest. With a user-friendly interface, you can reach a wide pool of talent actively seeking job opportunities.</p>

          <p style="text-align: justify;">For job seekers, our platform offers an intuitive way to explore and apply for job listings. Browse through various job categories, view detailed descriptions, and directly apply with just a few clicks. You can also track your applications and get notified of updates.</p>

          <p style="text-align: justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, qui est corrupti mollitia explicabo a impedit quae nobis, doloribus non cupiditate nesciunt dignissimos nihil?</p>
        </div>
      </div>
    </div>
</section>

<!-- Our review page -->
<section class="container_width px-12 mx-auto my-5" id="review">
    <h1 class="fs-4 text-center mb-4">What our users say about us</h1>

    <div class="d-flex flex-row justify-content-between mb-5 py-3">
      <div class="card text-bg-white mb-0 card-bg" style="max-width: 23rem;">
          <div class="d-flex flex-row gap-4 px-3 pt-3 pb-2">
            <img src="./assets/avatar_img.svg" alt="avatar_img" class="rounded-circle" style="width: 3rem; height: 3rem" >
            <div>
              <h2 class="fs-4 mb-1">Harkirat Singh</h2>
              <p class="mb-0" style="font-size: .8rem;  font-weight: 600;">SDE at Google, India</p>
            </div>
          </div>
          <div class="card-body pt-2">
            <p class="mb-0 " style="font-size: .8rem; text-align:justify;">"I am incredibly grateful to Rocket.co for connecting me with my dream opportunity at Google. Your platform not only opened doors but also provided the tools and guidance I needed to succeed. Thank you for believing in fresh graduates like me and empowering us to achieve our aspirations!" - <b>Harkirat Singh</b></p>
          </div>
      </div>

      <div class="card text-bg-white mb-0 card-bg" style="max-width: 23rem;">
          <div class="d-flex flex-row gap-4 px-3 pt-3 pb-2">
            <img src="./assets/avatar_img.svg" alt="avatar_img" class="rounded-circle" style="width: 3rem; height: 3rem" >
            <div>
              <h2 class="fs-4 mb-1">Sovna Bhatacharya</h2>
              <p class="mb-0" style="font-size: .8rem;  font-weight: 600;">Project Manager at Deloit, India</p>
            </div>
          </div>
          <div class="card-body pt-2">
            <p class="mb-0 " style="font-size: .8rem; text-align:justify">"I want to express my heartfelt thanks to Rocket.co for playing a pivotal role in my journey to becoming a Project Manager at Deloitte. Your platform made the job search seamless and matched me with the perfect role. Grateful for the support and opportunities you provide to professionals like me!" - <b>Sovan Bhattacharya</b></p>
          </div>
      </div>

      <div class="card text-bg-white mb-0 card-bg" style="max-width: 23rem;">
          <div class="d-flex flex-row gap-4 px-3 pt-3 pb-2">
            <img src="./assets/avatar_img.svg" alt="avatar_img" class="rounded-circle" style="width: 3rem; height: 3rem" >
            <div>
              <h2 class="fs-4 mb-1">Harihar Mohapatra</h2>
              <p class="mb-0" style="font-size: .8rem;  font-weight: 600;">DevOps Engineer at Amazon, India</p>
            </div>
          </div>
          <div class="card-body pt-2">
            <p class="mb-0 " style="font-size: .8rem; text-align:justify">"I sincerely thank Rocket.co for helping me land my role as a DevOps Engineer at Amazon. Your platform made it easy to showcase my skills and connected me with an incredible opportunity. Grateful for the support and resources that made this dream a reality!" - <b>Harihar Mohapatra</b></p>
          </div>
      </div>
    </div>
</section>

<?php
  include_once "footer.php"
?>
