<aside class="order-2 pl-10 md:-order-1 md:pl-0">
    <!-- <div class="search flex flex-col space-y-6 mb-6">
        <label class="border-l-4 border-yellow-400 pl-12 text-xl " for="search-box">Search</label>
        <input class="w-min py-1 rounded-md border border-black " type="search" name="search-box">
    </div> -->

   

    <div class="products space-y-4">
        <h3 class="border-l-4 border-yellow-400 pl-12 text-xl">Product categories</h3>
        <ul class="w-[70%] mx-auto space-y-2 text-xl md:pl-12 min-w-fit">
            <!-- <li  id="click-class"><a href="#">Class Ix</a></li> -->
            <li id="click-class" class="cursor-pointer">Class IX</li>

            <div class="pl-6 hidden" id="drop-down">
                <li><a href="<?php echo site_url('/category-g') ?>">General IX</a></li>
                <li><a href="<?php echo site_url('/category') ?>">Science IX</a></li>
            </div>

            <li class="cursor-pointer" id="click-class2">Class X</li>

            <div class="pl-6 hidden" id="drop-down2">
                <li><a href="<?php echo site_url('/category-x-g') ?>">General X</a></li>
                <li><a href="<?php echo site_url('/category-x') ?>">Science X</a></li>
            </div>

            <li class="cursor-pointer" id="click-class3">Class xI</li>

            <div class="pl-6 hidden" id="drop-down3">
                <li><a href="<?php echo site_url('/category-xi-g') ?>">General XI</a></li>
                <li><a href="<?php echo site_url('/category-xi') ?>">Science XI</a></li>
            </div>

            <li class="cursor-pointer" id="click-class4">Class xII</li>

            <div class="pl-6 hidden" id="drop-down4">
                <li><a href="<?php echo site_url('/category-g-xii') ?>">General XII</a></li>
                <li><a href="<?php echo site_url('/category-xii') ?>">Science XII</a></li>
            </div>

            <li class="cursor-pointer" id="click-class5"><a href="<?php echo get_post_type_archive_link('adc1'); ?>">ADC I</a></li>

            <li class="cursor-pointer" id="click-class6"><a href="<?php echo get_post_type_archive_link('adc2'); ?>">ADC II</a></li>
        </ul>
    </div>

    <div class="follow mt-10 hidden md:block">
        <h3 class="border-l-4 border-yellow-400 pl-12 text-xl mt-6">Follow Us</h3>
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/followUS_facebook.ico" class=" md:w-[30%] mt-6 ml-20 md:ml-14 hover:bg-blue-500 alt="></a>
    </div>

</aside>