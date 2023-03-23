<div class="latest-product">
  <div class="container">
     <div class="row">
         <div class="col-md-12">
           <div class="section-heading">
             <h2>Lista de productos</h2>
              <!-- <a href="products.html">ver todos los productos </a> -->
               <form action="{{url('search')}}" method="GET" class="form-inline" style="float: right; padding: 10px;">
                   @csrf
                   <input type="search" class="form-control" name="search" placeholder="Buscar...">
                   <input type="submit" value="Buscar" class="btn btn-outline-seccess">
               </form>
           </div>
         </div>

         @foreach($data as $product)

         <div class="col-md-4">
           <div class="product-item">
             <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
             <div class="down-content">
               <a href="#">
                 <h4>{{$product->title}}</h4>
               </a>
               <h6>{{$product->price}}</h6>
               <p>{{$product->description}}</p>
               <form action="{{url('addcart',$product->id)}}" method="POST">
                   @csrf
                   <input type="number" value="1" min="1" name="quantity"class="form-control" style="width: 80px;"><br>
                   <input type="submit" value="Añadir a carrito" class="btn btn-outline-primary">
               </form>



             </div>
           </div>
         </div>

         @endforeach
         @if (method_exists($data,'links'))
         <div class="d-flex" justify-contect-center>{!! $data->links() !!}</div>
         @endif
       </div>
     </div>
   </div>
