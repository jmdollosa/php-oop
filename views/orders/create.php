<form method="POST">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" />
    </div>
    <div class="form-group pt-2">
        <label>Amount</label>
        <input type="number" name="amt" class="form-control" step="0.01" />
    </div>
    <div class="form-group pt-2">
        <label>Email</label>
        <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group pt-3">
        <input type="hidden" name="action" value="create-order" />
        <button class="btn btn-success">Submit</button>
    </div>
</form>