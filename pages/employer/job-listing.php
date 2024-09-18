<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
    <script>
        function redirectToEditJob() {
            window.location.assign('edit-job.php');
        }
    </script>
</head>

<body>
    <?php include './navbar-after-login.php'; ?>

    <div class="container text-center mb-5 ">
        <h1 class="text-center my-5">Job Listings</h1>
        <div class="row border border-secondary rounded-pill p-2">
            <div class="col-3">
                <p class="h6">Job Title</p>
            </div>
            <div class="col-3">
                <p class="h6">Allowance</p>
            </div>
            <div class="col-3">
                <p class="h6">Date</p>
            </div>
            <div class="col-3">
                <p class="h6">Edit</p>
            </div>
        </div>
        <?php
        $jobListings = [
            [
                "title" => "Graphic Designer",
                "allowance" => 800,
                "dateTime" => "5/23/2024 12:50P.M."

            ],
            [
                "title" => "UI/UX Designer",
                "allowance" => 1000,
                "dateTime" => "5/23/2024 12:50P.M."
            ],
            [
                "title" => "3D Animator",
                "allowance" => 700,
                "dateTime" => "5/23/2024 12:50P.M."
            ],
            [
                "title" => "3D Animator",
                "allowance" => 700,
                "dateTime" => "5/23/2024 12:50P.M."
            ],
            [
                "title" => "3D Animator",
                "allowance" => 700,
                "dateTime" => "5/23/2024 12:50P.M."
            ]
        ];
        ?>
        <?php foreach ($jobListings as $job): ?>
            <div
                class="row border custom-border border-secondary mt-3 p-2 d-flex align-items-center justify-content-center">
                <div class="col-3 d-flex justify-content-center">
                    <a href="job.php" class="h6 mb-0"><?php echo $job["title"]; ?></a>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <p class="h6 mb-0">RM<?php echo $job["allowance"]; ?></p>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <p class="text-muted mb-0"><?php echo $job["dateTime"]; ?></p>
                </div>
                <div class="col-3 d-flex flex-column flex-sm-row justify-content-center align-items-center">
                    <button type="button" class="btn btn-outline-primary mb-2 mb-sm-0 me-sm-2 rounded-pill w-100 w-sm-auto"
                        onclick="redirectToEditJob()">Edit</button>
                    <button type="button"
                        class="btn btn-primary custom-button-bg rounded-pill w-100 w-sm-auto">Delete</button>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <?php include '../general/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>