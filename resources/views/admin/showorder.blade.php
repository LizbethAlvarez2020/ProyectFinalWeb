<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <table>
                <tr style="background-color: rgb(113, 57, 14)" align="center">
                    <td style="padding: 20px;">Nombre del cliente</td>
                    <td style="padding: 20px;">Teléfono</td>
                    <td style="padding: 20px;">Dirección</td>
                    <td style="padding: 20px;">Productos</td>
                    <td style="padding: 20px;">Precio</td>
                    <td style="padding: 20px;">Cantidad</td>
                    <td style="padding: 20px;">Estado</td>
                    <td style="padding: 20px;">Acción</td>
                </tr>
                @foreach ($order as $orders )
               <tr style="background-color:rgb(11, 0, 0) ;" align="center">


                    <td style="padding: 20px;">{{$orders->name}}</td>
                    <td style="padding: 20px;">{{$orders->phone}}</td>
                    <td style="padding: 20px;">{{$orders->address}}</td>
                    <td style="padding: 20px;">{{$orders->product_name}}</td>
                    <td style="padding: 20px;">{{$orders->price}}</td>
                    <td style="padding: 20px;">{{$orders->quantity}}</td>
                    <td style="padding: 20px;">{{$orders->status}}</td>
                    <td style="padding: 20PX;">
                        <a class="btn btn-success" href="{{url ('updatestatus',$orders->id)}}">Entregado</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- main-panel ends -->
      @include('admin.script')
  </body>
</html>
