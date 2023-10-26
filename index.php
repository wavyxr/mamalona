<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    
    <style>
           .radio-label.selected {
            background-color: rgba(0, 123, 255, 0.7); 
            color: #fff;
            transition: all .5s;
        }

        h1{
            font-family: 'Kaushan Script', cursive;
                }

        .nav{
            display: grid;
            grid-template-columns: .25fr .65fr .20fr;
        }

        
            
            
    </style>
</head>
<body class="bg-slate-300">
    <header>
        
        <div class="bg-black/90">

            <div class="nav max-h-20 h-20 md:max-h-32 md:max-w-full md:h-32  text-white  ">
    
                <h1 class="flex  max-h-32 ">
                    <img src="icons/logo.svg" class=" max-h-20 h-20 md:max-h-32 md:h-32  " alt="" srcset="">
                    <span class="hidden md:visible tracking-widest md:flex items-center text-xl font-bold">Luz de Luna</span>
    
                </h1>
    
                <div class=" md:text-lg md:tracking-widest md:font-thin flex justify-center items-center md:justify-center">
                    <h2 class="md:flex hidden">
                        Inicio
                    </h2>
        
                    <h2 class="flex tracking-widest md:hidden items-center justify-center text-xl font-bold">Luz de Luna</h2>
    
                </div>
    
                <div class="flex items-center justify-evenly">
                    <a href="index.php" class="md:hover:text-xl md:transition-all">
    
                        <svg class="fill-white hover:fill-red-600 md:hover:w-9 md:hover:h-9 transition-all duration-700" width="34px" height="34px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12ZM17.5 8C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5C16 7.32843 16.6716 8 17.5 8Z" ></path> </g></svg>
                    </a>
                    <a class="block text-2xl text-white" href="test.php" class="hover:text-xl transition-all">
    
                        <svg class="fill-white hover:fill-blue-600 hover:w-9 hover:h-9 transition-all duration-700" fill="#ffffff" width="34px" height="34px" viewBox="0 0 24 24" id="facebook" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary" d="M14,6h3a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H14A5,5,0,0,0,9,7v3H7a1,1,0,0,0-1,1v2a1,1,0,0,0,1,1H9v7a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V14h2.22a1,1,0,0,0,1-.76l.5-2a1,1,0,0,0-1-1.24H13V7A1,1,0,0,1,14,6Z" ></path></g></svg>
                        
                    </a>
                </div>
    
    
            </div>

            <nav class="bg-white border-b-1 p-1  ">
                <ul class=" flex justify-evenly">
                    <li><a class="hover:font-bold hover:bg-black/10 hover:p-1.5 rounded-sm transition-all duration-200 " href="#">Inicio</a></li>
                    <li><a class="hover:font-bold hover:bg-black/10 hover:p-1.5 rounded-sm transition-all duration-200 " href="#">Saber tipo de piel</a></li>
                    <li><a class="hover:font-bold hover:bg-black/10 hover:p-1.5 rounded-sm transition-all duration-200 " href="#">Acerca de nosotros</a></li>
                </ul>
            </nav>

        </div>
        
     
    </header>
    <main class=" ">
        
        <div class="my-5 flex w-3/4 mx-auto gap-4">
            <section class="rounded-md bg-white mx-auto w-3/4 p-5 ">
                <h2 class="font-medium text-center mb-5">
                    Mision
                </h2>

                <p class="font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dicta cum consectetur, obcaecati omnis placeat eos ullam natus eaque. Placeat doloremque, dolores dolor alias esse ea officia impedit quod in.</p>


            </section>

            <section class="rounded-md bg-white mx-auto w-3/4 p-5 ">
                <h2 class="font-medium text-center mb-5">
                    Vision
                </h2>

                <p class="font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dicta cum consectetur, obcaecati omnis placeat eos ullam natus eaque. Placeat doloremque, dolores dolor alias esse ea officia impedit quod in.</p>


            </section>
            
            <section class="rounded-md bg-white mx-auto w-3/4 p-5 ">
                <h2 class="font-medium text-center mb-5">
                    Vision
                </h2>

                <p class="font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dicta cum consectetur, obcaecati omnis placeat eos ullam natus eaque. Placeat doloremque, dolores dolor alias esse ea officia impedit quod in.</p>


            </section>
        </div>
        
        </main >

    <footer class="">
        <p>Derechos reservados</p>
    </footer>
</body>



</html>

