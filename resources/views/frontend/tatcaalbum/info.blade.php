<section class="c-sention c-section--top" data-j-class="MoreContents">
    <h1 class="c-section__heading">Album</h1>

    <div class="p-search-plan p-search-plan--horizontal" data-j-class="SearchPlanHorizontal" data-is-clone="0">
        <div class="p-search-plan__item p-search-by-key p-search-by-key--horizontal">
            <h3 class="p-search-by-key__title">Khu Vực</h3>
            <ul class="p-search-by-key__items">
                @foreach($diadiems as $key=>$diadiem)
                <li class="p-search-by-key__item "><a href="{{URL::to('/album/dia-diem/'.$diadiem->path)}}">{{$diadiem->name}}</a></li>
                @endforeach
            </ul>
        </div>
        {{--<div class="p-search-plan__item p-search-by-key p-search-by-key--horizontal">--}}
        {{--<h3 class="p-search-by-key__title">Keyword</h3>--}}
        {{--<ul class="p-search-by-key__items">--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/spring/">Spring</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/summer/">Summer</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/autumn/">Autumn</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/winter/">Winter</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/sakura/">Sakura</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/autumn-leaves/">Autumn--}}
        {{--Leaves</a></li>--}}
        {{--<li class="p-search-by-key__item "><a--}}
        {{--href="http://d-weddingphoto.com/plans/keyword/greenery/">Greenery</a></li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/flower/">Flower</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/beach/">Beach</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/templeshrine/">Temple/Shrine</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/japanese-castle/">Japanese--}}
        {{--Castle</a></li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/japanese-garden/">Japanese--}}
        {{--Garden</a></li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/city/">City</a></li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/kimono/">Kimono</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/dresstuxedo/">Dress/Tuxedo</a>--}}
        {{--</li>--}}
        {{--<li class="p-search-by-key__item "><a href="http://d-weddingphoto.com/plans/keyword/night-view/">Night--}}
        {{--View</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
    </div>

    <div class="p-plans-wrap" data-j-selector="contents" data-j-next-url="/plans/?page=2">
        <div class="p-plans p-plans--top c-columns " data-j-selector="content">
            @foreach($albums as $key=>$album)
                <div class="c-column--three">
                    <a class="p-plan " href="{{URL::to('/album/'.$album->path)}}">
                        <div class="p-plan__photo">
                            <div class="p-plan__photo__content">
                                {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/650-410_mini-2.jpg"--}}
                                {{--width="650" height="410" alt="650-410_mini" class="">--}}
                                {{ Html::image('images/album/anhdaidien/'.$album->anhmini, '',array('width' => 650,'height' => 410)) }}
                            </div>
                        </div>
                        <div class="p-plan__box">
                            <div class="p-plan__box__inner">
                                <h4 class="p-plan__box__title title-h3">{{$album->name}}</h4>
                                <p class="p-plan__box__description"></p>
                                <div class="p-plan__box__btn"><p class="c-btn">Xem chi tiết</p></div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            {{--<div class="p-plans__item c-column--three">--}}
                {{--<a class="p-plan " href="http://d-weddingphoto.com/plans/kobe-04-flower-x-flower-x-flower/">--}}
                    {{--<div class="p-plan__photo">--}}
                        {{--<div class="p-plan__photo__content">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/img04-46.jpg" width="650"--}}
                                 {{--height="410"--}}
                                 {{--alt="DE &amp; Co. Decollte Wedding Photography in Japan. A Japanese Wedding Photo Studio. | 德可莉日本專業婚紗攝影 | Kobe | 神戶 | Flower × Flower × Flower! | 花花世界"--}}
                                 {{--class=""></div>--}}
                    {{--</div>--}}
                    {{--<div class="p-plan__box">--}}
                        {{--<div class="p-plan__box__inner">--}}
                            {{--<h4 class="p-plan__box__title">Flower × Flower × Flower!</h4>--}}
                            {{--<p class="p-plan__box__description">Have you ever dreamed of being surrounded by a full of--}}
                                {{--flowers in a field? This ...</p>--}}
                            {{--<div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a></div>--}}
            {{--<div class="p-plans__item c-column--three">--}}
                {{--<a class="p-plan " href="http://d-weddingphoto.com/plans/kyoto-08/">--}}
                    {{--<div class="p-plan__photo">--}}
                        {{--<div class="p-plan__photo__content">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/07/fc6927a4cd7fc6f068de9eb5d3ae4aff-5.jpg"--}}
                                 {{--width="650" height="410" alt="サムネイル" class=""></div>--}}
                    {{--</div>--}}
                    {{--<div class="p-plan__box">--}}
                        {{--<div class="p-plan__box__inner">--}}
                            {{--<h4 class="p-plan__box__title">From Long Time Ago</h4>--}}
                            {{--<p class="p-plan__box__description">Zuishin-in temple that has over a thousand years of--}}
                                {{--history is related with one ...</p>--}}
                            {{--<div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a></div>--}}
        </div>
    </div>

    {{--<p class="c-btn-more-wrap">--}}
        {{--<a class="c-btn c-btn--more" data-j-selector="more">--}}
            {{--<div class="spinner" role="progressbar"--}}
                 {{--style="position: absolute; width: 0px; z-index: 2000000000; left: 50%; top: 50%;">--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-0-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(0deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-1-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(36deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-2-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(72deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-3-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(108deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-4-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(144deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-5-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(180deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-6-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(216deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-7-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(252deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-8-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(288deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
                {{--<div style="position: absolute; top: -1px; opacity: 0.25; animation: opacity-60-25-9-10 1s linear infinite;">--}}
                    {{--<div style="position: absolute; width: 7px; height: 3px; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(324deg) translate(8px, 0px); border-radius: 1px;"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<span class="c-btn--more__text">MORE PLANS</span>--}}
        {{--</a>--}}
    {{--</p>--}}
</section>