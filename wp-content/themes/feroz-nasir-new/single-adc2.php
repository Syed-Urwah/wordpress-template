<?php get_header(); ?>


    <main class="h-fit  md:h-fit   w-[99.1vw]">
        <div class=" w-[95vw] xl:w-[90vw] m-auto flex flex-col md:flex-row justify-evenly bg-gray-100 h-fit mt-20 py-10 rounded-md">
        <?php get_template_part('templates/aside', 'nav'); ?>


            <div class="hidden md:block md:order-1 mx-6" style="border-left:1px solid #000;height:800px"></div>

            <div class="book-section md:order-2 mb-48 md:mb-auto flex md:flex-col justify-center space-x-2 md:space-x-0 flex-wrap">

                <div class="hidden"></div>

                
                    <div class="book-image flex flex-col md:flex-row  w-[300px] md:w-auto px-0 rounded-md space-y-5 md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40 mb-6 md:mb-0">
                        <img class="md:w-60 lg:w-96 h-fit" src="<?php $bookimage = get_field('book_image'); echo $bookimage?>" alt="">

                        <div class="book-details flex flex-col flex-wrap items-center space-y-6">
                            <h3 class="lg:text-3xl md:text-xl text-center"><?php the_title(); ?></h3>
                            <hr class="border border-gray-300 md:w-40 lg:w-96 hidden md:block">
                            <p class="text-red-600 text-center text-2xl"><?php $rs = get_field('price'); echo $rs ?></p>
                            <p class="font-bold text-center lg:w-6/12" style="font-family:'Mukta', sans-serif;"><?php the_content(); ?></p>
                            <a target="blank" href="https://wa.link/aisnzt"><button class="bg-green-400 text-white px-4 py-2 rounded-md hover:border border-black hover:bg-blue-500">Order Now</button></a>
                            
                        </div>

                    </div>
                

                <hr class="my-8 hidden md:block">

                <?php if(get_field('video_url')){ ?>

<div class="video">
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php $videoUrl = get_field('video_url'); echo $videoUrl;
?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<?php } ?>
                
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