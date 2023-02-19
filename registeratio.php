<?php
                if (isset($_POST["submit"])) {
                    $userName = $_POST["username"];
                    $email = $_POST["enail"];
                    $password = $_POST["password"];
                    $rePassword= $_POST["re-password"];
                    $errors = array();
                    if (empty($userName) OR empty($email) OR empty($password) OR empty($rePassword)) {
                        array_push($errors, "All fields must be filled");
                    }
                    if (!filter_var($email, FILTER_VALIDATE)) {
                        array_push($errors, "Email is not valid");
                    }
                    if (strlen($password)<8) {
                        array_push($errors, "Password must be at least 8 characters long");
                    }
                    if ($password!==$rePassword) {
                        array_push($errors, "Password does not match");
                    }
                    if (count($errors)>0) {
                        foreach ($errors as $errors) {
                            echo "<div class = 'alert alert-danger'>$errors</div>";
                        }
                    }
                    else {
                        
                    }
                } 
            ?>