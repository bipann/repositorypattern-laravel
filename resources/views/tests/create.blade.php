<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Create</title>
    </head>
    <body>
    <form method="post" action="{{route('test.store')}}" class="py-5 ">
    @csrf
    <div class="py-2"><input type="text" name="name" class="py-2 px-2 border rounded" placeholder="Name"/></div>
    <div class="py-2"><input type="text" name="number" class="py-2 px-2 border rounded" placeholder="Number"/></div>
    <div class="py-2"><input type="text" name="email" class="py-2 px-2 border rounded" placeholder="Email"/></div>        
    <div class="py-2"><input type="submit" value="Create" class="p-2 border rounder"/></div>       
</form>
    </body>
    

</html>


    

