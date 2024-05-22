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
            <td>{{$cat->categoryName}}</td>
            <td>
                <a href="{{route('category.edit',$cat->id)}}">
                    <button type="button">Edit</button>
                </a>
            </td>
            <td>
                <form method="post" action="{{route('category.destroy',$cat->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>