<html>
    <header>

    </header>
    <body>
        <h1>Crear categoria</h1>
        <br/>
        <br/>
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <table >
                <tr>
                    <td>nombre</td>
                    <td>
                        <input type="text" name="nombre" required value="{{ $category->nombre }}" placeholder="Escriba el nombre">
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <button type="submit">Guardar</button>
        </form>
    </body>
</html>