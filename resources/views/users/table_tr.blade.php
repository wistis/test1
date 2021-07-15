<tr>
    <td>{{$child->id}}</td>
    <td>{{$child->email}}</td>
    <td>{{$child->name}}</td>

</tr>
@foreach($child->childrens as $child)
    @include('users.table_tr',['child'=>$child])
@endforeach