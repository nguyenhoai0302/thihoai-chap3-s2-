<form method="post" action="process.php" >
    <div class="row mb-3 mt-3">
        <div class="col">
            <input name="name" type="text" class="form-control" placeholder="Enter Name" >
        </div>
        <div class="col">
            <input name="number" type="number" class="form-control" placeholder="Enter number">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input name="email" type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="col">
            <input name="password" type="password" class="form-control" placeholder="Enter password" >
        </div>
    </div>
    <div class="mb-3">
        <textarea  name="message" placeholder="Enter message" class="form-control"></textarea>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>