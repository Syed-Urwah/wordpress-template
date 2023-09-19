<?php get_header(); ?>
<main class="h-fit  md:h-fit   w-[99.1vw]">
    <div class=" w-[95vw] xl:w-[90vw] m-auto flex flex-col md:flex-row justify-evenly bg-gray-100 h-fit mt-20 py-10 rounded-md">
    <?php get_template_part('templates/aside', 'nav'); ?>


        <div class="hidden md:block md:order-1 mx-6" style="border-left:1px solid #000;height:800px"></div>

        <div class="book-section md:order-2 mb-48 md:mb-auto flex md:flex-col justify-center space-x-2 md:space-x-0 flex-wrap">

            <div class="hidden"></div>

            <?php
            while (have_posts()) {
                the_post();
                get_template_part('templates/taxonomy', 'archive');
            }
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