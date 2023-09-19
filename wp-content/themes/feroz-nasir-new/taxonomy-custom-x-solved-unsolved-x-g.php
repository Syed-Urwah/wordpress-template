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
                ?>
                <!-- <div class="book-image flex flex-col md:flex-row items-center w-[300px] md:w-auto border-2 border-black px-0 rounded-md space-y-5 md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40 mb-6 md:mb-0">
                    <img src="<?php $bookimage = get_field('book_images');
                                echo $bookimage ?>" alt="">

                    <div class="book-details flex flex-col justify-center items-center space-y-6">
                        <h3 class="text-2xl text-center">Practical Biology Dr.Saifuddin Class 9 Science</h3>
                        <p class="text-red-600 text-center">Rs 125</p>
                        <p class="font-bold text-center" style="font-family:'Mukta', sans-serif;">This is practical book of Biology for class IX, written and published by Dr. Saifuddin.</p>
                        <a href="<?php echo the_permalink() ?>"><button class="bg-green-400 text-white px-4 py-2 rounded-md hover:border border-black hover:bg-blue-500">Read more</button></a>
                    </div>

                </div>


                <hr class="my-8 hidden md:block"> -->
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