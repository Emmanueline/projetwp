<!-- Sidebar -->
<aside class="col-md-4 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic text-info">A propos</h4>
        <p class="mb-0"><?php bloginfo('description'); ?></p>
    </div>

    <div class="p-4">
        <h4 class="font-italic text-info">Catégories</h4>
        <ol class="list-unstyled mb-0">
            <li><?php wp_list_categories() ?></li>
        </ol>
    </div>

    <div class="p-4">
        <h4 class="font-italic text-info">Archives</h4>
        <ol class="list-unstyled mb-0">
            <li><?php wp_get_archives(); ?></li>
        </ol>
    </div>

    <div class="p-4">
        <h4 class="font-italic text-info">Où nous retrouver ?</h4>
        <ol class="list-unstyled">
            <li><a href="https://www.instagram.com/">Instagram</a></li>
            <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
        </ol>
    </div>
</aside>