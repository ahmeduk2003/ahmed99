<html>
 <head>  
  <title> the liabary </title> 
  <meta charset="utf.8"/>
  <meta name="descrption" contand=" the livarrt"> 
 </head>  
  <body> 
       
     <h2> libarry of book </h2>
     <p><h3>  حسن </h3> </p>
     <p><del>100$ </del> 84$</p>
<    p><mark> welcom</mark> me </p>
     <style>
         table, th, td {
            border: 1px solid black;
         }
      </style>
   </head>
  <a herf="/addbook" class="btn btn-succes"></a>
   <body>
      <h1>Name of books</h1>
      <table>
         <tr>
            <th><mark>NameOfBook</m></th>
            <th>Athuer</th>
            <th>Des </th>
         </tr>
  
 @foreach($post as $post)
<tr><td>{{$post->NameOfBook}}</td> 
 <td>{{$post->Athuer}}</td> 
 <td>{{$post->Des}}</td> 
<tr>
@endforeach 
</table>
  
       
  
   </body>
</html>