<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600;700&display=swap" rel="stylesheet">
<style>
body {
	font-family: "Didact Gothic";

min-height: 90vh;
  background-image: url("https://images.unsplash.com/photo-1514593214839-ce1849100055?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
h2 {
	font-size: 26px;
    text-align: center;
    color: white;
    margin-bottom: 30px;
}
p {
	margin: 0;
	padding: 0;
    font-size: 20px;
}
.card{
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}
.delUpdBtns{
text-align: center
}
.delBtn{
background-color: #630000;
color: white;
}
.updBtn{
  background-color: #924d4d;
color: white;
}
.AddBookLink{
  margin: 20px auto;
  width: 100px;
 
}
.AddBookLinkBtn{
width: 100px;
height: 100px;
box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50px;
background-color: #630000;
cursor: pointer;
}
 .AddBookLink a{
  text-decoration: none;
color: white;
}
.AddBookLinkBtn:hover{
  background-color: #924d4d;
}
.card-body .descripSec{
  overflow: auto;
  height: 60px;
}
.card-body p{
  margin: 10px
}
.back{
  color: black;
}
.backLink{
    
    text-align: center;
  margin: 20px;
}
</style>
</head>
<body>

    <header>
       
      </header>

    <div class="backLink"> <a href="/index" class="back"> <= BACK TO THE BOOKS</a></div> 
<div class=" d-flex flex-wrap w-75">
@foreach ($books as $book)
<div id="cardsDiv" class="card m-4" style="width: 19rem;">
   <img src="images/{{$book['book_image']}}" class="card-img" alt="..." >
    <div class="card-body">
      <h4 class="card-title">{{$book['book_title']}}</h4>
     <p class="card-text">{{$book['book_auther']}}</p>
      <p class="card-text descripSec">{{$book['book_description']}}</p>
      <div class="delUpdBtns">
      <a href="delete/{{$book['id']}}"  class="btn m-3 delBtn">Delete</a>
      <a href="update/{{$book['id']}}" class="btn m-3 updBtn">Update</a></div>
    </div>
  </div>

  @endforeach
</div>
 
</body>
</html>