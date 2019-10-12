<div class="col-12">
<div class="card">
<div class="card-body">
  <form class="form-sample">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Customer ID</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Enter Customer Id" class="form-control" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nationality</label>
          <div class="col-sm-9">
            <select class="form-control" required>
              <option>India</option>
              <option>Kazakhstan</option>
            </select> 
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Country</label>
          <div class="col-sm-9">     
            <input type="text" placeholder="Enter Country Name" class="form-control" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">City</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Enter City Name" class="form-control" required/>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Check-In</label>
          <div class="col-sm-9">
            <input type="date" placeholder="DD/MM/YYYY" name="checkin" max="3000-12-31" 
              min="1000-01-01" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Check-Out</label>
          <div class="col-sm-9">
           <input type="date"  placeholder="DD/MM/YYYY" name="checkout" max="3000-12-31" 
              min="1000-01-01" class="form-control" required>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label"> No of Nights</label>
          <div class="col-sm-9">
             <input type="number" class="form-control" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">No of Rooms</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" required/>
          </div>
        </div>
      </div>
  </div>
    <div class="row">
     <div class="col-md-4">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label"> No of PAX.Adults</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" required/>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Child</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" required/>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Infants</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" required/>
          </div>
        </div>
      </div> 
      
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Hotel Category</label>
          <div class="col-sm-9">
           <select class="form-control" required>
              <option>7 Star</option>
              <option>5 Star</option>
              <option>4 Star</option>
              <option>3 Star</option>
              <option>2 Star</option>
              <option>1 Star</option>
            </select>  
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Hotel Name</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Enter HotelName" class="form-control" required/>
          </div>
        </div>
      </div>
    </div>
    <center>
      <button type="submit" class="btn btn-gradient-success btn-lg mr-2">Submit</button>
      <button type="reset" class="btn btn-gradient-dark btn-lg mr-2" >Reset</button>
    </center>
  </form>
</div>
</div>
</div>  
