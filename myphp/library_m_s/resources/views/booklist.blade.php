<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Forms</title>
</head>

<body>

    <div class="container">
    <!--
 <form>
  <div class="form-group">
    <label for="name">Book Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter book name">
  </div>
  <div class="form-group">
    <label for="bookCategory">Category</label>
    <input type="text" class="form-control" id="bookCategory" placeholder="Enter the Category">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" placeholder="Enter author name">
  </div>
  </br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
-->
 @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include("booklists");
                       
                    </section>
                </div>
            </div>
        </div>
<!--Create-->
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-5">
                <div class="card mb-3" style="width:34rem;">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new Book</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            
                            <div class="form-group">
                                <label>Book Name</label>
                                <input name="bookName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>                           
                            <div class="form-group">
                                <label>Book Category</label>
                                <input name="bookCategory" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            
                            <div class="form-group">
                                <label>Author</label>
                                <input name="author" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                           
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

 

                        </form>
                    </div>
                </div>

 

            </section>
        </div>
    </div>


<!--   edit   -->
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
          
            <section class="col-md-5">
                <div class="card mb-3" style="width:34rem;">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of booklist</h5>
                        <form action="{{ url('/update/'.$booklist['id']) }}" method="post">
                            @csrf
                           
                            <div class="form-group">
                                <label>Book Name</label>
                                <input value="{{ $booklist['bookName'] }}" name="bookName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>Book Category</label>
                                <input value="{{ $booklist['bookCategory'] }}" name="bookCategory" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input value="{{ $booklist['author'] }}" name="author" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                             <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
        @endif
    </div>
</body>
<style>
body {
    background-image: url('https://source.unsplash.com/collection/190727/1600x900');
}

.container {
    margin-top: 25px;
    width: 40%;
}
</style>

</html>