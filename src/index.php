<?php 
    session_start(); 
    require '../App/config/baseUrl.php';
    
    if(!isset($_SESSION['name'])){
        header('location:'. baseUrl('auth/login.php'));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body class="bg-zinc-100">

    <!-- Webpage header -->
    <header class="max-w-5xl mx-auto">
        <div class="">
            <div class="flex flex-row justify-between bg-gray-900 text-gray-300 p-3">
                <ul class="flex flex-row space-x-3">
                    <li class=""><a href="">Home</a></li>
                    <li class=""><a href="">Posts</a></li>
                    <li><a href="">About</a></li>
                </ul>
                <ul class="flex flex-row space-x-4">
                    <li><span class="text-lime-200"><?php 
                    if(isset($_SESSION['name'])){
                        echo $_SESSION['name'];
                    }
                    ?></span></li>
                    <li><a href="">Profile</a></li>
                    <?php 
                    $path = baseUrl('auth/logout.php');
                    ?>
                    <li><a class="text-xs font-mono text-red-500" href="<?php echo $path; ?>">Logout</a></li>
                </ul>
            </div>
        </div>   
    </header>

    <!-- Posts section Or content section -->
    <section class="max-w-5xl mx-auto border shadow-md bg-white">
        <div class="h-screen">

        </div>
    </section>

    <!-- Webpage footer  -->
    <footer class="max-w-5xl mx-auto p-5 bg-gray-800 text-center">
        <div class="">
            <span class="text-gray-200">Powered by Zabihullah Danish</span>
        </div>
    </footer>


</body>
</html>