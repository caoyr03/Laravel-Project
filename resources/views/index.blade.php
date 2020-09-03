<!DOCTYPE html>
<html lang="en"><head>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<title>List of all sermons</title>  
</head>
<body>  
<div class="container">     
<div class="row">
<div class="col-sm-12">    
<h1 class="display-3">Sermons</h1>      
<table class="table table-striped">    
<thead>       
 <tr>          
  <td>ID</td>         
  <td>Title</td>          
  <td>Description</td>               
</tr>    
</thead>   
<tbody>        
  @foreach($sermons as $sermon)        
  <tr>            
  <td>{{$contact->id}}</td>                      
  <td>{{$contact->title}}</td>            
  <td>{{$contact->description}}</td>                 
  </tr>        
  @endforeach    
</tbody>  
  </table>
  <div>
  </div>
  </div>  
  </script>
  </body>
  </html>