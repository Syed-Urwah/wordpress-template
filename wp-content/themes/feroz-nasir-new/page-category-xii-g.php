
    <?php get_header(); ?>


    <main class="h-[130vh]  md:h-screen   w-[99.1vw]">
        <div class=" w-[95vw] xl:w-[90vw] m-auto flex flex-col md:flex-row justify-evenly bg-gray-100 mt-20 py-10 rounded-md">
        <?php get_template_part('templates/aside', 'nav'); ?>


            <div class="hidden md:block md:order-1" style="border-left:1px solid #000;height:800px"></div>

            <div class="book-section md:order-2 mb-48 md:mb-auto flex md:flex-col justify-center space-x-4 md:space-x-0 flex-wrap">

                <div class="hidden"></div>

                
                <a href="<?php echo site_url('/custom-xii/practical-book-xii-g') ?>">
                    <div class="class1 flex flex-col items-center md:flex-row w-[300px] md:w-auto border-2 border-black px-0 rounded-md space-y-5 md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40 mb-6 md:mb-0">
                        <img class="lg:w-[200px] w-[200px] md:w-[250px]" src="<?php echo get_template_directory_uri(); ?>/images/Practical.jpg" alt="">
                        <h3 class="items-center self-center text-3xl ">Solved Past Paper</h3>
                    </div>
                </a>

                <hr class="my-8 hidden md:block">

                <a href="<?php echo site_url('/custom-xii/solved-unsolved-xii-g') ?>">
                    <div class="class1 flex flex-col items-center md:flex-row w-[300px] md:w-auto border-2 border-black px-0 rounded-md space-y-5 md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40 mb-6 md:mb-0">
                        <img class="lg:w-[200px] w-[200px] md:w-[250px]" src="<?php echo get_template_directory_uri(); ?>/images/solved.jpg" alt="">
                        <h3 class="items-center self-center text-3xl ">unsolved Past Paper</h3>
                    </div>
                </a>

                <hr class="my-8 hidden md:block">
                

                <a href="<?php echo site_url('/custom-xii/text-book-guide-xii-g') ?>">
                    <div class="class1 flex flex-col items-center md:flex-row w-[300px] md:w-auto border-2 border-black px-0 rounded-md space-y-5 md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40 mb-6 md:mb-0">
                        <img class="lg:w-[200px] w-[200px] md:w-[250px]" src="<?php echo get_template_directory_uri(); ?>/images/guide.jpg" alt="">
                        <h3 class="items-center self-center text-3xl ">Text Book / Guide</h3>
                    </div>
                </a>

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