<?php

   isset($_POST['login-btn']) ? require '../../App/Constrollers/LoginController.php' : "";
   echo isset($_GET['error']) ? "Hi" : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/output.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body class="bg-zinc-100">

    <div class="max-w-xl mx-auto mt-40 border border-zinc-200 rounded-md p-10 text-zinc-400 bg-zinc-50">
        <form action="../../App/Constrollers/LoginController.php" method="POST" autocomplete="off">
            <div class="flex flex-col space-y-2">
                <div class="text-center">
                    <h1 class="font-bold text-zinc-400">Login Page</h1>
                </div>
                <div class="flex flex-col">
                    <label for="email">Email</label>
                    <input class="p-1 rounded-md shadow-inner border border-zinc-200 bg-zinc-100 outline-none focus:bg-zinc-50 focus:ring-1"
                     type="email" name="email" id="email" placeholder="Your Email address" required />
                </div>
                <div class="flex flex-col">
                    <label for="password">Password</label>
                    <input class="p-1 rounded-md shadow-inner border border-zinc-200 bg-zinc-100 outline-none focus:bg-zinc-50 focus:ring-1  "
                     type="password" name="password" id="password" placeholder="Provide your password" required />
                </div>
                <div class="flex flex-row justify-between px-1">
                    <div>
                        <input class="bg-zinc-200 text-zinc-200" type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <div>
                        <a href="">Forget Password</a>
                    </div>
                </div>
                <div class="flex flex-row justify-between">
                    <div>
                        <p class="text-sm p-1">Don't have account yet <span><a class="text-blue-500 font-mono underline underline-offset-2" href="register.php">Sign Up</a></span></p>
                    </div>
                    <div>
                        <button name="login-btn" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 transition-colors text-white rounded-md" type="submit">Login</button>
                    </div>
                </div>
            </div>
        </form>
       
    </div>
    
</body>
</html>