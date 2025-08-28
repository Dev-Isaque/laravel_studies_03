<div class="card p-3 m-5">
    <h3> {{ $nomePessoa }} </h3>
    <hr>

    <p class="text-light"> Linguas que domina: </p>

    <ul class="text-center">
        @foreach ($linguasPessoa as $lingua)
            <li class="text-warning">
                {{ $lingua }}
            </li >
        @endforeach
    </ul>
</div>
