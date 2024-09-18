<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/globals.css">
</head>

<body>
    <?php include './navbar-after-login.php'; ?>

    <div class="container text-center" style="margin-bottom: 8.95rem;">
        <h1 class="text-center my-5">Application</h1>
        <div class="row border border-secondary rounded-pill p-2">
            <div class="col-3">
                <p class="h6">Applicant</p>
            </div>
            <div class="col-2">
                <p class="h6">Position</p>
            </div>
            <div class="col-2">
                <p class="h6">Date</p>
            </div>
            <div class="col-2">
                <p class="h6">Resume</p>
            </div>
            <div class="col-3">
                <p class="h6">Status</p>
            </div>
        </div>
        <?php
        $applicants = [
            [
                "name" => "Jason Vorhese",
                "title" => "Graphic Designer",
                "dateTime" => "5/23/2024 12:50P.M.",
                "resume" => "Jason-Resume.pdf",

            ],
            [
                "name" => "Daryl Lee",
                "title" => "UI/UX Designer",
                "dateTime" => "5/23/2024 12:50P.M.",
                "resume" => "Daryl-Resume.pdf"
            ],
            [
                "name" => "Danny Chu",
                "title" => "3D Animator",
                "dateTime" => "5/23/2024 12:50P.M.",
                "resume" => "Danny-Resume.pdf"
            ],
            // [
            //     "name" => "William Seng",
            //     "title" => "Motion Designer",
            //     "dateTime" => "5/23/2024 12:50P.M.",
            //     "resume" => "William-Resume.pdf"
            // ],
            // [
            //     "name" => "Jennifer Wong",
            //     "title" => "Event Manager",
            //     "dateTime" => "5/23/2024 12:50P.M.",
            //     "resume" => "Jennifer-Resume.pdf"
            // ]
        ];
        ?>
        <?php foreach ($applicants as $applicant): ?>
            <div
                class="row border custom-border border-secondary mt-3 p-2 d-flex align-items-center justify-content-center">
                <div class="col-3 d-flex justify-content-center">
                    <p class="h6 mb-0"><u><?php echo $applicant["name"]; ?></u></p>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <p class="h6 mb-0"><?php echo $applicant["title"]; ?></p>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <p class="text-muted mb-0"><?php echo $applicant["dateTime"]; ?></p>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <a href="" class="h6 mb-0 text-muted"><?php echo $applicant["resume"]; ?></a>
                </div>       
                <div class="col-3 d-flex flex-column flex-sm-row justify-content-center align-items-center">
                    <button type="button"
                        class="btn btn-outline-primary mb-2 mb-sm-0 me-sm-2 rounded-pill w-100 w-sm-auto">Accept</button>
                    <button type="button"
                        class="btn btn-primary custom-button-bg rounded-pill w-100 w-sm-auto">Reject</button>
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