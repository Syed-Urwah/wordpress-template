<div class="book-image flex flex-col md:flex-row items-center w-[300px] md:w-auto border-2 border-black px-0 rounded-md space-y-5 md:space-x-6 lg:space-x-20 md:pr-10 lg:pr-40 mb-6 md:mb-0">
    <img class="book-img" src="<?php $bookimage = get_field('book_image');
                echo $bookimage ?>" alt="">

    <div class="book-details flex flex-col justify-center items-center space-y-6">
        <h3 class="text-4xl text-center"><?php the_title(); ?></h3>
        <p class="text-red-600 text-center">RS <?php $rs = get_field('price'); echo $rs ?></p>
        <p class="font-bold text-center text-2xl" style="font-family:'Mukta', sans-serif;"><?php if( has_excerpt()) {
                  echo get_the_excerpt();
                } else{
                  echo wp_trim_words(get_the_content(), 10);
                } ?></p>
        <a href="<?php echo the_permalink() ?>"><button class="bg-green-400 text-white px-4 py-2 rounded-md hover:border border-black hover:bg-blue-500">Read more</button></a>
    </div>

</div>


<hr class="my-8 hidden md:block">