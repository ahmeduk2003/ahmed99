<h1> Update  </h1>
<form action="{{url('update')}}" method="post"> 
    @csrf 
    <input type="hidden" name="id" value="{{$post->id}}">
<input type="text" name="Name"  value= "{{  $post->Name }}"   placeholder="Name">  <br>  <br>
<input type="text" name="Email" value= "{{  $post->Email }}"   placeholder="Email">  <br>  <br>
<input type="text" name="Phone" value= "{{  $post->Phone }}"   placeholder="phone">  <br>  <br>
<button type="submit" class="btn btn-primary">Update </button>
</form>
