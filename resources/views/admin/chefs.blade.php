
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   

  @include("admin.navbar")

  <div>
    <form action="{{url('add_chefs')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Name</label>
            <input style="color:blue;" type="text" name="name">
        </div>

        <div>
            <label for="">Speciality</label>
            <input style="color:blue;" type="text" name="speciality">
        </div>

        <div>
            <label for="">Image</label>
            <input type="file" name="image">
        </div>

        <div>
            <input  style="color:blue;" type="submit" value="save">
        </div>
    </form>
    <h1>View Chef</h1>

<table bgcolor='sky'>
    <tr>
        <th style="padding: 30px;">name</th>
        <th style="padding: 30px;">speciality</th>
        <th style="padding: 30px;">image</th>
        <th style="padding: 30px;">Action</th>
    </tr>

@foreach($data3 as $data3)
    <tr>
        <td  style="padding: 10px;">{{$data3->name}}</td>
        <td  style="padding: 10px;">{{$data3->speciality}}</td>
        <td  style="padding: 10px;"><img  height="200" width="200"  src="/chefimage/{{$data3->image}}" alt=""></td>
        <td  style="padding: 10px;"><a href="{{url('update_chefs',$data3->id)}}">Update</a>
        <a href="{{url('delete_chefs',$data3->id)}}">Delete</a>
    
    </td>

    </tr>

    @endforeach
    
</table>

  </div>




 


         @include("admin.adminscript")
  </body>
</html>