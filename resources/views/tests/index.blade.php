<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Index</title>
    </head>
    <body>    
    <table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Number</th>
    <th>Email</th>
  </tr>
  @foreach($Tests as $test)
  <tr>  
    <td>{{$test->name}}</td>
    <td>{{$test->number}}</td>
    <td>{{$test->email}}</td>
    <td><a href="{{'/test/'.$test->id.'/edit'}}"/>Edit</a></td>    
  </tr>
  @endforeach
  
</table>

    
    
   
    
    </body>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
    

</html>


    

