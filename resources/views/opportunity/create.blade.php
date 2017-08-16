<!-- create.blade.php -->

@extends('layouts.app')
@section('content')
  <div class="container">
    <form method="post" action="{{ url('opportunity') }}">

      <hr>
        <div class="form-group row" align="">
          <label class="col-sm-offset-3 col-form-label col-form-label-lg">Basic Information</label>
        </div>
      <hr>

      <div class="form-group row">
        {{csrf_field()}}
        <label for="Opportunity_Fname" class="col-sm-2 col-form-label col-form-label-lg">Opportunity Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control form-control-lg" id="Opportunity_Name" placeholder="Opportunity Name" name="Opportunity_Name" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="Opportunity_Address" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
        <div class="col-sm-6">
          <input type="text" class="form-control form-control-lg" id="Opportunity_Address" placeholder="Address" name="Opportunity_Address" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="Opportunity_Address2" class="col-sm-2 col-form-label col-form-label-lg">Address 2</label>
        <div class="col-sm-6">
          <input type="text" class="form-control form-control-lg" id="Opportunity_Address2" placeholder="Address 2" name="Opportunity_Address2" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="Opportunity_Location" class="col-sm-2 col-form-label col-form-label-lg">Location Center</label>
        <div class="col-sm-3">
          <select class="form-control form-control-lg" id="Opportunity_Location" name="Opportunity_Location" required>
            <option>Jacksonville</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="Opportunity_State" class="col-sm-2 col-form-label col-form-label-lg">State</label>
        <div class="col-sm-3">
          <select class="form-control form-control-lg" id="Opportunity_State" name="Opportunity_State" >
            <option>Florida</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="Opportunity_Licenses" class="col-sm-2 col-form-label col-form-label-lg">Licenses Required</label>
        <div class="col-sm-3">
          <select class="form-control form-control-lg" id="Opportunity_Licenses" name="Opportunity_Licenses">
            <option>None</option>
            <option>Medical License</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="Opportunity_Availability" class="col-sm-2 col-form-label col-form-label-lg">Availability Times</label>
        <div class="col-sm-3">
          <select class="form-control form-control-lg" id="Opportunity_Availability" name="Opportunity_Availability" required>
            <option>6AM - 6PM</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="Opportunity_Skills" class="col-sm-2 col-form-label col-form-label-sm">Opportunity's Skills</label>
        <div class="col-sm-3">
          <select class="form-control form-control-lg" id="Opportunity_Skills" name="Opportunity_Skills">
            <option>Many Skillz</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-7"></div>
        <input type="submit" class="btn btn-primary">
      </div>
    </form>
  </div>
@endsection