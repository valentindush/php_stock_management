<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outgoing</title>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="">

        <div class="container bg-slate-200 min-h-screen flex">
            <nav class="navbar bg-white p-3 w-[300px] h-screen relative">
                <div class="brand flex items-center flex-row-reverse justify-end">
                    <p class="text-xl font-bold text-red-400 cursor-pointer text-center">STORE </p>
                    <img class="w-[100px] h-[100px]" src="../logo.svg" alt="">
                </div>

                <div class="links flex flex-col gap-1 mt-24">
                    <a class="p-2 w-full flex gap-2 items-center text-sm hover:bg-red-400 hover:text-white" href="../index.php"><i class="fa-solid fa-chart-line"></i>Darshboard</a>
                    <a class="p-2 w-full flex gap-2 items-center text-sm hover:bg-red-400 hover:text-white" href="../products/product.php"><i class="fa-solid fa-box"></i>Products</a>
                    <a class="p-2 w-full flex gap-2 items-center text-sm hover:bg-red-400 hover:text-white" href="../inventory/index.php"><i class="fa-solid fa-store"></i>Inventory</a>
                    <a class="p-2 w-full flex gap-2 items-center text-sm bg-red-400 text-white" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Outgoing</a>
                    <div class="last absolute bottom-12 px-3">
                        <a class="p-2 border-2 border-red-400 px-4 hover:scale-95 text-sm block rounded-full" href="">Logout</a>
                    </div>
                </div>
            </nav>
            <div class="flex justify-between ml-[3%] mt-[2%] ">

            </div>
            <div class=" mt-5 content-center w-full">

                <table class="w-[90%]  mt-10 rounded-xl table-auto border-collapse border-spacing-6">
                    <div class="search bg-white w-[90%] flex items-center p-2 rounded-full relative justify-between">
                        <i class="fa-solid fa-magnifying-glass absolute left-8 text-gray-500"></i>
                        <input type="text" placeholder="Search Outgoing" class="p-2 bg-slate-100 rounded-full pl-12 outline-none border-none focus:border-red-400">
                        <button class="border-2 border-red-400 p-2 px-4 text-sm rounded-full">Add new</button>
                    </div>
                    <thead>
                    
                    </thead>
                    <tbody class="border-collapse border-spacing-6">
            
                    <tr class="p-2 shadow-md rounded-lg bg-white mt-3">
                        <td class="p-3"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=90&.v=1567022175704" alt="stuff" class="w-[100px] h-[100px] object-cover" ></td>
                        <td class="flex justify-between  ">
                            <div class="ml-5 pt-6">
                                <p class="font-semi-bold text-black text-lg">Product Name</p>
                                <p class="font-medium text-gray-700 text-sm mt-3">sto velit, id reprehenderit excepturi veniam, rem totam voluptatum consectetur doloremque vero, nemo pariatur qui!</p>
                            </div>
                            <div class="flex gap-3 items-center h-full pt-12">
                                <button class="bg-slate-500 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-pen"></i>Edit</button>
                                <button class=" bg-red-400 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-trash"></i>Delete</button>
                            </div>
                        </td>               
                    </tr>
                    <tr class="p-2 shadow-md rounded-lg bg-white mt-3">
                        <td class="p-3"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=90&.v=1567022175704" alt="stuff" class="w-[100px] h-[100px] object-cover" ></td>
                        <td class="flex justify-between  ">
                            <div class="ml-5 pt-6">
                                <p class="font-semi-bold text-black text-lg">Product Name</p>
                                <p class="font-medium text-gray-700 text-sm mt-3">sto velit, id reprehenderit excepturi veniam, rem totam voluptatum consectetur doloremque vero, nemo pariatur qui!</p>
                            </div>
                            <div class="flex gap-3 items-center h-full pt-12">
                                <button class="bg-slate-500 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-pen"></i>Edit</button>
                                <button class=" bg-red-400 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-trash"></i>Delete</button>
                            </div>
                        </td>               
                    </tr>
                    <tr class="p-2 shadow-md rounded-lg bg-white mt-3">
                        <td class="p-3"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=90&.v=1567022175704" alt="stuff" class="w-[100px] h-[100px] object-cover" ></td>
                        <td class="flex justify-between  ">
                            <div class="ml-5 pt-6">
                                <p class="font-semi-bold text-black text-lg">Product Name</p>
                                <p class="font-medium text-gray-700 text-sm mt-3">sto velit, id reprehenderit excepturi veniam, rem totam voluptatum consectetur doloremque vero, nemo pariatur qui!</p>
                            </div>
                            <div class="flex gap-3 items-center h-full pt-12">
                                <button class="bg-slate-500 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-pen"></i>Edit</button>
                                <button class=" bg-red-400 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-trash"></i>Delete</button>
                            </div>
                        </td>               
                    </tr>
                    <tr class="p-2 shadow-md rounded-lg bg-white mt-3">
                        <td class="p-3"><img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=90&.v=1567022175704" alt="stuff" class="w-[100px] h-[100px] object-cover" ></td>
                        <td class="flex justify-between  ">
                            <div class="ml-5 pt-6">
                                <p class="font-semi-bold text-black text-lg">Product Name</p>
                                <p class="font-medium text-gray-700 text-sm mt-3">sto velit, id reprehenderit excepturi veniam, rem totam voluptatum consectetur doloremque vero, nemo pariatur qui!</p>
                            </div>
                            <div class="flex gap-3 items-center h-full pt-12">
                                <button class="bg-slate-500 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-pen"></i>Edit</button>
                                <button class=" bg-red-400 w-[100px] h-[33px] mr-5 flex gap-4 items-center justify-center text-white"><i class="fa-solid fa-trash"></i>Delete</button>
                            </div>
                        </td>               
                    </tr>
                    

                    </tbody>
                </table>
      </div>

    </div>



    
</body>
</html>