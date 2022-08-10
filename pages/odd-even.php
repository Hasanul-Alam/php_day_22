<?php include 'header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Odd Even Series</div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="starting_number"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="ending_number"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Your Choice</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" class="" name="choice" value="1"/> Odd</label>
                                        <label for=""><input type="radio" class="" name="choice" value="2"/> Even</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea name="" id="" class="form-control"><?php echo isset($result)? $result: ''; ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" name="odd_even_btn" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>