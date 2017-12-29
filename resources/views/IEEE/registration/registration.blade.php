@extends('layouts.regnavbar')
@section('content')
<center>
    <img src="images/reghome/banner_registration.png"/>
</center>

<div class="container">
    <div align="center">
            <form class="well form-horizontal" action="" style="background-color:whitesmoke; ">     
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">First Name</label>
                        <input type="text" placeholder="First Name" class="form-control">
                    </div>
                </div>               
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Middle Name</label>
                        <input  type="text" placeholder="Middle Name" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Last Name</label>
                        <input  type="text" placeholder="Last Name" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">License Type (Make sure to select correct license type to verify your registration)</label>
                        <select class="form-control selectpicker" >
                            <option value="">--SELECT--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">License No.</label>
                        <input  type="text" placeholder="License No." class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Membership Type</label>
                        <select class="form-control selectpicker" >
                            <option value="">--SELECT--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Region</label>
                        <select class="form-control selectpicker" >
                            <option value="">--SELECT--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Chapter</label>
                        <select class="form-control selectpicker" >
                            <option value="">--SELECT--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Birthday(mm/dd/yy)</label><br>
                        <input type="date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Email Address</label>
                        <input  type="text" placeholder="Email Address" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Mobile Number</label>
                        <input  type="text" placeholder="Mobile Number" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">eCard Delivery Option</label>
                        <select class="form-control selectpicker" >
                            <option value="">--NONE--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Password</label>
                        <input  type="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-6-lg control-label">Confirm password</label>
                        <input  type="password" placeholder="Password" class="form-control">
                    </div>
                </div>

            </form> 
        </div>
</div>
     
@endsection