<section class="c-sention c-section--top p-area"
         style="background-image: url({{ URL::asset('images/diadiem/'.$diadiem->hinhnendiadiem) }});"
>
    <h1 class="c-section__heading">{{$diadiem->name}}</h1>
    {{--<div class="p-area__description">--}}
        {{--{{$diadiem->mota}} </div>--}}
    <section class="p-area__locations p-locations"
             style="background-image: url({{ URL::asset('images/diadiem/'.$diadiem->hinhnenphobien) }});">
        <div class="p-locations__filter">
            <h2 class="p-locations__title">Địa Điểm Chụp Ảnh</h2>
            <ul class="p-locations__items">
                <li class="p-locations__item p-location">
                    {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/tokyo_asakusaarea.jpg"--}}
                         {{--width="650" height="432" alt="tokyo_asakusaarea" class="p-location__photo">--}}
                    {{ Html::image('images/diadiem/'.$diadiem->hinhdiadiem1,'',array('width'=>'650','height'=>'432','class'=>'p-location__photo'))}}
                    <h3 class="p-location__title">{{$diadiem->tieude1}}</h3>
                    <p class="p-location__description">{{$diadiem->mota1}}</p>
                </li>
                <li class="p-locations__item p-location">
                    {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/tokyo_tokyotower-1.jpg"--}}
                         {{--width="650" height="432" alt="tokyo_tokyotower" class="p-location__photo">--}}
                    {{ Html::image('images/diadiem/'.$diadiem->hinhdiadiem2,'',array('width'=>'650','height'=>'432','class'=>'p-location__photo'))}}
                    <h3 class="p-location__title">{{$diadiem->tieude2}}</h3>
                    <p class="p-location__description">{{$diadiem->mota2}}</p>
                </li>
                <li class="p-locations__item p-location">
                    {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/tokyo_shibuyaarea.jpg"--}}
                         {{--width="650" height="432" alt="tokyo_shibuyaarea" class="p-location__photo">--}}
                    {{ Html::image('images/diadiem/'.$diadiem->hinhdiadiem3,'',array('width'=>'650','height'=>'432','class'=>'p-location__photo'))}}
                    <h3 class="p-location__title">{{$diadiem->tieude3}}</h3>
                    <p class="p-location__description">{{$diadiem->mota3}}</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="p-area__plans p-plans-more">
        <h2 class="p-plans-more__title">Album</h2>

        <div class="p-plans c-columns p-plans-more__items">
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
        </div>
        {{--<div class="p-plans c-columns p-plans-more__items">--}}
            {{--<div class="p-plans__item c-column--three">--}}
                {{--<a class="p-plan " href="http://d-weddingphoto.com/plans/tokyo-03-visiting-old-learn-new/">--}}
                    {{--<div class="p-plan__photo">--}}
                        {{--<div class="p-plan__photo__content">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/03/650410-5.jpg" width="650"--}}
                                 {{--height="410" alt="650*410" class=""></div>--}}
                    {{--</div>--}}
                    {{--<div class="p-plan__box">--}}
                        {{--<div class="p-plan__box__inner">--}}
                            {{--<h4 class="p-plan__box__title">Visiting old, learn new </h4>--}}
                            {{--<p class="p-plan__box__description">Asakusa is one of the most traditional Japanese--}}
                                {{--sightseeing spot where lots of t...</p>--}}
                            {{--<div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a></div>--}}
            {{--<div class="p-plans__item c-column--three">--}}
                {{--<a class="p-plan " href="http://d-weddingphoto.com/plans/tokyo-12-back-in-days/">--}}
                    {{--<div class="p-plan__photo">--}}
                        {{--<div class="p-plan__photo__content">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/08/fc6927a4cd7fc6f068de9eb5d3ae4aff-1.jpg"--}}
                                 {{--width="650" height="410" alt="サムネイル" class=""></div>--}}
                    {{--</div>--}}
                    {{--<div class="p-plan__box">--}}
                        {{--<div class="p-plan__box__inner">--}}
                            {{--<h4 class="p-plan__box__title">Back in Days</h4>--}}
                            {{--<p class="p-plan__box__description">Keep your marriage anniversary and travel memories in--}}
                                {{--Japan in unique way which ...</p>--}}
                            {{--<div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a></div>--}}
            {{--<div class="p-plans__item c-column--three">--}}
                {{--<a class="p-plan " href="http://d-weddingphoto.com/plans/tokyo-8/">--}}
                    {{--<div class="p-plan__photo">--}}
                        {{--<div class="p-plan__photo__content">--}}
                            {{--<img src="http://d-weddingphoto.com/cms/wp-content/uploads/2016/07/38e03ae397b37138394908d13870e21e-1.jpg"--}}
                                 {{--width="650" height="410" alt="サムネイル-1" class=""></div>--}}
                    {{--</div>--}}
                    {{--<div class="p-plan__box">--}}
                        {{--<div class="p-plan__box__inner">--}}
                            {{--<h4 class="p-plan__box__title">Fall in Love with You Again</h4>--}}
                            {{--<p class="p-plan__box__description">Even if you already have been had many opportunities to--}}
                                {{--spend time with your bel...</p>--}}
                            {{--<div class="p-plan__box__btn"><p class="c-btn">VIEW DETAILS</p></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a></div>--}}
        {{--</div>--}}

        {{--<div class="c-btn-more-wrap">--}}
            {{--<a class="c-btn c-btn--more" href="http://d-weddingphoto.com/plans/?area=tokyo">MORE PLANS </a></div>--}}
    </section>

</section>