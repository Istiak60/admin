<?php

include_once($_SERVER['DOCUMENT_ROOT']."/CRUD/config.php");

use  Bitm\Banner;
$_id = $_GET['id'];
$_banner = new Banner();
$banner = $_banner->edit($_id);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit</title>
</head>

<body>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                <div class="fs-4 text-danger">
                        <?php
                        echo $_SESSION['message'];
                        $_SESSION['message'] = "";
                        ?>
                    </div>
                    <h1 class="text-center mb-4"> Edit something </h1>
                    <form method="post" action="update.php" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputId" class="col-md-3 col-form-label">


                            </label>
                            <div class="col-md-9">
                                <input type="hidden" class="form-control" id="inputId" name="id" value="<?= $banner['id'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputId" class="col-md-3 col-form-label">

                                Title:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="inputTitle" name="title" value="<?= $banner['title'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputId" class="col-md-3 col-form-label">

                                Link:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="inputTitle" name="link" value="<?= $banner['link'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputId" class="col-md-3 col-form-label">

                                Pro MEssage:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="inputPromotional" name="promotional_message" value="<?= $banner['promotional_message'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputId" class="col-md-3 col-form-label">

                                HTML BANNER:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="inputHtmlBanner" name="html_banner" value="<?= $banner['html_banner'] ?>">
                            </div>
                        </div>

                        <div class="mb-3 row form-check">
                            <div class="col-md-9">
                                <?php

                                if ($banner['is_active'] == 0) {
                                ?>
                                    <input type="checkbox" class="form-check-input" id="inputIsActive" name="is_active" value="1">

                                <?php
                                } else {
                                ?>

                                    <input type="checkbox" class="form-check-input" id="inputIsActive" name="is_active" value="1" checked>
                                <?php
                                }

                                ?>

                            </div>
                            <label for="inputIsActive" class="col-md-3  form-check-label">

                                Is Active:
                            </label>

                        </div>

                        <div class="mb-3 row form-check">
                            <div class="col-md-9">
                                <?php

                                if ($banner['is_draft'] == 0) {
                                ?>
                                    <input type="checkbox" class="form-check-input" id="inputIsDraft" name="is_draft" value="1">

                                <?php
                                } else {
                                ?>

                                    <input type="checkbox" class="form-check-input" id="inputIsDraft" name="is_draft" value="1" checked>
                                <?php
                                }

                                ?>

                            </div>
                            <label for="inputIsDraft" class="col-md-3  form-check-label">

                                Is Draft:
                            </label>

                        </div>









                        <div class="mb-3 row">
                            <label for="inputId" class="col-md-3 col-form-label">

                                Picture:
                            </label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="inputPic" name="picture" value="<?= $banner['picture'] ?>">
                            </div>
                            <img src="<?= $webroot; ?>uploads/<?= $banner['picture']; ?>">
                            <input type="hidden" name="old_picture" value="<?= $banner['picture'] ?>">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>