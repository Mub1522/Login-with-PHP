<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="estilos.css">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
</head>

<body>
    <?php
    include("conexion.php");
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $hash_pass = password_hash($pass, PASSWORD_DEFAULT);

        $query = "SELECT * FROM user WHERE email = '$email'";
        $res = $conn->query($query);

        if ($name == "" || $lastname == "" || $email == "" || $pass == "") {
            echo "
            <script>
            Swal.fire({
              title: 'Warning!',
              text: 'You must fill in the required fields.',
              icon: 'warning',
              confirmButtonText: 'OK'
            })
            </script>";
        } else if ($res->rowCount() > 0) {
            echo "
            <script>
            Swal.fire({
              title: 'Error!',
              text: 'There is already a registered user with the entered email.',
              icon: 'error',
              confirmButtonText: 'OK'
            })
            </script>";
        } else {
            $query_ins = $conn->prepare("INSERT INTO user (name, lastname, email, password) VALUES (?, ?, ?, ?)");
            $query_ins->execute([$name, $lastname, $email, $hash_pass]);

            if ($query_ins->rowCount() > 0) {
                echo "
                <script>
                Swal.fire({
                    title: 'Success!',
                    text: 'Registered user successfully',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'index.php';
                    }
                });
                </script>";
            } else {
                echo "
                <script>
                Swal.fire({
                    title: 'Error!',
                    text: 'The user could not register.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                })
                </script>";
            }
        }
    }
    ?>
    <section class="background-radial-gradient overflow-hidden">

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Mub - Developer <br />
                        <span style="color: hsl(218, 81%, 75%)">:D</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">

                            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" name="name" class="form-control" />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" name="lastname" class="form-control" />
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3" name="email" class="form-control" />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" name="password" class="form-control" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <!-- Register button -->
                                <button type="submit" name="register" class="btn btn-primary btn-block mb-4">
                                    Register
                                </button>

                                <!-- Sign Up button -->
                                <a href="index.php" type="submit" name="signUp" class="btn btn-primary btn-block mb-4">
                                    Sign up
                                </a>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>