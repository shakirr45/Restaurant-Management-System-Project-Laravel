
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
  @include("admin.navbar")

  <!-- view users -->
  <div style="position: relative; top: 60px; right: -60px" >

  <table bgcolor="gray" border="3px">
    <tr>
      <th style="padding: 30px;">Name</th>
      <th style="padding: 30px;">Email</th>
      <th style="padding: 30px;">Action</th>
    </tr>

@foreach($data as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>

      @if($data->usertype == "0")
      <td><a href="{{url('delete_user',$data->id)}}">Delete</a></td>
      @else
      <td><a href="">Not Allowed</a></td>
      @endif



    </tr>
    @endforeach
  </table>
  </div>


         @include("admin.adminscript")
  </body>
</html>