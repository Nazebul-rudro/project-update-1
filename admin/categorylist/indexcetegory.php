<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=books", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// $data = [
//     'name' => $name,
//     'surname' => $surname,
//     'sex' => $sex,
// ];
// $sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
// $stmt= $pdo->prepare($sql);
// $stmt->execute($data);
$stmt = $conn->query("SELECT * FROM categorylists");
$categories = $stmt->fetchAll();



?>


<!DOCTYPE html>
<html lang="en">
<?php include_once("../inc/head.php") ?>
<?php include_once("../inc/header.php"); ?>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <?php include_once("../inc/sidebar.php"); ?>
        <div class="col py-3">
            <div class="px-4">
                <h2>Crate Category || <a href="../category/categorylist.php" class="text-decoration-none">List</a></h2>
                <a href="./createcetegory.php" class="btn btn-success mt-2">Create Category</a>
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Category Name</th>
                                <th>Category Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($categories as $value) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $value['c_name']; ?></td>
                                    <td><?= $value['c_details']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div>
                        <form action="./deletecategory.php" method="post">
                            <select class="form-select" aria-label="Default select example" name="ct">
                                <option selected>Deleted Category</option>
                                <?php foreach($categories as $option){ ?>
                                <option value="<?php echo $option['id'];?>"> <?php echo $option['c_name'];?></option>
                                <?php } ?>
                            </select>
                            <div class="d-flex justify-content-end mt-3">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </v>
        </div>
    </div>
</div>


<?php include_once("../inc/footer.php"); ?>

</html>