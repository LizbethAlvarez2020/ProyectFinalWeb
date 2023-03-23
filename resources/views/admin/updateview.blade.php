<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public>"
    @include('admin.css')
    <style type="text/css">
        .title{
          color:white;
          padding-top:25px;
          font:size 25px;"
        }
        label{ display:inline-block;
         width:200px;
      }
      </style>
  </head>
  <base href="/public">
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Agregar producto</h1>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        {{ session()->get('message') }}

                    </div>
                @endif
                <form action="{{ url('updateproduct',$data->id) }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Producto</label>
                        <input style="color:black;" type="text" name="title" value="{{$data->title}}"
                             required="">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Precio</label>
                        <input style="color:black;" type="number" name="price" value="{{$data->price}}"
                            required="">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Descripción</label>
                        <input style="color:black;" type="text" name="des" value="{{$data->description}}"
                            required="">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Cantidad</label>
                        <input style="color:black;" type="text" name="quantity" value="{{$data->quantity}}"
                            required="">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Imagen Actual</label>
                       <img src="/productimage/{{ $data->image}}" height="150px" width="150px" alt="">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Actualizar imagen</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px;">
                        <input class="btn btn-success" type="submit" name="">
                    </div>
                </form>
            </div>
        </div>
          <!-- partial -->
       @include('admin.script')
  </body>
</html>
