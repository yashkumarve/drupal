<div class="card" style="width: 35rem;  align:center;">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body" >
        <h5 class="card-title">List of book</h5>
        <p class="card-text">You can find here all the informatins about books in the system</p>
        <a href ="{{ url('/create') }}" class ="btn btn-md btn-info">Add New Book</a>
        <br>

        <table class="table">
            <thead class="thead-light">
            <tr>
            
                <th scope="col">Book name</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($booklist as $book)
                <tr>
                
                    <td>{{ $book['bookName'] }}</td>
                    <td>{{ $book['bookCategory'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>
                      <a href="{{ url('/edit/'.$book['id']) }}" class="btn btn-sm btn-warning">Edit</a>
                      <a href="{{ url('/delete/'.$book['id']) }}" class="btn btn-sm btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>