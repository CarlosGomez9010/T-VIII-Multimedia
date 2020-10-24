<html>
    <header>

    </header>
    <body>
        <h1>La categoria es: {{ $category->nombre }}</h1>
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
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <td>Creado</td>
                    <td>{{ $category->created_at }}</td>
                </tr>
                <tr>
                    <td>Actualizado</td>
                    <td>{{ $category->updated_at }}</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>{{ $category->nombre }}</td>
                </tr>
                <tr>
                    <td>Imagen</td>
                    <td>{{ $category->imagen }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>