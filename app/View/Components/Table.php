<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component {

    public array $columns;
    public mixed $userData;

    /**
     * Create a new component instance.
     */
    public function __construct(array $data) {
        $this->columns = $data['columns'];
        $this->userData = $data['userData'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View {
        return view('components.table');
    }
}
