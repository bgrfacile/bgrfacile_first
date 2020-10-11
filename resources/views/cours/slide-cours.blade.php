<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<div class="mb-4  text-center">
    <nav
        class="MS-item__matiere slider flex bg-white items-center relative overflow-hidden text-center">
        <a href="#" class="block w-full py-4">Mathématique</a>
        <a href="#" class="block w-full py-4">Physique</a>
        <a href="#" class="block w-full py-4">chimie</a>
        <a href="#" class="block w-full py-4">Histoire</a>
        <a href="#" class="block w-full py-4">Géographie</a>
        <a href="#" class="block w-full py-4">Philosophie</a>
        <a href="#" class="block w-full py-4">Poési</a>
        <a href="#" class="block w-full py-4">Français</a>
        {{--<div class="bar"></div>--}}
    </nav>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>

    $(".slider").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1
    });
</script>

<style>
    .slick-prev {
        display: inline-block;
        height: 100%;
        background-color: #8B8B8B;
        left: 0;
    }

    .slick-next {
        display: inline-block;
        height: 100%;
        background-color: #8B8B8B;
        right: 0;
    }

    .slick-list {
        margin: 0 20px;
        /*background-color: aquamarine;*/
    }

    .slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus {
        background-color: #8B8B8B;
    }
</style>
