<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luz de Luna - Tipo de Piel</title>
    
    <link rel="stylesheet" href="/dist/output.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    
    <link rel="icon" href="../icons/logoBgBlack.svg" type="image/png">
    
  
    
    <style>

body{
            margin: 0;
            padding: 0;
            background: url('/img/a.webp') ;
            background-size: cover;
            background-repeat: no-repeat;

}
        .radio-label.selected {
            background-color: rgba(0, 123, 255, 0.7); 
            color: #fff;
            transition: all .5s;
        }

        h1{
            font-family: 'Kaushan Script', cursive;
                }


        .div_img{
            background: url('/img/zyro-image.png') ;
            
            background-size: 100% 100%;
            background-repeat: no-repeat;
            
            height: 50vh;
            width: 100%;
            margin-bottom: 10rem;

            box-shadow: 0 3px 10px rgb(0,0,0,0.2);
            
            
        }

        @media (min-width:768px) {
          .nav{
                display: flex;
                
            }

            .nav_h1{
                
                display: grid;
                grid-template-columns: .25fr .75fr;
                

            }
            .c{
                width: 100%;
            }
            .sec_1{
              display: flex;
              justify-content: center;
              gap: 0;
              
            }
            .sec_1>div{
              width: 85%;
              
            }
            .secciones{
                width: 85%;
                display: grid;
                grid-template-columns:repeat(2,1fr) ;

                
            }
               
            .sombra:hover{
                cursor: pointer;
                transition: all 300ms;
                width: 86%;
                box-shadow: 4px 8.0px 8.0px rgba(0,0,0,0.38);
            }
                

          }

          @media (min-width:1440px) {
          .nav{
                display: flex;
            }

            .nav_h1{
                
                display: grid;
                grid-template-columns: .25fr .75fr;
                

            }
            .c{
                width: 100%;
            }
            .sec_1{
              display: flex;
              justify-content: center;
              gap: 0;
              
            }
            .sec_1>div{
              width: 85%;
              
            }
            .secciones{
                width: 60%;
                display: grid;
                grid-template-columns:repeat(2,1fr) ;

                
            }
               
            .sombra:hover{
                cursor: pointer;
                transition: all 300ms;
                width: 90%;
                box-shadow: 4px 8.0px 8.0px rgba(0,0,0,0.38);
            }
                

          }
        
        @media (max-width:767px){
            .nav{
                display: flex;
                width: 90%;
            }

            .nav_h1{
                
                display: grid;
                grid-template-columns: .25fr .75fr;
                

            }
            .c{
                width: 100%;
            }
            .sec_1{
              display: flex;
              justify-content: center;
              gap: 0;
              
            }
            .sec_1>div{
              width: 85%;
              
            }
            .secciones{
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 90%;
                
            }
               
            .sombra:hover{
                cursor: pointer;
                transition: all 300ms;
                width: 91%;
                box-shadow: 4px 8.0px 8.0px rgba(0,0,0,0.38);
            }
        }
        @media (min-width:770px) {
            .div_img{
                height: 420px;
            }
            .secciones{
                display: grid;
                grid-template-columns: repeat(2,1fr);
                grid-template-rows: repeat(2,1fr);  
            }
            .sec_1{
              display: flex;
              
            }

            .img_section:hover{
                background-image:
                
                radial-gradient(circle, rgba(0,0,0,.50) 0%, rgb(0, 0, 0,0) 100%),
                
                url('https://hips.hearstapps.com/hmg-prod/images/flawlessskin-1589384044.png?crop=0.5xw:1xh;center,top&resize=640:*');
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            
            .img_section_2:hover{
                
                background-image:
    
                radial-gradient(circle, rgba(0,0,0,.50) 0%, rgb(0, 0, 0,0) 100%),
    
                url('https://cdn.shopify.com/s/files/1/0061/5347/0019/files/shutterstock_1516505810_1024x1024.jpg?v=1626868511');
                background-repeat: no-repeat;
                background-size: 100% 100%;

                
            }
            .img_section_3:hover{
                background-image:
    
                radial-gradient(circle, rgba(0,0,0,.50) 0%, rgb(0, 0, 0,0) 100%),
    
                url('https://rachelmkpartist.files.wordpress.com/2018/01/tipos-de-piel.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            
            
            
        .nav{
            display: grid;
            grid-template-columns: .25fr .65fr .20fr;
        }
 
        }

        .img_section{
            background-image:
            
            radial-gradient(circle, rgba(0,0,0,.25) 0%, rgb(0, 0, 0,0) 100%),
            
            url('https://hips.hearstapps.com/hmg-prod/images/flawlessskin-1589384044.png?crop=0.5xw:1xh;center,top&resize=640:*');
            background-repeat: no-repeat;
            background-size: 100% 100%;

            border-radius: .75rem .75rem 0 0;
            

        }
        
        
        
        .img_section_2{
            background-image:
            
            radial-gradient(circle, rgba(0,0,0,.25) 0%, rgb(0, 0, 0,0) 100%),
            
            url('https://cdn.shopify.com/s/files/1/0061/5347/0019/files/shutterstock_1516505810_1024x1024.jpg?v=1626868511');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            border-radius: .75rem .75rem 0 0;

        }

        .img_section_3{
            background-image:

            radial-gradient(circle, rgba(0,0,0,.25) 0%, rgb(0, 0, 0,0) 100%),

            url('https://rachelmkpartist.files.wordpress.com/2018/01/tipos-de-piel.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            border-radius: .75rem .75rem 0 0;
        }

        .cambiar:hover{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        @media (max-width:550px){
          .marca{
            display: flex;
            position: absolute;
            width: 100%;
            text-align: center;
            margin-top: 1.6rem;
            
            
          }

        }

        @media (min-width:551px){
          .marcamd{
            display: flex;
          }
        }
        
        .activo{
            padding-bottom: 5px;
            border-bottom:1px solid black ;
        }

        

        
    </style>
</head>
<body >
<header class="">
        
        <div class="bg-black/90 relative ">
          <span class="  text-white hidden marca  justify-center items-center  cursor-pointer text-xl   font-bold  " onclick="window.location.href='index_2.html'" >Luz de Luna</span>

            <div class=" nav  max-h-20 h-20 md:max-h-32 md:max-w-full md:h-32  text-white relative ">
    
                <h1 class="animate-fade-right animate-once animate-duration-[500ms] nav_h1 flex w-full md:w-full md:max-h-32 ">
                    <img src="/icons/logo.svg" height="80px" width="80px" onclick="window.location.href='index_2.html'" class="cursor-pointer max-h-20 h-20 md:max-h-32 md:h-32  " alt="" srcset="">
                    <span class="marcamd hidden text-white   items-center  cursor-pointer text-xl   font-bold  " onclick="window.location.href='index_2.html'" >Luz de Luna</span>
                    
                  </h1>
    
                <div class="animate-fade-down animate-once animate-duration-[500ms] hidden md:text-lg md:tracking-widest md:font-thin md:flex  md:items-center md:justify-center">
                    <h2 class="md:flex hidden">
                        Inicio
                    </h2>
        
                    <h2 class="  tracking-widest md:hidden items-center justify-center text-xl font-bold">Luz de Luna</h2>
    
                </div>

                <div class="flex  justify-end w-full">
                  
                  <div class=" animate-fade-left animate-once animate-duration-[500ms] flex items-center w-5/12 md:w-full  justify-evenly gap-5 ">
                    <a  target="_blank"  href="https://instagram.com/luzdeluna_oficial2023?igshid=OGQ5ZDc2ODk2ZA==" class="md:hover:text-xl md:transition-all">
      
                        <svg class="fill-white hover:fill-red-600 md:hover:w-9 md:hover:h-9 transition-all duration-300" width="26px" height="26px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12ZM17.5 8C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5C16 7.32843 16.6716 8 17.5 8Z" ></path> </g></svg>
                    </a>
                    <a  target="_blank" class="block text-2xl text-white" href="https://www.facebook.com/profile.php?id=61553982506277&mibextid=gik2fB" class="hover:text-xl transition-all">
    
                        <svg class=" fill-white hover:fill-blue-600 hover:w-9 hover:h-9 transition-all duration-300" fill="#ffffff" width="24px" height="24px" viewBox="0 0 24 24" id="facebook" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary" d="M14,6h3a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H14A5,5,0,0,0,9,7v3H7a1,1,0,0,0-1,1v2a1,1,0,0,0,1,1H9v7a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V14h2.22a1,1,0,0,0,1-.76l.5-2a1,1,0,0,0-1-1.24H13V7A1,1,0,0,1,14,6Z" ></path></g></svg>
                        
                    </a>
                  </div>
      
                </div>
                
    
            </div>

            <nav class="bg-white border-b-1 p-4 w-full ">
                <ul class="grid justify-center text-center gap-5 md:flex md:justify-evenly ">
                    <li><a class=" hover:font-bold hover:bg-black/10 hover:p-1.5 hover:rounded-sm transition-all duration-200 " href="index_2.html">Inicio</a></li>
                    <li><a class="activo hover:font-bold hover:bg-black/10 hover:p-1.5 rounded-sm transition-all duration-200 " href="test.html">Saber tipo de piel</a></li>
                    <li><a class="hover:font-bold hover:bg-black/10 hover:p-1.5 rounded-sm transition-all duration-200 " href="Contactanos.html">Contactanos</a></li>
                </ul>
            </nav>

        </div>
        
     
    </header>

    <main>

    

    <?php 
      isset($_SESSION['respuesta']) ? $tipo_de_piel = $_SESSION['respuesta'] : $tipo_de_piel = ''; 

      isset($_SESSION['nombre']) ? $nombre = $_SESSION['nombre'] : $nombre = ''; 
      
      ?>



    
        <h2>
            

            <?php 

                

                
                switch ($tipo_de_piel) {
                    case 'Seca':

                        echo
                        
                        '
                        

                        <h2 class="flex flex-col gap-2 text-center font-bold mt-5" >
                        <span style="color: red;" class=" ">
                            Gracias por llenar el formulario
                        </span>
                        '.$nombre.', Tu tipo de piel fue: Seca
                    </h2>

                    <div class="w-11/12  mx-auto flex flex-col gap-8  responsivo ">
                        
               
                        <div class="bg-white mt-5 p-4 md:p-8 rounded-lg flex flex-col">
                            <h3 class="py-2 text-center font-semibold flex flex-col"><span>Te recomendamos  </span>Crema Facial Hidratante Para Piel Seca</h3>
                            <img class="animate-fade-up animate-delay-200 rounded-xl w-full mb-4" src="../img/CremaPielSeca.webp" alt="GelPielGrasa">
                            <div class="bg-black text-white p-4 rounded-lg">
                                <p class="mb-4 font-semibold">Crema hidratante a base de aceites para piel seca fue creado para mantener a esas pieles escamosas y secas bien hidratadas con ingredientes aceitodos que son ideales para este tipo de pieles como lo es la manteca de karité y aceites de aguacate y vitamina E. Manten tu rostro sin descamacion e hidratado <p>Con un precio <p>Con un precio <span class="font-bold text-yellow-400">$120</span></p></p>
                            </div>
                        </div>
                           

                    
                       
                       
                        ';

                        
                        break;


                    case 'Grasa':

                        echo
                        
                        '
                        <h2 class="flex flex-col gap-2 text-center font-bold mt-5" >
                        <span style="color: red;" class=" ">
                            Gracias por llenar el formulario
                        </span>
                        '.$nombre.', Tu tipo de piel fue: Grasa
                    </h2>
            
            
                    <div class="w-11/12  mx-auto flex flex-col gap-8  responsivo ">
                        
               
                        <div class="bg-white mt-5 p-4 md:p-8 rounded-lg flex flex-col">
                            <h3 class=" py-2 text-center font-semibold flex flex-col"><span>Te recomendamos  </span>Gel Facial Hidratante Para Piel Grasa</h3>
                            <img class="animate-fade-up animate-delay-200 rounded-xl w-full mb-4" src="../img/GelPielGrasa.webp" alt="GelPielGrasa">
                            <div class="bg-black text-white p-4 rounded-lg">
                                <p class="mb-4 font-semibold">Gel Hidratante para piel grasa esta diseñado para hidratar esps rostros brillosos que tambien requieren una buena hidratación, creado con ingredientes organicos como agua de rosas, gel de aloe vera y vitamina E <p>Con un precio <span class="font-bold text-yellow-400">$120</span></p></p>
                            </div>
                        </div>
                       
                        ';



                        
                        break;
                    case 'Mixta':
                        echo
                        
                        '
                        <h2 class="flex flex-col gap-2 text-center font-bold mt-5" >
                        <span style="color: red;" class=" ">
                            Gracias por llenar el formulario
                        </span>
                        '.$nombre.', Tu tipo de piel fue: Mixta
                    </h2>
            
            
                    <<div class="w-11/12  mx-auto flex flex-col gap-8  responsivo ">
                        
               
                        <div class="bg-white mt-5 p-4 md:p-8 rounded-lg flex flex-col">
                            <h3 class="py-2 text-center font-semibold flex flex-col"><span>Te recomendamos  </span>Gel Facial Hidratante Para Piel Grasa</h3>
                            <img class="animate-fade-up animate-delay-200 rounded-xl w-full mb-4" src="../img/GelPielGrasa.webp" alt="GelPielGrasa">
                            <div class="bg-black text-white p-4 rounded-lg">
                                <p class="mb-4 font-semibold">Gel Hidratante para piel grasa esta diseñado para hidratar esps rostros brillosos que tambien requieren una buena hidratación, creado con ingredientes organicos como agua de rosas, gel de aloe vera y vitamina E <p>Con un precio <span class="font-bold text-yellow-400">$120</span></p></p>
                            </div>
                        </div>
                           
                        ';
                        break;
                    case '':
                        echo 'llene el formulario';

                        
                        break;



                    
                    }


            ?>

        </h2>

    </main>
    
    <footer class="py-5 mt-10 text-center bg-white/80">
        <p class="font-bold">©Derechos reservados</p>
        
    </footer>

    <style>
           @media (min-width: 748px) {
        .responsivo{
            display: grid;
           
            width: 40%;
            margin: auto;
        }
    }
    </style>
</body>
</html>