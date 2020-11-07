<html>
    <header>

    </header>
    <body>
        <h1>
            @if ($editar)
                Editar
            @else
                Crear
            @endif
             producto
            </h1>
        <br/>
        <br/>
        @if ($editar)
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @method('PATCH')
        @else
            <form action="{{ route('product.store') }}" method="POST">
        @endif
            @csrf
            <table >
                <tr>
                    <td>nombre</td>
                    <td>
                        <input type="text" name="nombre" required value="{{ $product->nombre }}" placeholder="Escriba el nombre">
                    </td>
                </tr>
                <tr>
                    <td>imagen</td>
                    <td>
                        <input type="file" name="imagen" required>
                    </td>
                </tr>
                <tr>
                    <td>descripcion</td>
                    <td>
                        <input type="text" name="descripcion" required value="{{ $product->descripcion }}" placeholder="Escriba el nombre">
                    </td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select type="text" name="category_id" required>
                            <option value=""> Seleccione una opcion</option>
                            @foreach ($categories as $category)
                                @if ($category->id == $product->category_id)
                                    <option selected value="{{ $category->id }}">{{ $category->nombre }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                                @endif

                            @endforeach
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <button type="submit">Guardar</button>
        </form>
    </body>
</html>