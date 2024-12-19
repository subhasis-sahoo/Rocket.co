<?php
    include_once "navbar.php";

    require_once "functions.php";
    $email = $_SESSION['email'];
    $result = getJobseekerDataByEmail($email);
    $data = $result->fetch_assoc();
?>

<section class="container_width mx-auto px-12">
    <div class="mt-5 py-5">
        <div class="card mb-3 rounded-4" style="overflow: hidden;">
            <div style="width: 100%; height: 13rem; background-color: #D4F6FF;"></div>
            <div class="card-body px-3 py-0 position-relative mx-auto" style="width: 60rem">
                <img src="./recruiter_profile_pictures/<?php $data['image']? print $data['image']: print "profile_img.svg"?>" alt="profile_image" class="rounded-circle position-absolute translate-middle-y" style="width: 10rem; height: 10rem">
                <div class="py-3 pe-3" style="padding-left: 11rem">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h2 class="card-title mb-0"><?php echo $data['name']?></h2>
                        <button class="btn btn-primary btn-sm" style="height: 2rem;"><a href="update_jobseeker_profile.php" class="text-white text-decoration-none">Edit Profile</a></button>
                    </div>
                    <p class="text-secondary">Software Enginner at Google</p>
                </div>
                <div class="border border-1 p-4 rounded-3 mx-3 mb-4">
                    <h5 class="mb-2 fw-bolder">About Me</h5>
                    <p class="card-text fw-normal text-dark lh-sm" style="text-align: justify; font-size: .85rem">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis provident ducimus commodi porro debitis nostrum suscipit maiores consectetur in reiciendis, accusantium iure.</p>

                    <p class="card-text fw-normal text-dark lh-sm" style="text-align: justify; font-size: .85rem">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis provident ducimus commodi porro debitis nostrum suscipit maiores consectetur in reiciendis, accusantium iure. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur exercitationem delectus dolor.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include_once "footer.php";
?>