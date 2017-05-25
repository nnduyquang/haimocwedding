<div class="pagewrap inside">
    <div class="titBox fixCen"><h1 class="tit">Tin Tức</h1></div>
    <div class="overHide">
        <div class="list">
            <ul>
                @foreach($tintucs as $key=>$tintuc)
                    <li class="oneNews show">
                        <a href="{{URL::to('tin-tuc/'.$tintuc->path)}}" class="thumb"
                           title="{{$tintuc->name}}"
                           style="background-image: url('http://amiwedding.vn/multidata/a-698.jpg');">

                            {{ Html::image('images/tintuc/'.$tintuc->anhdaidien, $tintuc->name) }}
                        </a>
                        <h3><a href="{{URL::to('tin-tuc/test')}}"
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