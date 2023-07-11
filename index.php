<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/styles.css">
    <title>Document</title>

    <style>
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            left: 0;
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <main>
        <!-- Banner & Nav section -->
        <section class="relative w-screen h-screen overflow-hidden  bg-intro bg-no-repeat bg-cover flex items-end">
            <div class="flex w-full h-full justify-between flex-col items-center   z-10 ">
                <div></div>
                <div class="flex flex-col items-center  w-full">
                    <p class="text-5xl font-bold text-white">Packaging with Consideration</p>
                    <p class="font-light text-2xl text-center text-white">
                        Eco-Friendly Product
                    </p>
                </div>
                <div class="bg-white w-screen  z-10 " id="navbar">
                    <?php require_once("./components/navbar.php"); ?>
                </div>
            </div>
        </section>
        <div class="absolute inset-0 bg-black/70 w-screen h-screen"></div>


        <!-- Second section -->
        <div class="w-screen h-screen flex justify-center items-center">
            <div class="w-10/12 mx-auto">
                <!-- Content goes in here -->
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro cupiditate earum tempora voluptates omnis maxime asperiores a praesentium suscipit modi delectus esse iure recusandae, minus reprehenderit voluptatem ipsam ex quos?
                </p>
            </div>
        </div>
    </main>

    <script>
        window.onscroll = function() {
            myFunction()
        };
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>



</html>