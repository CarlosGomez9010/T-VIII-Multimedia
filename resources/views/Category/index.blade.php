<html>
    <header></header>
    <body>
        <h1>Listado de categorias</h1>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Ver</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>{{ $category->nombre }}</td>
                        <td>{{ $category->imagen }}</td>
                        <td>
                            <a href="/category/{{ $category->id }}">VER</a>
                        </td>
                        <td>
                            <a href="/category/{{ $category->id }}">EDITAR</a>
                        </td>
                        <td>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" >
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>