<html>
 <head>  
  <title> the liabary </title> 
  <meta charset="utf.8"/>
  <meta name="descrption" contand=" the livarrt"> 
 </head>  
 <body>      
<h2> libarry of book </h2>
<h1> hassen </h1>
<style>
         table, th, td {
            border: 1px solid black;
         }
      </style>
   </head>

   <body>
      <h1>students</h1>
      <table>
         <tr>
            <td>id</m></td>
            <td>Name</td>
            <td>Subject </td>
            <td>Teacher </td>
            <td>Operation</td>
  </tr>
       @foreach($post as $posts)
     <tr>
   <td>{{$posts['id']}}</td> 
   <td>{{$posts['Name']}}</td> 
   <td>{{$posts['Subject']}}</td>
   <td>{{$posts['Teacher']}}</td>
   <td>  <a href ="{{url('Delete?id=').$posts->id}}">Delete</a></td>
   </tr>
     
      @endforeach 
      </table>
   </body>
</html>