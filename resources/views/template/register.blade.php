<x-master>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index-2.html">home</a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <section class="account">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="account-contents"
                        style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Register now</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur
                                        similique deleniti pariatur enim cumque eum</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">

                                    {{-- {!! Form::open(['url' => '/register', 'method' => 'post', 'class' => 'single-acc-field boxes']) !!}

                                            {!! Form::label('name', 'Name: '); !!}
                                            {!! Form::text('name', '', ['id' => 'name', 'placeholder' => 'Enter Your Name']); !!}
                                        
                                            {!! Form::label('email', 'Email: '); !!}
                                            {!! Form::email('email', '', ['id' => 'email', 'placeholder' => 'Enter Your Email']); !!}
                                        
                                            {!! Form::label('password', 'Password: '); !!}
                                            {!! Form::password('password', ['id' => 'password', 'placeholder' => 'Enter Your Password']); !!}
                                        
                                            {!! Form::checkbox('checkbox', '', false,['id' => 'checkbox']); !!}
                                            {!! Form::label('checkbox', 'I am not a robot'); !!}

                                            {!! Form::submit('Register Now'); !!}
                                      
                                {!! Form::close() !!} --}}


                                    <form action="#">
                                        <div class="single-acc-field">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" placeholder="Enter Your Name">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" placeholder="Enter your Email">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" placeholder="At least 6 Charecter">
                                        </div>
                                        <div class="single-acc-field boxes">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox">I'm not a robot</label>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit">Register now</button>
                                        </div>
                                        <a href="login.html">Already account? Login</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-master>
