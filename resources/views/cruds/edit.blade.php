<h1>edit place</h1>
<form action="{{route('cruds.update', $cruds->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$cruds->name}}">
    <input type="text" name="role" placeholder="role" value="{{$cruds->role}}">
    <input type="text" name="DB" placeholder="DB" value="{{$cruds->DB}}">
    <input type="submit" value="Update">
</form>