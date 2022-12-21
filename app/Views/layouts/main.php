<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="mt-4">
    <div class="container">
        <?php echo $this->include('partials/navbar'); ?>

        <!-- Section content-->
        <?php echo $this->renderSection('content') ?>

        <div class="row mt-4">
            <?php echo $this->include('partials/footer'); ?>
        </div>
    </div>

    <?php echo $this->renderSection('scripts') ?>
</body>

</html>