<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardPessoa extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        /* public string $nomePessoa,
        public array $linguasPessoa */

        /* Short Attribute Syntax */
        public string $pessoa,
        public array $linguas
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-pessoa');
    }

    public function shouldRender(): bool
    {
        // Só redenriza o componente se a pessoa fala mais de uma lingua
        return count($this->linguas) > 1;
    }

    public function colorName(): bool
    {
        // Se a pessoa for a Duda, destaca o nome
        return $this->pessoa === 'Duda';
    }
}
