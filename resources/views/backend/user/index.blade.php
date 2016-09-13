@foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->name}}</td>
        <td>
            @if(Auth::user()->id == $item->id)
                <a href="{{route('backend.user.edit',['id'=>$item->id])}}" class="btn btn-primary btn-flat">编辑</a>
    @endif
@endforeach