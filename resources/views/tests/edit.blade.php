<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Edit</title>
    </head>
    <body>
    <form method="post" action="{{route('test.store')}}" class="py-5 ">
    @csrf
    
    <div class="py-2"><input type="text" name="name" class="py-2 px-2 border rounded" value="{{$Test->name}}"/></div>
    <div class="py-2"><input type="text" name="number" class="py-2 px-2 border rounded" value="{{$Test->number}}"/></div>
    <div class="py-2"><input type="text" name="email" class="py-2 px-2 border rounded" value="{{$Test->email}}"/></div>        
    <div class="py-2"><input type="submit" value="Update" class="p-2 border rounder"/></div>       
    
</form>
    </body>
    

</html>


    

