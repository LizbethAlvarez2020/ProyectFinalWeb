<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .title {
            color: white;
            padding-top: 25px;
            font: size 25px;
            "

        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <h1 class="title">Agregar producto</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}

                </div>
            @endif
            <form action="{{ url('uploadproduct') }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="">Producto</label>
                    <input style="color:black;" type="text" name="title"
                        placeholder="Ingresa el nombre del producto" required="">
                </div>
                <div style="padding: 15px;">
                    <label for="">Precio</label>
                    <input style="color:black;" type="number" name="price"
                        placeholder="Ingresa el precio del producto" required="">
                </div>
                <div style="padding: 15px;">
                    <label for="">Descripción</label>
                    <input style="color:black;" type="text" name="des"
                        placeholder="Ingresa la descripción del producto" required="">
                </div>
                <div style="padding: 15px;">
                    <label for="">Cantidad</label>
                    <input style="color:black;" type="text" name="quantity"
                        placeholder="Ingresa la cantidad de producto" required="">
                </div>
                <div style="padding: 15px;">
                    <input type="file" name="file">
                </div>
                <div style="padding: 15px;">
                    <input class="btn btn-success" type="submit" name="">
                </div>
            </form>
        </div>
    </div>
    <!-- partial -->

    <!-- partial -->
    @include('admin.script')
</body>

</html>
