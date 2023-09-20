
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
   

  @include("admin.navbar")

  <div>
    <h1>Update Chef</h1>
    
<form action="{{url('main_update_chefs',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Name</label>
            <input style="color:blue;" type="text" name="name" value="{{$data->name}}">
        </div>

        <div>
            <label for="">Speciality</label>
            <input style="color:blue;" type="text" name="speciality"  value="{{$data->speciality}}">
        </div>

        <div>
            <label for="">Old Image</label>
            <img src="chefimage/{{$data->image}}" alt="">
        </div>

        <div>
            <label for="">Image</label>
            <input type="file" name="image">
        </div>

        <div>
            <input  style="color:blue;" type="submit" value="save">
        </div>
    </form>
  </div>

         @include("admin.adminscript")
  </body>
</html>


