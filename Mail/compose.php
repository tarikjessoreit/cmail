<?php require_once "header.php" ?>
<?php require_once "sidebar.php" ?>
<form class="row my-4 p-2">
    <div class="col-12">
        <h1 class="text-center">Compose a Message</h1>
        <div class="form-row mb-3">
            <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
            <div class="col-10 col-sm-11">
                <input type="email" class="form-control" id="to" placeholder="Type email">
            </div>
        </div>
    </div>
    <div class="form-row mb-3">
        <label for="bcc" class="col-2 col-sm-1 col-form-label">Subject:</label>
        <div class="col-10 col-sm-11">
            <input type="text" class="form-control" id="bcc" placeholder="Subject">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11 ml-auto">
            <div class="form-group mt-4">
                <textarea class="form-control" id="message" name="body" rows="12"
                    placeholder="Click here to reply"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Send</button>
                <button type="reset" class="btn btn-danger">Discard</button>
            </div>
        </div>
    </div>
</form>


<?php require_once "footer.php" ?>