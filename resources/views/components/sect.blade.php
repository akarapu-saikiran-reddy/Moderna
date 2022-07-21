<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $slot }}</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>{{ $slot }}</li>
            </ol>
        </div>
    </div>
</section>
