
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   

  @include("admin.navbar")

  <div style="position: relative; top: 60px; right: -150px;">
    <form action="{{url('/upload_food')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Title</label>
            <input style="color:blue;" type="text" name="title" id="" required>
        </div>

        <div>
            <label for="">Price</label>
            <input style="color:blue;" type="num" name="price" id="" required>
        </div>

        <div>
            <label for="">images</label>
            <input type="file" name="image" id="" required>
        </div>

        <div>
            <label for="">Description</label>
            <input style="color:blue;" type="text" name="description" id="" required >

        </div>

        <div>
            <input type="submit" value="Save">
        </div>
    </form>

  



  <div style="margin-top:50px">
    <h1>Food Item</h1>
  <table border="1" bgcolor="black">


    <tr>
        <th style="padding: 30px;">Food Name</th>
        <th style="padding: 30px;">Price</th>
        <th style="padding: 30px;">Description</th>
        <th style="padding: 30px;">Image</th>
        <th style="padding: 30px;">Action</th>


    </tr>


    @foreach($data as $data)
    <tr>
        <td  style="padding: 10px;">{{$data->title}}</td>
        <td  style="padding: 10px;">{{$data->price}}</td>
        <td  style="padding: 10px;">{{$data->description}}</td>
        <td  style="padding: 10px;">
        <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">
    </td>
        <td  style="padding: 30px;"><a href="{{url('delete_food',$data->id)}}">Delete</a>

        <a href="{{url('update_food',$data->id)}}">Update</a>
    
    </td>



    </tr>

    @endforeach
  </table>
  </div>

  <div><h1>ssdasd</h1></div>

         @include("admin.adminscript")
  </body>
</html>