<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-400">
    <div class="w-full h-[100vh] ">
       <div class="flex justify-between ml-[3%] mt-[2%] ">
        <div class="w-[70%]">
            <input class="bg-slate-100 w-[50%] h-[5vh] rounded-l-2xl text-center"  type="text" placeholder="search">
            <button class="bg-slate-100 w-[10%] h-[5vh] rounded-r-2xl" ><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div>
            <button class="bg-[#c6604e] mr-8 min-w-[250px] min-h-[5vh] rounded-2xl">New Products</button>
        </div>
       </div>
      <div class=" mt-5 content-center">
        <table class="border-collapse border border-slate-500 bg-white shadow-md w-[90%] ml-[5%] mt-10 rounded-xl">
            <thead>
              <tr class="border border-slate-600 hover:bg-slate-100 ">
                <td class="border border-slate-600"><img src="image/stuff.jpg" alt="stuff" class="w-[100%] h-[10vh]" ></td>
                <td class="flex justify-between  ">
                    <div class="ml-5">
                    <p class="mt-5 ml-5 font-bold">name</p>
                    <p class="ml-5 mb-2">This is a product</p>
                    </div>
                    <div class="mt-5 mr-5">
                        <button class="bg-slate-500 w-[100px] h-[5vh] mr-5"">Edit</button>
                        <button class=" bg-red-200 w-[100px] h-[5vh] mr-5">Delete</button>
                    </div>
                </td>

                
              </tr>
            </thead>
            <tbody>
              <tr class="border border-slate-600 hover:bg-slate-100 ">
                <th class="border border-slate-600"><img src="image/stuff.jpg" alt="stuff" class="w-[100%] h-[10vh]" ></th>
                <td class="flex justify-between  ">
                    <div class="ml-5">
                        <p class="mt-5 ml-5 font-bold">name</p>
                        <p class="ml-5 mb-2">This is a product</p>
                        </div>
                    <div class="mt-5 mr-5">
                        <button class="bg-slate-500 w-[100px] h-[5vh] mr-5">Edit</button>
                        <button class=" bg-red-200 w-[100px] h-[5vh] mr-5">Delete</button>
                    </div>
                </td>               
              </tr>
              <tr class="border border-slate-600 hover:bg-slate-100 ">
                <th class="border border-slate-600"><img src="image/stuff.jpg" alt="stuff" class="w-[100%] h-[10vh]" ></th>
                <td class="flex justify-between  ">
                    <div class="ml-5">
                        <p class="mt-5 ml-5 font-bold">name</p>
                        <p class="ml-5 mb-2">This is a product</p>
                        </div>
                    <div class="mt-5 mr-5">
                        <button class="bg-slate-500 w-[100px] h-[5vh] mr-5">Edit</button>
                        <button class="bg-red-200 w-[100px] h-[5vh] mr-5">Delete</button>
                    </div>
                </td>                
              </tr>
              <tr class="border border-slate-600 hover:bg-slate-100 ">
                <th class="border border-slate-600"><img src="image/stuff.jpg" alt="stuff" class="w-[100%] h-[10vh]" ></th>
                <td class="flex justify-between  ">
                    <div class="ml-5">
                        <p class="mt-5 ml-5 font-bold">name</p>
                        <p class="ml-5 mb-2">This is a product</p>
                        </div>
                    <div class="mt-5 mr-5">
                        <button class="bg-slate-500 w-[100px] h-[5vh] mr-5"">Edit</button>
                        <button class=" bg-red-200 w-[100px] h-[5vh] mr-5">Delete</button>
                    </div>
                </td>                
              </tr>
            </tbody>
          </table>
      </div>
    </div>
</body>
</html>