<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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

    <!-- CDN for Bootstrap 5.1.3 dependencies  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>