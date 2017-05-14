<section class="p-main-visual" data-j-class="MainVisualMovie">
<div class="p-main-visual__slider">

    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($slides as $key=>$slide)
            <div class="swiper-slide">
                <a href="#" class="p-main-visual__slide">
                    <div class="p-main-visual__slide__img"
                         style="background-image: url({{ URL::asset('images/slider/'.$slide->anhslider) }})">
                        {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/b17e46ffa7379bab6fede8a241a3b34f.jpg"--}}
                             {{--alt="">--}}
                        {{ Html::image('images/slider/'.$slide->anhslider,'',array('class'=>'')) }}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="p-main-visual__paginate">
        <a class="p-main-visual__paginate__btn is-current" data-j-element="pager"></a>
        <a class="p-main-visual__paginate__btn " data-j-element="pager"></a>
        <a class="p-main-visual__paginate__btn " data-j-element="pager"></a>
        <a class="p-main-visual__paginate__btn " data-j-element="pager"></a>
        <a class="p-main-visual__paginate__btn " data-j-element="pager"></a>
    </div>

</div>
</section>