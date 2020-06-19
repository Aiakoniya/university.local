<form action="search.php" method="get" class="col-6 mx-auto">
    <div class="row">
        <div class="col-md-10">
            <input
                type="search"
                name="search"
                class="form-control mr-sm-2 my-lg-4"
                value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>"
                placeholder="Search"
                style="border-color: #505962;"
            >
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-secondary my-2 my-sm-0 my-lg-4">Search</button>
        </div>
    </div>
</form>