<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    @method('patch')
    Category Name <input type="text" name="categoryName" value="{{$category->categoryName}}"><br>

    <button type="submit">Submit</button>
</form>