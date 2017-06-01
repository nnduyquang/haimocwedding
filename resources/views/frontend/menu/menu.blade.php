<p class="p-header__logo">
    <a href="{{URL::to('/')}}">
        {{--<img src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/common-img-logo.png"--}}
                {{--alt="DE&amp;Co decollte wedding photography in JAPAN">--}}
        {{ Html::image('images/logo/logo_office_2.png','',array(''))}}
    </a></p>
<h1 class="p-header__lead">Hải Mộc Wedding<br>Hãy Ghi Lại Khoảnh Khắc Của Bạn</h1>
<ul class="p-header__social-nav">
    <li class="p-header__main-nav__item p-header__main-nav__item--about ">
        <a href="{{URL::to('gioi-thieu')}}">GIỚI THIỆU</a>
        {{--<p class="p-header__main-nav__office p-header__main-nav__office--en_US">--}}
        {{--<a href="http://d-weddingphoto.com/about/#hongkong-office">Hong Kong Office</a>--}}
        {{--</p>--}}
    </li>
    <li class="p-header__main-nav__item "><a href="{{URL::to('album')}}">ALBUM</a></li>
    <li class="p-header__main-nav__item "><a href="#">ÁO CƯỚI</a></li>
    {{--<li class="p-header__social-nav__item"><a href="https://www.facebook.com/decolltewp" target="_blank"><img--}}
                    {{--src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/common-icn-facebook.jpg"--}}
                    {{--alt=""></a></li>--}}
    {{--<li class="p-header__social-nav__item"><a href="https://www.youtube.com/channel/UCuVG5VMiUhOvwPBvdaZbDxQ"--}}
                                              {{--target="_blank"><img--}}
                    {{--src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/common-icn-youtube.jpg"--}}
                    {{--alt=""></a></li>--}}
    {{--<li class="p-header__social-nav__item"><a href="https://www.instagram.com/d_weddingphoto_jp/" target="_blank"><img--}}
                    {{--src="http://d-weddingphoto.com/cms/wp-content/themes/decollte/assets/images/common-icn-instagram.jpg"--}}
                    {{--alt=""></a></li>--}}
</ul>
{{--<ul class="p-header__sub-nav">--}}
    {{--<li class="p-header__sub-nav__item">&gt; <a href="http://d-weddingphoto.com/flow/">Flow</a></li>--}}
    {{--<li class="p-header__sub-nav__item">&gt; <a href="http://d-weddingphoto.com/faq/">FAQ</a></li>--}}
    {{--<li class="p-header__sub-nav__item">&gt; <a href="http://d-weddingphoto.com/studios/">Studios</a></li>--}}
{{--</ul>--}}
{{--<div class="p-header__language-nav">--}}
    {{--<p><a class="p-header__language-nav__item p-header__language-nav__item--is-active">ENGLISH</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a--}}
                {{--class="p-header__language-nav__item " href="http://hn.d-weddingphoto.com/">繁體中文</a></p>--}}
{{--</div>--}}
<nav class="p-header__main-nav">
    <ul>
        {{--<li class="p-header__main-nav__item p-header__main-nav__item--about ">--}}
            {{--<a href="{{URL::to('lien-he')}}">GIỚI THIỆU</a>--}}
            {{--<p class="p-header__main-nav__office p-header__main-nav__office--en_US">--}}
                {{--<a href="http://d-weddingphoto.com/about/#hongkong-office">Hong Kong Office</a>--}}
            {{--</p>--}}
        {{--</li>--}}
        {{--<li class="p-header__main-nav__item "><a href="{{URL::to('album')}}">ALBUM</a></li>--}}
        {{--<li class="p-header__main-nav__item "><a href="{{URL::to('phu-kien')}}">ÁO CƯỚI</a></li>--}}
        <li class="p-header__main-nav__item "><a href="{{URL::to('bao-gia')}}">BÁO GIÁ</a></li>
        <li class="p-header__main-nav__item "><a href="{{URL::to('khuyen-mai')}}">KHUYẾN MÃI</a></li>
        <li class="p-header__main-nav__item "><a href="{{URL::to('tin-tuc')}}">TIN TỨC</a></li>

    </ul>
</nav>
<div class="p-header__contact p-header__contact--small"><a
            href="#" target="_blank">
        {{ Html::image('images/temps/common-img-contact--min--en_US.jpg','',array(''))}}
    </a></div>
<div class="p-header__contact p-header__contact--large"><a
            href="#" target="_blank">
        {{ Html::image('images/temps/common-img-contact--en_US.jpg','',array(''))}}
    </a></div>