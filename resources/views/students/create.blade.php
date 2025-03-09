<form action="{{route('students.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" href="{{route('students.edit', $students->id)}}">
    <input type="text" name="email" placeholder="Email" href="{{route('students.edit', $students->id)}}">
    <input type="text" name="phone" placeholder="Phone" href="{{route('students.edit', $students->id)}}">
    <input type="submit" value="Submit">

</form>