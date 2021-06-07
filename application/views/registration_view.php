<div class="container">
    <h1 class="p-5 text-center display-4">
        <a href="<?php echo base_url(); ?>home/login">Login/<a href="<?php echo base_url(); ?>home/registration"
                class="font-weight-bold">Sign Up</a></a>
    </h1>
    <div class="row">
        <div class="container col-md-8 mb-5">
            <form>
                <div class="col-12 form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" class="form-control" id="fname" aria-describedby="#"
                        placeholder="Enter First Name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="col-12 form-group">
                    <label for="Lastname">Last Name</label>
                    <input type="text" class="form-control" id="lname" aria-describedby="#"
                        placeholder="Enter Last Name">
                </div>
                <div class="col-12 form-group">
                    <label for="Middlename">Middle Name</label>
                    <input type="text" class="form-control" id="mname" aria-describedby="#"
                        placeholder="Enter Middle Name">
                </div>
                <div class="col-12 form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" id="usemail" aria-describedby="#"
                        placeholder="Enter valid email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="col-12 form-group">
                    <label for="Uname">Username</label>
                    <input type="text" class="form-control" id="usname" aria-describedby="#"
                        placeholder="Enter User name">
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2"
                                placeholder="Confirm Password">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bdate">Birth Date</label>
                            <input name="tanggal" id="tanggal" class="form-control datepicker" type="text"
                                placeholder="YYYY-MM-DD">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="chapter">Chapter</label>
                            <select class="custom-select mr-sm-2" id="uchapter">
                                <option selected>Choose Chapter...</option>

                            </select>
                        </div>

                    </div>
                </div>
                
                <div class="col-12 form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" id="useraddress" aria-describedby="#"
                        placeholder="Enter Address">
                </div>

                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="ucity" aria-describedby="#" placeholder="City">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" id="uregion" aria-describedby="#"
                                placeholder="Region">
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="form-row ">
                        <div class="col-md-6">
                            <label for="country">Country</label>
                            <select class="custom-select mr-sm-2" id="ucountry">
                                <option selected>Choose Country...</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12 form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="unumber" aria-describedby="#" placeholder="Contact">
                </div>

                <div class="container">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="gender">Gender</label>
                            <select class="custom-select mr-sm-2" id="ugender">
                                <option selected>Choose Gender</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12 form-group">
                    <label for="work">Work/Business</label>
                    <input type="text" class="form-control" id="Uwork" aria-describedby="#" placeholder="">
                </div>

                <div class="container">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="gender">ID Verification(Upload a Valid Id For Account Validation)</label>
                        </div>
                        <div class="col-md-12">
                        <button type="button" class="btn btn-outline-primary">Upload</button>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="gender">Profile Picture</label>
                        </div>
                        <div class="col-md-12">
                        <button type="button" class="btn btn-outline-primary">Upload</button>
                        </div>
                    </div>
                </div>

                
                <div class="container btn-lg p-3 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
                
            </form>

            
        </div>
    </div>


</div>