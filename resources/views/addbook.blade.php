<h1>Save data base </h1>
<form action="{{url('Addbook')}}" method="post"> 
    @csrf 
<input type="text" name="NameOfBook" placeholder="enter the name of book">  <br>  <br>
<input type="text" name="Athuer" placeholder="enter the Athuer">  <br>  <br>
<input type="text" name="Des" placeholder="enter the Des">  <br>  <br>
<input type="submit">
</form>
<style>

<table>
         <tr>
            <th><mark>NameOfBook</m></th>
            <th>Athuer</th>
            <th>Des </th>
            <a herf="/edit-post/{{$post->id}}">Edit</a>
            <a herf="/delete-post/{{$post->id}}">delete</a>
            
         </tr>
  
 @foreach($books as $post)
<tr><td>{{$post->NameOfBook}}</td> 
 <td>{{$post->Athuer}}</td> 
 <td>{{$post->Des}}</td> 
<tr>
@endforeach 
</table>
        


