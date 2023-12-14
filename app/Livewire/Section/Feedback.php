<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Feedback extends Component
{

    public $feedbackDoc = [
        "Bring it all in your inbox",
        "Document rich user interviews",
        "Capture with context"
    ];

    public $activeFeedback = 0;
    public $activeFeedback2 = 0;

    public function activeFeedbackFunc($index)
    {
        $this->activeFeedback = $index;
    }
    public function activeFeedbackFunc2($index)
    {
        $this->activeFeedback2 = $index;
    }

    public function render()
    {
        return view('livewire.section.feedback');
    }
}
