<div class="card p-3 m-5">
    <h3 class="{{ $colorName() ? 'text-info' : '' }}"> {{ $pessoa }} </h3>
    <hr>

    <p class="text-light"> Linguas que domina: </p>

    <ul class="text-center">
        @foreach ($linguas as $lingua)
            <li class="text-warning">
                {{ $lingua }}
            </li >
        @endforeach
    </ul>
</div>
