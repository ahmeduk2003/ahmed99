<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Save data base </h1>



@if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

<form action="{{url('add-student')}}" method="post"> 
    @csrf 
<input type="text" name="username" placeholder="username" >  <br>  <br>
<input type="text"  name="Email" placeholder="enter the Email">  <br>  <br>
<input type="text" name="Phone" placeholder="Phone">  <br>  <br>
<input type="submit">
</form>

<table>
         <tr>
            <th>iD</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone </th>
            <th> Action </th>
        </tr>
        @foreach($posts as $post)
        <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->Name}}</td>  
        <td>{{$post->Email}}</td>  
        <td>{{$post->Phone }}</td> 
        <td>
            <a href ="{{url('delete?id=').$post->id}}"> Delete </a>
            <a href="{{ url('edit?id=').$post->id }}" class="btn btn-primary btn-sm">Edit</a>
        </td>
        
        @endforeach
        </table>

         