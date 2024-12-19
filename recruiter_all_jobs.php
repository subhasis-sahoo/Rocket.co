<?php
include_once "navbar.php";

if(!isset($_SESSION['email'])) {
    header("location:sign_up.php");
}

$email = $_SESSION['email'];
require "functions.php";
$result = getRecruiterDataByEmail($email);
$data = $result->fetch_assoc();


$aid = $data['aid']; // Accessing recriuiter id
// echo $aid;
?>

<section class="container_width mx-auto px-12" style="min-height: 31rem;">
    <div class="mt-5 px-1 py-5 d-flex flex-wrap" style="gap: 2rem">
        <?php
        $res = getRecruiterAllJob($aid);

        if($res) {
            while ($data = $res->fetch_assoc()) {
            ?>
                <div class="card shadow text-bg-light mb-0 cards" style="width: 18rem;">
                    <div class="card-header p-3">
                        <div class="d-flex flex-row gap-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="company_logos/<?php echo $data['image']; ?>" alt="" class="rounded-circle" style="width: 3rem; height: 3rem">
                            </div>
                            <div class="d-flex flex-column">
                                <h3 class="mb-1 fs-4"><?php echo $data['companyname'] ?></h3>
                                <p class="mb-1" style="font-size: .9rem; font-weight: 500"><?php echo $data['jobname'] ?></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between mt-2">
                            <div class="pb-1 d-flex justify-content-center align-items-center bg-primary rounded-2 text-white" style="min-width:5rem; height: 1.8rem; font-size: .8rem"><?php echo $data['salary'] ?></div>
                            <div class="pb-1 d-flex justify-content-center align-items-center bg-primary rounded-2 text-white" style="min-width:5rem; height: 1.8rem; font-size: .8rem"><?php echo $data['location'] ?></div>
                            <div class="pb-1 d-flex justify-content-center align-items-center bg-primary rounded-2 text-white" style="min-width:5rem; height: 1.8rem; font-size: .8rem"><?php echo $data['experience'] ?></div>
                        </div>
                    </div>
                    <div class="card-body p-3" style="height:13rem;overflow:auto">
                        <?php echo $data['description'] ?>
                    </div>
                    <div class="card-footer p-3 d-flex flex-row justify-content-between">
                        <div class="my-auto">
                            <p class="mb-0">No. of Applications: <span>34</span></p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-sm px-3"><a href="#" class="text-white text-decoration-none">View</a></button>
                        </div>
                    </div>
                </div>
            <?php
                }
        } else {
            ?>
                <h1>Oops! You Didn't Post Any Job.</h1>
            <?php
        }
        ?>

    </div>
</section>

<?php
    include_once "footer.php"
?>


