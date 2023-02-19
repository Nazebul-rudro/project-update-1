<!DOCTYPE html>
<html lang="en">
<?php include_once("../inc/head.php") ?>
<?php include_once("../inc/header.php"); ?>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <?php include_once("../inc/sidebar.php"); ?>
        <div class="col py-4 mx-3">
            <h2>Add Category ||</h2>
            <div class="mt-5 d-flex justify-content-center">
                <div class="card" style="width: 600px;">
                    <div class="card-body" >
                    <form action="configinsert.php" method="post">
                    <div class="mt-2">
                        <label for="c_name" class="form-label">Category Name : </label>
                        <input type="text" name="c_name" id="c_name" class="form-control">
                    </div>
                    <div class="mt-2">
                        <label for="c_details" class="form-label">Category Details : </label>
                        <input type="text" name="c_details" id="c_details" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <input type="submit" value="Add Categroy" class="btn btn-success ">
                    </div>
                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../inc/footer.php");?>
</html>