<div class="col-12">
<div class="card">
<div class="card-body">
  <form class="form-sample" action="#" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Employee ID</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="emp" placeholder="Enter Employee Id" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Assigned Task</label>
            <div class="col-sm-9">
              <select name="task" class="form-control" required>
                <option>---Select One---</option>
                <option>Visa</option>
                <option>Hotel</option>
                <option>Flight</option>
                <option>Cab</option>
                <option>Domestic</option>
                <option>International</option>
              </select>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Customer ID</label>
            <div class="col-sm-9">
              <input type="text" name="cust" class="form-control" placeholder="Enter Customer Id" required/>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Deadline</label>
            <div class="col-sm-9">
              <input type="Date" class="form-control" name="deadline" required/>
            </div>
          </div>
        </div>
    </div>
    <center>
      <input type="submit" name="submit" class="btn btn-gradient-success btn-lg mr-2">
      <button type="reset" class="btn btn-gradient-dark btn-lg mr-2">Reset</button>
    </center>
  </form>
</div>
</div>
</div>  

