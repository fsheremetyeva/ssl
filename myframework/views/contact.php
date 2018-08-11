
<div class="container">
  <h1>Please fill out the form below.</h1>
<form action="/welcome/processAndReceive" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="John Doe">
    <div id="name-input-val"></div>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
  </div>
  <p>Gender</p>
  <div class="form-check">

  <input class="form-check-input" type="radio" name="gender" id="radios1" value="male">
  <label class="form-check-label" for="radios">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="radios2" value="female">
  <label class="form-check-label" for="radios">
    Female
  </label>
</div>
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Department</label>
    <select name="department" class="form-control" id="department">
      <option>Accounting</option>
      <option>Finance</option>
      <option>Maintenance</option>
      <option>IT</option>
    </select>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="ft" name="ft" value="yes">
    <label class="form-check-label" for="ft">Full time</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="pt" name="pt" value="yes">
    <label class="form-check-label" for="pt">Part Time</label>
  </div>

  <div class="form-group">
    <label for="message">Comments</label>
    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
  <input type="buton" class="btn" value="Ajax Submit" id="ajaxbuttonContact">
</form>
<div id="feedback"></div>
</div>
