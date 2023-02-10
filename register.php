<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font-awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form action="sql_register.php" method="post">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                <p class="text-white-50 mb-5">Please enter your register</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="name" name="name" class="form-control form-control-lg"
                                        placeholder="ชื่อ-นามสกุล" required/>

                                </div>

                                <div class="form-outline form-white mb-4">
                                <input type="text" id="address" name="address" class="form-control form-control-lg"
                                        placeholder="ที่อยู่" required/>

                                </div>

                                <div class="form-outline form-white mb-4">
                                <input type="text" id="phone_number" name="phone_number" class="form-control form-control-lg"
                                        placeholder="เบอร์โทร"pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" required />
                                </div>
                              

                                <div class="form-outline form-white mb-4">
                                <input type="text" id="user" name="user" class="form-control form-control-lg"
                                        placeholder="user" required/>
                                </div>

                                <div class="form-outline form-white mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg"
                                        placeholder="password" required/>
                                </div>




                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>



                            </div>

                            <div>
                                <p class="mb-0">Your have an account? <a href="login.php" class="text-white-50 fw-bold">Login
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

</body>

</html>