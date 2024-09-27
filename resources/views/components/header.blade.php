<div>
    <p>Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh</p>
    <p>{{ $company }}</p>

    <ul>
        @foreach ($products as $product)
            <li> {{$product}}</li>
        @endforeach
    </ul>
</div>
