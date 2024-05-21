<form action="{{route('category.store')}}" method="post">
    @csrf
    Category Name <input type="text" name="categoryName"><br>

    <button type="submit">Submit</button>
</form>


<table width="100%" border="1px">
    <tr>
        <th>#</th>
        <th>Category NAme</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($category as $cat)
        <tr>
            <th>{{$loop->iteration}}</th>
            <th>{{$cat->categoryName}}</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    @endforeach
</table>