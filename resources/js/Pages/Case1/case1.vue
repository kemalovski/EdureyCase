<template>
<body class=" h-screen relative min-h-screen flex flex-col">
<header class="px-2  xl:px-20 xl:mt-16 mt-4 flex items-center justify-between text-md xl:text-xl font-sans">
       <div class="flex ">
           <div >
               <img src="/sipay-logo.svg" alt="">
           </div>
            <div class=" ml-14 hidden md:block">
                <div class="flex">
                <div class="flex flex-col">
                <a href=""> Sanal POS </a>
                <a href="">Ürünleri</a>
                </div>
                <div class="ml-4 font-bold text-blue-800">
                +
                </div>
                </div>
            </div>
            <div class="ml-3  hidden md:block">
                <div class="flex">
                <div class="flex flex-col">
                <a href=""> Cüzdan</a>
                <a href="">Ürünleri</a>
                </div>
                <div class="ml-3 font-bold text-blue-800">
                +
                </div>
                </div>
            </div>
            <div class="ml-6 hidden md:block">
                <a href=""> Walletgate</a>
            </div>
    </div>
        <div class="flex mr-16 justify-center items-center">
           <div class="flex ">
               <div>
               <img src="/support.svg" alt="" class="mr-3">
               </div>
               <div class="hidden xl:block">
               <a href="" >Destek</a>
               </div>
            </div>
           <div class="ml-6 flex">
               <div>
               <img src="/login.svg" alt="" class="mr-3">
               </div>
               <div class=" hidden xl:block">
               <a href="">Giriş</a>
               </div>
            </div>
        
            
           <div class="ml-6 text-md xl:text-xl rounded-full border-2 px-2 py-1 border-blue-500 hidden xl:block">
               <div class="flex">
              <img src="/si-icon.svg" alt="" class="ml-3">
              <a href="" class="mx-3 text-blue-600 font-extrabold">Hesap Aç</a> 
               </div>
               </div>
           <div>
            <img src="/tr.svg" alt="" class="h-5 w-6 mx-6">

           </div>
           <div class="ml-6 block md:hidden">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </div>
        </div>

 </header>
</body>
</template>
<script>

export default ({
    setup() {
        
    },


})
</script>
