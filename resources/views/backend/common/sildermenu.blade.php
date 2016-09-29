@inject('mainPresenter','App\Presenters\Backend\MainPresenter')
{{--{!! $mainPresenter->renderSidebar($menus) !!}--}}


{{--    @foreach(  as $item)
        <li><a href="javascript:;" data-toggle="slidebar"><i class="{{ $item->icon }}"></i>{{ $item->description }}</a>
            <div class="items hide" data-noinit="true">


                @foreach($item->child as $ite)
                    <ul id="bjui-doc-tree-base" class="ztree ztree_main" data-toggle="ztree"
                        data-on-click="MainMenuClick" data-expand-all="{{ $ite->data_fresh }}" data-faicon="{{ $ite->icon }}"
                        data-tit="{{ $ite->description }}">
                        @foreach($ite->child as  $it)
                            <li data-id="{{$it->data_id}}" data-pid="{{$it->data_pid}}" data-faicon="{{$it->icon}}" data-url="{{url($it->route)}}" data-fresh="{{$it->data_fresh}}" data-tabid="{{ $it->tab_id }}"data-faicon-close="{{$it->icon_close}}">
                                菜单管理
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </li>
    @endforeach--}}
