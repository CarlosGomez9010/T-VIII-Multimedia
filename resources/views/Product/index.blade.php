<html>
    <header></header>
    <body>
        <h1>Listado de Productos</h1>
        <a href="{{ route('product.create') }}">Nuevo Producto</a>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Categoria</th>
                    <th>Ver</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->imagen }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->category->nombre }}</td>
                        <td>
                            <a href="{{ route('product.show', $product->id) }}">VER</a>
                        </td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}">EDITAR</a>
                        </td>
                        <td>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
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