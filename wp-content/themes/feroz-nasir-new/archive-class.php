<?php get_header(); ?>

    <main class="h-fit  md:h-fit   w-[99.1vw]">
        <div class=" w-[95vw] xl:w-[90vw] m-auto flex flex-col md:flex-row justify-evenly bg-gray-100 h-fit mt-20 py-10 rounded-md">
            <aside class="order-2 pl-10 md:-order-1 md:pl-0">
                <div class="search flex flex-col space-y-6 mb-6">
                    <label class="border-l-4 border-yellow-400 pl-12 text-xl " for="search-box">Search</label>
                    <input class="w-min py-1 rounded-md border border-black " type="search" name="search-box">
                </div>

                <div class="products space-y-4">
                    <h3 class="border-l-4 border-yellow-400 pl-12 text-xl">Product categories</h3>
                    <ul class="w-[70%] mx-auto space-y-2 text-xl md:pl-12 min-w-fit">
                        <!-- <li  id="click-class"><a href="#">Class Ix</a></li> -->
                        <li  id="click-class" class="cursor-pointer">Class IX</li>

                        <div class="pl-6 hidden" id="drop-down">
                            <li><a href="#">General IX</a></li>
                            <li><a href="#">Science IX</a></li>
                        </div>

                        <li class="cursor-pointer" id="click-class2">Class X</li>

                        <div class="pl-6 hidden" id="drop-down2">
                            <li><a href="#">General X</a></li>
                            <li><a href="#">Science X</a></li>
                        </div>

                        <li><a href="#">Class xI</a></li>

                        <div class="pl-6 hidden">
                            <li><a href="#">General XI</a></li>
                            <li><a href="#">Science XI</a></li>
                        </div>

                        <li><a href="#">Class xII</a></li>

                        <div class="pl-6 hidden">
                            <li><a href="#">General XII</a></li>
                            <li><a href="#">Science XII</a></li>
                        </div>
                    </ul>
                </div>

                <div class="follow mt-10">
                    <h3 class="border-l-4 border-yellow-400 pl-12 text-xl mt-6">Follow Us</h3>
                    <a href="#"><img src="images/followUS_facebook.ico" class=" md:w-[30%] mt-6 ml-20 md:ml-14 hover:bg-blue-500 alt="></a>
                </div>

            </aside>

            <div class="hidden md:block md:order-1 mx-6" style="border-left:1px solid #000;height:800px"></div>

            <div class="book-section md:order-2 mb-48 md:mb-auto flex md:flex-col justify-center space-x-2 md:space-x-0 flex-wrap">

                <div class="hidden"></div>

                    <?php 
                        while(have_posts()){
                            the_post();?>
                            <div class="book-image flex flex-col md:flex-row items-center w-[300px] md:w-auto border-2 border-black px-0 rounded-md space-y-5 md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40 mb-6 md:mb-0">
                        <img src="images/bio.jpg" alt="">

                        <div class="book-details flex flex-col justify-center items-center space-y-6">
                            <h3 class="text-2xl text-center">Practical Biology Dr.Saifuddin Class 9 Science</h3>
                            <p class="text-red-600 text-center">Rs 125</p>
                            <p class="font-bold text-center" style="font-family:'Mukta', sans-serif;">This is practical book of Biology for class IX, written and published by Dr. Saifuddin.</p>
                            <a href="#"><button class="bg-green-400 text-white px-4 py-2 rounded-md hover:border border-black hover:bg-blue-500">Read more</button></a>
                        </div>
                        

                    </div>
                    <hr class="my-8 hidden md:block">
                        <?php }
                    ?>
                    
                <!-- <a href="#">
                    <div class="class1 flex  border-2 border-black rounded-md md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40">
                        <img class="lg:w-auto md:w-[250px]" src="images/classX.jpg" alt="">
                        <h3 class="items-center self-center text-3xl">IX Science</h3>
                    </div>
                </a> -->

            </div>
        </div>
    </main>




<?php get_footer(); ?>