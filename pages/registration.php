<?php include 'pages/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Register Here</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="full-name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Subject</label>
                                <div class="col-md-9">
                                    <?php foreach ($subjects as $subject) { ?>
                                    <label for=""><input type="checkbox" class="" name="subject[]" value="<?php echo $subject['name']; ?>"/> <?php echo $subject['name']; ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" name="reg_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Student Detail Info</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Student Name</th>
                                <td><?php echo isset($result['name']) ? $result['name'] : ''?></td>
                            </tr>
                            <tr>
                                <th>Student Email</th>
                                <td><?php echo isset($result['email']) ? $result['email'] : ''?></td>
                            </tr>
                            <tr>
                                <th>Student Mobile</th>
                                <td><?php echo isset($result['mobile']) ? $result['mobile'] : ''?></td>
                            </tr>
                            <tr>
                                <th>Subject Name</th>
                                <td>
                                    <?php if(isset($result['subjects'])) { ?>
                                    <ul>
                                        <?php foreach ($result['subjects'] as $subject) { ?>
                                        <li>English</li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/footer.php';?>
