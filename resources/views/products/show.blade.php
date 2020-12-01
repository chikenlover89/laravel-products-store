<div class="container">
    <div style="text-align: center">
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
        <form action="/products/{{$product->id}}/delete" method="get">
            <button style="color: red" type="submit">Delete</button>
        </form>
        </p>
        <br>
        <p>
        <div style="display: inline-block;text-align: left; border: 1px solid #718096;padding: 10px;border-radius: 10px">
            <form action="/products/{{$product->id}}/update" method="post">

                @csrf
                <input name="name" type="text" id="name" value="{{$product->name}}">
                <label for="name">Product name</label><br>
                <input name="size" type="text" id="size" value="{{$product->size}}">
                <label for="size">Product size</label><br>
                <input name="price" type="text" id="price" value="{{$product->price}}">
                <label for="price">Product price</label><br>
                <input name="weight" type="text" id="weight" value="{{$product->weight}}">
                <label for="weight">Product weight</label><br><br>

                <button type="submit">Update</button>
            </form>
        </div>
        </p>
    </div>
</div>

