<?php
if (isset($_POST["idpost"]) && !empty($_POST["idpost"])) {

    //Include DB configuration file
    include('conexion.php');

    //Get last ID
    $lastID = $_POST['idpost'];

    //Limit on data display
    $showLimit = 5;

    //Get all rows except already displayed
    $queryAll = mysqli_query($Cn, "SELECT COUNT(*) as num_rows FROM post WHERE idpost < " . $lastID . " ORDER BY idpost DESC");
    $rowAll = $queryAll->fetch_assoc();
    $allNumRows = $rowAll['num_rows'];

    //Get rows by limit except already displayed
    $query = mysqli_query($Cn, "SELECT * FROM post WHERE idpost < " . $lastID . " ORDER BY idpost DESC LIMIT " . $showLimit);

    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $postID = $row["idpost"];
            echo "<div class='card p-1 mt-2 shadow-sm d-flex animable' style='width: 100%;'>" . $row['contenido'] . "</div>";
        } ?>
        <?php if ($allNumRows > $showLimit) { ?>
            <div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
                <img src="assets/images/loading.gif" alt="">
            </div>
        <?php } else { ?>
            <div class="load-more" lastID="0">
                Fin de Historias
            </div>
        <?php }
    } else { ?>
        <div class="load-more" lastID="0">
            Fin de Historias
        </div>
<?php
    }
}
?>