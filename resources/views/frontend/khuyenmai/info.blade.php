<div class="pagewrap inside">
    <div class="titBox fixCen"><h1 class="tit">Khuyến Mãi</h1></div>
    <div class="overHide">
        <div class="list">
            <ul>
                @foreach($tintucs as $key=>$tintuc)
                    <li class="oneNews show">
                        <a href="{{URL::to('khuyen-mai/'.$tintuc->path)}}" class="thumb"
                           title="{{$tintuc->name}}"
                           style="background-image: url({{ URL::asset('images/tintuc/'.$tintuc->anhmini) }});    background-size: contain;background-size: 100% 100%;">

                            {{ Html::image('images/tintuc/'.$tintuc->anhmini, $tintuc->name) }}
                        </a>
                        <h3><a href="{{URL::to('tin-tuc/'.$tintuc->path)}}"
                               title="{{$tintuc->name}}">{{$tintuc->name}}</a></h3>
                        <p>
                            {{$tintuc->motangan}}

                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>