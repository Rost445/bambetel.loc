<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UniversalForm extends Component
{
    public $fields;
    public $form_name;
    public $admin_email;

    public function __construct($fields = [], $form_name = 'default', $admin_email = null)
    {
        $this->fields = $fields;
        $this->form_name = $form_name;
        $this->admin_email = $admin_email;
    }

    public function render()
    {
        return view('components.universal-form');
    }
}
