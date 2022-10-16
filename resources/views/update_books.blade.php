<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600;700&display=swap" rel="stylesheet">

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<style>
  body {
  min-height: 70vh;
  font-size: 20px;
	font-family: "Didact Gothic";
}
form{
  margin-top:120px; 
}
form .btn{
  background-color:  #630000;
  color: white;
  width: 100px;
  border: none;
  margin: 10px;
}
.back{
  color: black;
  text-decoration:none;

}
.back:hover{
  text-decoration:none;
  color:  #630000;
}
</style>
<body>

    <div class="container w-25">
    <form action="/put/{{$id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Book title</label>
          <input name="book_title" type="text" class="form-control" value="{{$request['book_title']}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Book Description</label>
          <input name="book_description" value="{{$request['book_description']}}" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book author</label>
            <input name="book_auther" value="{{$request['book_auther']}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book image </label>
            <input name="book_image" value="{{$request['book_image']}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      <a href="/index" class="back"><ion-icon name="caret-back-circle-outline"></ion-icon> BACK</a>
    </div>
</body>
</html>