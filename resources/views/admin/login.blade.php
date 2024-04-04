@include('admin.include.header')

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
       
        <div class="container-fluid">
            <div class="row">
    
                <div class="col-sm-12">
                    <div class="login-card card-block">
                        <form  action="{{ url('/userLogin') }}" method="POST" class="md-float-material">
                            @csrf
                            
                            <h3 class="text-center txt-primary">
                                Sign In to your account
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="email" class="md-form-control" name="email" required="required"/>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="password" class="md-form-control" name="password" required="required"/>
                                        <label>Password</label>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>
                           
                            <div class="col-sm-12 col-xs-12 text-center">
                                <span class="text-muted">Don't have an account?</span>
                                <a href="adminregister" class="f-w-600 p-l-5">Sign up Now</a>
                            </div>
    
                           
                        </form>
                       
                    </div>
                    
                </div>
               
            </div>
            
        </div>
        <!-- end of container-fluid -->
    </section>
@include('admin.include.footer')