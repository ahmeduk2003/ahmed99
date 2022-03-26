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
<style>
         table, th, td {
            border: 1px solid black;
         }
      </style>
   </head>

   <body>
      <h1>Name of books</h1>
      <table>
         <tr>
            <th>iD</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone </th>
            <th> Action </th>
        </tr>
        @foreach($post as $post)
        <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->Name}}</td>  
        <td>{{$post->Email}}</td>  
        <td>{{$post->Phone }}</td> 
        <td>
            <a href ="{{url('delete?id=').$post->id}}"> Delete </a>
            <a href ="{{url('edit?id=')  .$post->id}}">   edit </a>
        </td>
        
        @endforeach
        </table>
  
       
  
   </body>
</html>