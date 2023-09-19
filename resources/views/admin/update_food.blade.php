
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

  <div style="position: relative; top: 10px; right: -150px;">
    <form action="{{url('/edit_food',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="padding: 20px;">
            <label for="">Title</label>
            <input style="color:blue;" type="text" name="title" id="" value="{{$data->title}}" required>
        </div>

        <div style="padding: 20px;">
            <label for="">Price</label>
            <input style="color:blue;" type="num" name="price" id=""  value="{{$data->price}}" required>
        </div>

        <div>
            <label for="">Old image</label>
            <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">
        </div>

        <div style="padding: 20px;">
            <label for="">New Images</label>
            <input type="file" name="image" id="" required>
        </div>

        <div style="padding: 20px;">
            <label for="">Description</label>
            <input style="color:blue;" type="text" name="description" id=""  value="{{$data->description}}" required >

        </div>

        <div style="padding: 20px;">
            <input type="submit" value="Update">
        </div>
    </form>

         @include("admin.adminscript")
  </body>
</html>



