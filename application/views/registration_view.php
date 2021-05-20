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
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" id="usemail" aria-describedby="#"
                        placeholder="Enter valid email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="col-12 form-group">
                    <label for="Uname">User Name</label>
                    <input type="text" class="form-control" id="usname" aria-describedby="#"
                        placeholder="Enter User name">
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="col-6 form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


</div>