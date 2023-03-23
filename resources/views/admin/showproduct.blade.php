<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div  style="padding- bottom: 30 px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            @if(session()->has('message'))
        <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {{session()->get('message')}}

        </div>
        @endif
              <table>

                  <tr style="background-color: rgb(121, 69, 9);">
                  <td style="padding: 20px; color black;">Titulo</td>
                  <td style="padding: 20px; color black;">Descripción</td>
                  <td style="padding: 20px; color black;">Cantidad</td>
                  <td style="padding: 20px; color black;">Precio</td>
                  <td style="padding: 20px; color black;">Imagen</td>
                  <td style="padding: 20px; color black;">Actualizar</td>
                  <td style="padding: 20px; color black;">Borrar</td>  </tr>

                 @foreach ($data as $product)
                <tr align="center" style="background-color: black;">
                  <td>{{ $product->title}}</td>
                  <td>{{ $product->description}}</td>
                  <td>{{ $product->quantity}}</td>
                  <td>{{ $product->price}}</td>
                  <td><img src="/productimage/{{$product->image}}"  width="300px" height="300px" alt=""></td>
                  <td><a class="btn btn-primary" href="{{ url ('updateview' ,$product->id) }}">Actualizar</a></td>
                  <td><a class="btn btn-danger" onclick="return confirm('¿Estas seguro?')" href="{{ url('deleteproduct',$product->id) }}">Borrar</a>

                  </td>

                </tr>
                @endforeach
              </table>
          <!-- partial -->
       @include('admin.script')
  </body>
</html>
