<div class="container">
    <div style="text-align: center">

        @foreach($products as $product)
            <h1>{{ $product->name }}</h1>
            <p>
                Price: <b>{{$product->getPrice()}}</b>
                Size: <b>{{$product->getSize()}}</b>
                Weight: <b>{{$product->getWeight()}}</b>
            </p>

            <ul>
                @foreach($product->deliveries as $delivery)
                    <li>{{$delivery->name}} {{$delivery->getPrice()}}</li>
                @endforeach
            </ul>
            <p>
            <form action="products/{{$product->id}}" method="get">
                <button type="submit">Show</button>
            </form>
            </p>
        @endforeach
        <br>
        <p>
            <div style="display: inline-block;text-align: left; border: 1px solid #718096;padding: 10px;border-radius: 10px">
        <form action="products/create" method="post">
            @csrf
            <input name="name" type="text" id="name">
            <label for="name">Product name</label><br>
            <input name="size" type="text" id="size">
            <label for="size">Product size</label><br>
            <input name="price" type="text" id="price">
            <label for="price">Product price</label><br>
            <input name="weight" type="text" id="weight">
            <label for="weight">Product weight</label><br><br>

            <button type="submit">Create</button>
        </form>
            </div>
        </p>
    </div>
</div>

