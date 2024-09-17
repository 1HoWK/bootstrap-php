<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
</head>

<body>
    <?php include './navbar-after-login.php'; ?>

    <div class="container text-center mb-5 ">
        <h1 class="text-center my-5">Application</h1>
        <div class="row border border-secondary rounded-pill p-2">
            <div class="col-3">
                <p class="h6">Company</p>
            </div>
            <div class="col-2">
                <p class="h6">Location</p>
            </div>
            <div class="col-3">
                <p class="h6">Date</p>
            </div>
            <div class="col-2">
                <p class="h6">Action</p>
            </div>
            <div class="col-2">
                <p class="h6">Status</p>
            </div>
        </div>
        <?php
        $jobApplications = [
            [
                "title" => "Graphic Designer",
                "company" => "Western Digital Malaysia",
                "location" => "Kuala Lumpur",
                "dateTime" => "5/23/2024 12:50P.M.",
                "status" => "Pending"

            ],
            [
                "title" => "UI/UX Designer",
                "company" => "Samsung Electronics(M) Sdn Bhd",
                "location" => "Kuala Lumpur",
                "dateTime" => "5/23/2024 12:50P.M.",
                "status" => "Rejected"
            ],
            [
                "title" => "3D Animator",
                "company" => "Nestle Malaysia Berhad",
                "location" => "Perak",
                "dateTime" => "5/23/2024 12:50P.M.",
                "status" => "Accepted"
            ]
        ];
        ?>
        <?php foreach ($jobApplications as $jobApplication): ?>
            <div class="row border custom-border border-secondary mt-3 p-2 d-flex align-items-center">
                <div class="col-3">
                    <a href="#" class="text-dark h5"><?php echo $jobApplication["title"]; ?></a>
                    <p class="text-muted mt-2"><?php echo $jobApplication["company"]; ?></p>
                </div>
                <div class="col-2">
                    <p class="text-muted"><?php echo $jobApplication["location"]; ?></p>
                </div>
                <div class="col-3">
                    <p class="text-muted"><?php echo $jobApplication["dateTime"]; ?></p>
                </div>
                <div class="col-2">
                    <p class="text-secondary" onclick=""><u>Remove</u></p>
                </div>
                <div class="col-2">
                    <?php
                    if ($jobApplication["status"] === "Pending") {
                        ?>
                        <p class="text-warning"><?php echo $jobApplication["status"]; ?></p>
                        <?php
                    } else if ($jobApplication["status"] === "Rejected") {
                        ?>
                            <p class="text-danger"><?php echo $jobApplication["status"]; ?></p>
                        <?php
                    } else {
                        ?>
                            <p class="text-success"><?php echo $jobApplication["status"]; ?></p>

                        <?php
                    }
                    ?>
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