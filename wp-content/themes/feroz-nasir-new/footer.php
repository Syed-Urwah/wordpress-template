<footer class=" bg-[#222222] text-white h-fit py-4 bottom-0 w-full">
    <div class="container m-0 space-y-8 flex flex-wrap flex-col sm:flex-row sm:w-[95vw] mx-auto space-x-8 md:w-[80vw] justify-between lg:w-[70vw]">
        <div class="hidden"></div>
        <div class="col-1 flex flex-col">
            <h3 class="font-bold border-l-2 border-yellow-400 px-2">Contact Info</h3>
            <p class="text-blue-500">Address</p>
            <Address>
                <p>Urdu Bazar, Karachi.</p>
                <p>03333244527</p>
            </Address>
        </div>
        <div class="col-2 flex flex-col">
            <h3 class="font-bold border-l-2 border-yellow-400 px-2">Useful Links</h3>
            <ul class="">
                <li class="list-disc list-inside hover:text-blue-500"><a href="<?php echo site_url('/about') ?>">About us</a></li>
                <li class="list-disc list-inside hover:text-blue-500"><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
            </ul>
        </div>
        <div class="col-3 flex flex-col">
            <h3 class="font-bold border-l-2 border-yellow-400 px-2">Follow Us</h3>
            <div class="media flex space-x-4 my-4">
                <a href="https://www.facebook.com/profile.php?id=100077046387767">
                    <img class="w-10 hover:bg-blue-500 rounded-lg" src="<?php echo get_theme_file_uri() ?>/images/icons8_facebook_32.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCoUKVH5OciCUOijfK_LLZTQ">
                    <img class="w-10 hover:bg-red-500 rounded-lg" src="<?php echo get_theme_file_uri() ?>/images/icons8_YouTube_32.png" alt=""></a>
            </div>

        </div>
    </div>
</footer>

<!-- <script src="js/script.js"></script> -->
<?php wp_footer(); ?>
</body>

</html>