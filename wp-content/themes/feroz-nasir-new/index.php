<?php get_header(); ?>

<main>

    <div style="background-image: url(<?php echo get_theme_file_uri('/images/banner.jpeg') ?>);" class="banner bg-cover h-[40vh] flex justify-center">
        <h3 class="text-white self-center text-2xl" style="font-family: 'Lobster', cursive;">Lose yourself in books
        </h3>
    </div>

    <div class="classes my-[15vh] h-fit">
        <h1 class="flex justify-center text-4xl mb-10 xl:text-6xl" style="font-family: 'Redressed', cursive;">Choose
            Your Class</h1>
        <div class="classes-container h-fit w-[90vw] mx-auto flex justify-evenly flex-wrap 2xl:w-[70vw]">
            <div class="img-1 flex flex-col">
                <h3 class="justify-self-center mx-auto font-medium text-4xl z-[1] link-underline-gray"><a href="<?php echo site_url('/group') ?>">Class IX</a></h3>
                <a href="<?php echo site_url('/group') ?>"><img class="class-chose w-60 h-56 rounded-md relative bottom-[40px] lg:w-80 xl:w-96 xl:h-72" src="<?php echo get_template_directory_uri(); ?>/images/class-9.jpeg" alt=""></a>
            </div>

            <div class="img-1 flex flex-col">
                <h3 class="justify-self-center mx-auto font-medium text-4xl z-[1] link-underline-gray"><a href="<?php echo site_url('/group-x') ?>">Class X</a></h3>
                <a href="<?php echo site_url('/group-x') ?>"><img class="class-chose w-60 h-56 rounded-md relative bottom-[40px] lg:w-80 xl:w-96 xl:h-72" src="<?php echo get_template_directory_uri(); ?>/images/class-10.jpeg" alt=""></a>
            </div>

        </div>

        <div class="classes-container h-fit w-[90vw] mx-auto flex justify-evenly flex-wrap 2xl:w-[70vw]">
            <div class="img-1 flex flex-col">
                <h3 class="justify-self-center mx-auto font-medium text-4xl z-[1] link-underline-gray"><a href="<?php echo site_url('/group-xi') ?>">Class XI</a></h3>
                <a href="<?php echo site_url('/group-xi') ?>"><img class="class-chose w-60 h-56 rounded-md relative bottom-[40px] lg:w-80 xl:w-96 xl:h-72" src="<?php echo get_template_directory_uri(); ?>/images/class-11.jpeg" alt=""></a>
            </div>

            <div class="img-1 flex flex-col">
                <h3 class="justify-self-center mx-auto font-medium text-4xl z-[1] link-underline-gray"><a href="<?php echo site_url('/group-xii') ?>">Class XII</a></h3>
                <a href="<?php echo site_url('/group-xii') ?>"><img class="class-chose w-60 h-56 rounded-md relative bottom-[40px] lg:w-80 xl:w-96 xl:h-72" src="<?php echo get_template_directory_uri(); ?>/images/class-12.jpeg" alt=""></a>
            </div>

        </div>

        <div class="classes-container h-fit w-[90vw] mx-auto flex justify-evenly flex-wrap 2xl:w-[70vw]">
            <div class="img-1 flex flex-col">
                <h3 class="justify-self-center mx-auto font-medium text-4xl z-[1] link-underline-gray"><a href="<?php echo site_url('/group-ba') ?>">BA</a></h3>
                <a href="<?php echo site_url('/group-ba') ?>"><img class="class-chose w-60 h-56 rounded-md relative bottom-[40px] lg:w-80 xl:w-96 xl:h-72" src="<?php echo get_template_directory_uri(); ?>/images/class-BA.jpeg" alt=""></a>
            </div>

            <div class="img-1 flex flex-col">
                <h3 class="justify-self-center mx-auto font-medium text-4xl z-[1] link-underline-gray"><a href="<?php echo site_url('/group-bcom') ?>">B.com</a></h3>
                <a href="<?php echo site_url('/group-bcom') ?>"><img class="class-chose w-60 h-56 rounded-md relative bottom-[40px] lg:w-80 xl:w-96 xl:h-72" src="<?php echo get_template_directory_uri(); ?>/images/class-Bcom.jpeg" alt=""></a>
            </div>

        </div>

    </div>

    <div class="classes my-[15vh] h-fit">
        <h1 class="flex justify-center text-4xl mb-10 xl:text-6xl" style="font-family: 'Redressed', cursive;">Latest
            Books</h1>
        <div class="classes-container h-fit flex justify-evenly flex-wrap w-[90vw] m-auto">

        <?php
        // $todaytime = date('F j, Y');
          $allBooks = new WP_Query(array(
            'posts_per_page' => 4,
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
                <a href="<?php the_permalink(); ?>"><img class="w-20 h-72 rounded-md  lg:w-80 xl:w-96 xl:h-96 m-auto" src="<?php $bookimage = get_field('book_image');
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




<?php get_footer(); ?>