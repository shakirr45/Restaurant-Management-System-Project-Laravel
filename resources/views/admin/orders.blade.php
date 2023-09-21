
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   

  @include("admin.navbar")

  <div class="container">
  <h1>Customers Orders</h1>

  <!-- //for search data===============>> -->
  <form action="{{url('search')}}" method="GET" >
    @csrf
    <input type="text" name="search" style="color:blue;">
    <input type="submit" value="search" class="btn btn-success">
  </form>

  <table>
    <tr  align="center" >
        <td style="Padding: 20px">Name</td>
        <td style="Padding: 20px">Phone Number</td>
        <td style="Padding: 20px">Address</td>
        <td style="Padding: 20px">Food Name</td>
        <td style="Padding: 20px">Price</td>
        <td style="Padding: 20px">Quantity</td>
        <td style="Padding: 20px">Total Price</td>
    </tr>

    @foreach($data as $data)
    <tr align="center" style="background-color:black;">
        <td>{{$data->name}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->food_name}}</td>
        <td>{{$data->food_price}}$</td>
        <td>{{$data->food_quantity}}</td>
        <td>{{$data->food_price * $data->food_quantity}}$</td>

    </tr>

    @endforeach


  </table>
  </div>

         @include("admin.adminscript")
  </body>
</html>