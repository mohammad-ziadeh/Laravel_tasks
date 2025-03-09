<h1>create place</h1>
<form action="{{route('cruds.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" href="{{route('cruds.edit', $cruds->id)}}">
    <input type="text" name="role" placeholder="Role" href="{{route('cruds.edit', $cruds->id)}}">
    <input type="text" name="DB" placeholder="Date of birth" href="{{route('cruds.edit', $cruds->id)}}">
    <input type="submit" value="Submit">
 
</form>