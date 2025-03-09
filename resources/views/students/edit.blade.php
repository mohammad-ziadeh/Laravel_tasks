<form action="{{route('students.update', $students->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$students->name}}"> 
    <input type="text" name="email" placeholder="Email" value="{{$students->email}}"> 
    <input type="text" name="phone" placeholder="Phone" value="{{$students->phone}}"> 
    <button type="submit" value="Submit">edit</button>

</form>