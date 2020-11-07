<html>
    <header>

    </header>
    <body>
        <h1>El producto es: {{ $product->nombre }}</h1>
        <br/>
        <br/>
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre Campo</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <td>Creado</td>
                    <td>{{ $product->created_at }}</td>
                </tr>
                <tr>
                    <td>Actualizado</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>{{ $product->nombre }}</td>
                </tr>
                <tr>
                    <td>Imagen</td>
                    <td>{{ $product->imagen }}</td>
                </tr>
                <tr>
                    <td>Descripción</td>
                    <td>{{ $product->descripcion }}</td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>{{ $product->category->nombre }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>