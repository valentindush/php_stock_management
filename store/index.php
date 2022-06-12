<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container bg-slate-200 min-h-screen flex">
        <nav class="navbar bg-white p-3 w-[300px] h-screen relative">
            <div class="brand flex items-center flex-row-reverse justify-end">
                <p class="text-xl font-bold text-red-400 cursor-pointer text-center">STORE </p>
                <img class="w-[100px] h-[100px]" src="logo.svg" alt="">
            </div>

            <div class="links flex flex-col gap-1 mt-24">
                <a class="p-2 w-full flex gap-2 items-center text-sm bg-red-400 text-white" href=""><i class="fa-solid fa-chart-line"></i>Darshboard</a>
                <a class="p-2 w-full flex gap-2 items-center text-sm hover:bg-red-400 hover:text-white" href=""><i class="fa-solid fa-box"></i>Products</a>
                <a class="p-2 w-full flex gap-2 items-center text-sm hover:bg-red-400 hover:text-white" href=""><i class="fa-solid fa-store"></i>Inventory</a>
                <a class="p-2 w-full flex gap-2 items-center text-sm hover:bg-red-400 hover:text-white" href=""><i class="fa-solid fa-arrow-right-from-bracket"></i>Outgoing</a>
                <div class="last absolute bottom-12 px-3">
                    <a class="p-2 border-2 border-red-400 px-4 hover:scale-95 text-sm block rounded-full" href="">Logout</a>
                </div>
            </div>
        </nav>
        <div class="content h-screen">
            
        </div>
    </div>
</body>
</html>