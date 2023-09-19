<?php get_header(); ?>

<main class="h-fit  md:h-fit   w-[99.1vw]">
    <div class=" w-[95vw] xl:w-[90vw] m-auto flex flex-col md:flex-row justify-evenly bg-gray-100 mt-20 py-10 rounded-md">
        <div class="classes-container h-fit flex justify-evenly flex-wrap w-[90vw] m-auto">

        <?php
        // $todaytime = date('F j, Y');
          $allBooks = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => array('class','class-x','class-xi','class-xii'),
            // 'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'DEC',
          )); ?>

            <?php   
                while($allBooks -> have_posts()){
                    $allBooks -> the_post();?>

                    <div class="img-1 flex flex-col content-center border-2 px-5 py-3 rounded-md mb-6 w-[300px] sm:w-[250px] xl:w-[350px] ">
                <!-- <h3 class="justify-self-center mx-auto font-medium text-4xl z-[1] link-underline-gray"><a href="#">Class IX</a></h3> -->
                <a href="<?php the_permalink(); ?>"><img class="w-60 h-72 rounded-md  lg:w-80 xl:w-96 xl:h-96 m-auto" src="<?php $bookimage = get_field('book_image');
                echo $bookimage ?>" alt=""></a>
                <a href="<?php the_permalink(); ?>">
                    <p class="text-center font-extrabold my-4" style="font-family: 'Mukta', sans-serif;"><?php the_title(); ?></p>
                </a>
                <p class="text-center text-red-600 mb-2">RS <?php $rs = get_field('price'); echo $rs ?></p>
                <button class="border-2 border-black rounded-md w-2/4 mx-auto hover:bg-yellow-400 hover:text-white">
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </button>

            </div>
               <?php }
            ?>

                    
        </div>
    </div>
</main>

<?php 
    echo paginate_links();
     ?>

<?php get_footer(); ?>