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
    <table bgcolor="gray" border = "1px">
        <tr>
            	
            <th style="padding: 30px;">Name</th>
            <th style="padding: 30px;">Email</th>
            <th style="padding: 30px;">phone</th>
            <th style="padding: 30px;">guest</th>
            <th style="padding: 30px;">date</th>
            <th style="padding: 30px;">time</th>
            <th style="padding: 30px;">message</th>

        </tr>

        @foreach($data as $data)
        <tr align="center">
            <td style="padding: 10px;">{{$data->name}}</td>
            <td style="padding: 10px;">{{$data->email}}</td>
            <td style="padding: 10px;">{{$data->phone}}</td>
            <td style="padding: 10px;">{{$data->guest}}</td>
            <td style="padding: 10px;">{{$data->date}}</td>
            <td style="padding: 10px;">{{$data->time}}</td>
            <td style="padding: 10px;">{{$data->message}}</td>


        </tr>

        @endforeach
    </table>
  </div>

         @include("admin.adminscript")
  </body>
</html>