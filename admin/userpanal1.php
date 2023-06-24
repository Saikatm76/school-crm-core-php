<?php include 'connection.php' ?>

                                    <?php


                                    if (isset($_POST['submit'])) {

                                        ob_start();

                                        session_start();

                                        ob_flush();


                                        $_SESSION['username'] = $_POST['username'];
                                        $_SESSION['password'] = $_POST['password'];

                                        $username = $_SESSION['username'];
                                        $password = $_SESSION['password'];


                                        $query = "SELECT * FROM tbl_admin WHERE userid='$username' AND passwrd='$password'";
                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) >= 1) {

                                            header("location:dashboard.php");
                                        } else {
                                            echo "<b>wrong ADMIN</b>";

                                            session_destroy();
                                        }
                                    }

                                    ?>