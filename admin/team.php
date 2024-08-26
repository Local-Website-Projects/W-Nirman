<?php
session_start();
include('../include/dbController.php');
$db_handle = new DBController();
?>
<?php include('include/session.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Team - Nirman</title>
    <?php include('include/csslist.php') ?>
</head>
<body class="sb-nav-fixed">
<?php include('include/topbar.php') ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include('include/sidebar.php') ?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Team</h1>
                <?php if (isset($_GET['edit'])) {
                    $data = $db_handle->runQuery("SELECT * FROM team where team_id={$_GET['edit']}");
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 mb-5">
                                            <h4 class="mb-4">
                                                <strong>Edit Team Member Info</strong>
                                            </h4>
                                            <form id="form-validation-simple" name="form-validation-simple"
                                                  method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="form-label">Employee Name</label>
                                                    <input name="employee_name" value="<?php echo $data[0]["employee_name"]; ?>"
                                                           type="text"
                                                           class="form-control" data-validation="[NOTEMPTY]" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Employee Post</label>
                                                    <input name="employee_post" value="<?php echo $data[0]["post"]; ?>"
                                                           type="text"
                                                           class="form-control" data-validation="[NOTEMPTY]" required/>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label">Employee Image</label>
                                                    <div class="mb-5">
                                                        <input type="file" name="f_up" class="dropify" data-height="300"
                                                               data-validation="[NOTEMPTY]"
                                                               data-default-file="../<?php echo $data[0]["image"]; ?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Facebook</label>
                                                    <input name="facebook" value="<?php echo $data[0]["facebook"]; ?>"
                                                           type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Google</label>
                                                    <input name="google" value="<?php echo $data[0]["google"]; ?>"
                                                           type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Whatsapp Number</label>
                                                    <input name="whatsapp" value="<?php echo $data[0]["whatsapp"]; ?>"
                                                           type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Twitter</label>
                                                    <input name="twitter" value="<?php echo $data[0]["twitter"]; ?>"
                                                           type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Linkedin</label>
                                                    <input name="linkedin" value="<?php echo $data[0]["linkedin"]; ?>"
                                                           type="text" class="form-control"/>
                                                </div>

                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success mr-2 px-5"
                                                            name="up_employee">Update Employee
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['up_employee'])) {
                        $employee_name = $db_handle->checkValue($_POST['employee_name']);
                        $employee_post = $db_handle->checkValue($_POST['employee_post']);
                        $facebook = $db_handle->checkValue($_POST['facebook']);
                        $google = $db_handle->checkValue($_POST['google']);
                        $whatsapp = $db_handle->checkValue($_POST['whatsapp']);
                        $twitter = $db_handle->checkValue($_POST['twitter']);
                        $linkedin = $db_handle->checkValue($_POST['linkedin']);

                        if (!empty($_FILES["f_up"]["name"])) {
                            $fileName = $_FILES['f_up']['tmp_name'];
                            $sourceProperties = getimagesize($fileName);
                            $resizeFileName = time();
                            $uploadPath = "team/";
                            $fileExt = pathinfo($_FILES['f_up']['name'], PATHINFO_EXTENSION);

                            $url = '../' . $uploadPath . "thump_" . $resizeFileName . "." . $fileExt;
                            move_uploaded_file($fileName, $url);

                            $url = $uploadPath . "thump_" . $resizeFileName . "." . $fileExt;


                            $update = $db_handle->insertQuery("UPDATE `team` SET `employee_name`='$employee_name',`post`='$employee_post',`image`='$url',`facebook`='$facebook',`google`='$google',`whatsapp`='$whatsapp',`twiter`='$twitter',`linkedin`='$linkedin' WHERE `team_id` = {$_GET['edit']}");

                        } else {
                            $update = $db_handle->insertQuery("UPDATE `team` SET `employee_name`='$employee_name',`post`='$employee_post',`facebook`='$facebook',`google`='$google',`whatsapp`='$whatsapp',`twiter`='$twitter',`linkedin`='$linkedin' WHERE `team_id` = {$_GET['edit']}");
                        }
                        echo '<script type="text/javascript">';
                        echo "setTimeout(function () { swal({title: 'Portfolio Edit', text: 'Portfolio Edited Successfully', type: 'success', confirmButtonClass: 'btn-success', confirmButtonText: 'OK', },function() {window.location = 'team.php';});";
                        echo '}, 1000);</script>';
                    }
                    ?>

                <?php } else { ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-lg-12 mb-5">
                                            <h4 class="mb-4">
                                                <strong>Add Team</strong>
                                            </h4>
                                            <form id="form-validation-simple" name="form-validation-simple"
                                                  method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="form-label">Employee Name *</label>
                                                    <input name="employee_name" type="text" class="form-control"
                                                           data-validation="[NOTEMPTY]" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Employee Post *</label>
                                                    <input name="employee_post" type="text" class="form-control"
                                                           data-validation="[NOTEMPTY]" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Employee Image (270*400) *</label>
                                                    <div class="mb-5">
                                                        <input type="file" name="f_up" class="dropify" data-height="300"
                                                               data-validation="[NOTEMPTY]" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Facebook Link</label>
                                                    <input name="facebook" type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">WhatsApp Number</label>
                                                    <input name="whatsapp" type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Gmail</label>
                                                    <input name="gmail" type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Twitter</label>
                                                    <input name="twitter" type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Linkedin</label>
                                                    <input name="linkedin" type="text" class="form-control"/>
                                                </div>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success mr-2 px-5"
                                                            name="add_employee">Save Portfolio
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_POST['add_employee'])) {
                        $employee_name = $db_handle->checkValue($_POST['employee_name']);
                        $employee_post = $db_handle->checkValue($_POST['employee_post']);
                        $facebook = $db_handle->checkValue($_POST['facebook']);
                        $whatsapp = $db_handle->checkValue($_POST['whatsapp']);
                        $gmail = $db_handle->checkValue($_POST['gmail']);
                        $twitter = $db_handle->checkValue($_POST['twitter']);
                        $linkedin = $db_handle->checkValue($_POST['linkedin']);


                        $fileName = $_FILES['f_up']['tmp_name'];
                        $sourceProperties = getimagesize($fileName);
                        $resizeFileName = time();
                        $uploadPath = "team/";
                        $fileExt = pathinfo($_FILES['f_up']['name'], PATHINFO_EXTENSION);

                        $url = '../' . $uploadPath . "thump_" . $resizeFileName . "." . $fileExt;
                        move_uploaded_file($fileName, $url);

                        $url = $uploadPath . "thump_" . $resizeFileName . "." . $fileExt;

                        $insert = $db_handle->insertQuery("INSERT INTO `team`(`employee_name`, `post`, `image`, `facebook`, `google`, `whatsapp`, `twiter`, `linkedin`) VALUES ('$employee_name','$employee_post','$url','$facebook','$gmail','$whatsapp','$twitter','$linkedin')");

                        if($insert){
                            echo '<script type="text/javascript">';
                            echo "setTimeout(function () { swal({title: 'Portfolio Add', text: 'Portfolio Added Successfully', type: 'success', confirmButtonClass: 'btn-success', confirmButtonText: 'OK', },function() {window.location = 'team.php';});";
                            echo '}, 1000);</script>';
                        }
                    }
                    ?>

                <?php } ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Team Members
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Employee Name</th>
                                        <th>Employee Post</th>
                                        <th class="text-center">Portfolio Image</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $data = $db_handle->runQuery("SELECT * FROM team");
                                    $row_count = $db_handle->numRows("SELECT * FROM team");
                                    for ($i = 0; $i < $row_count; $i++) {
                                        ?>
                                        <tr>

                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $data[$i]["employee_name"]; ?></td>
                                            <td><?php echo $data[$i]["employee_post"]; ?></td>
                                            <td class="text-center"><img class="media-object round-media"
                                                                         src="../<?php echo $data[$i]["image"]; ?>"
                                                                         alt="Generic placeholder image"
                                                                         style="height: 75px;"></td>

                                            <td class="text-center">
                                                <a class="primary"
                                                   href="team.php?edit=<?php echo $data[$i]['team_id']; ?>"
                                                   data-original-title="" title="" style="text-decoration: none">
                                                    <i class="fas fa-edit text-info"></i>
                                                </a>
                                                <a class="danger" href="?dele=<?php echo $data[$i]['team_id']; ?>"
                                                   data-original-title="" title="" style="text-decoration: none">
                                                    <i class="far fa-trash-alt text-danger"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <?php
                        if (isset($_GET['dele'])) {
                            ?>
                            <script type="text/javascript">
                                setTimeout(function () {
                                    swal({
                                            title: "Are you sure?",
                                            text: "You will not be able to recover this subcategory!",
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonClass: "btn-danger",
                                            confirmButtonText: "Yes, delete it!",
                                            cancelButtonText: "No, cancel!",
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                        },
                                        function (isConfirm) {
                                            if (isConfirm) {
                                                let currentUrl = window.location.href;
                                                let params = (new URL(currentUrl)).searchParams;
                                                let team_id = params.get('dele');
                                                $.ajax({
                                                    type: 'get',
                                                    url: 'delete_data.php',
                                                    data: {
                                                        team_id: team_id
                                                    },
                                                    success: function (data) {
                                                        swal({
                                                            title: 'Team Member Delete',
                                                            text: 'Team Member Successfully',
                                                            type: 'error',
                                                            confirmButtonClass: 'btn-danger',
                                                            confirmButtonText: 'OK',
                                                        }, function () {
                                                            window.location = 'team.php';
                                                        });
                                                    }
                                                });
                                            } else {
                                                swal({
                                                    title: 'Cancelled',
                                                    text: 'Your Team is safe :)',
                                                    type: 'error',
                                                    confirmButtonClass: 'btn-success',
                                                    confirmButtonText: 'OK',
                                                }, function () {
                                                    window.location = 'team.php';
                                                });
                                            }
                                        });
                                }, 1000);
                            </script>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </main>
        <?php include('include/footer.php') ?>
    </div>
</div>
<?php include('include/jslist.php') ?>
</body>
</html>
