<?php

namespace App\Livewire;

use App\Models\CompanyTimeline;
use App\Models\Pages;
use Livewire\Component;

class AboutLivewire extends Component
{

    public $timelines;
    public $counts = [];
    public $mission;
    public $vission;
    public $values = [];

    public function mount()
    {
        $this->timelines = CompanyTimeline::all();

        $pageContent = Pages::where('group', 'about-page')->get();

        // Get mission and vision
        $this->mission = $pageContent->firstWhere('name', 'our-mission')?->payload;
        $this->vission = $pageContent->firstWhere('name', 'our-vision')?->payload;

        // Filter out mission and vision to build counts array
        $this->counts = $pageContent
            ->filter(fn($item) => in_array($item->name, ['Support Available', 'Uptime Guarantee', 'Countries Served', 'Happy Clients']))
            ->mapWithKeys(fn($item) => [$item->name => $item->payload])
            ->toArray();

        // Get values cards
        $this->values = $pageContent
            ->filter(fn($item) => in_array($item->name, [
                'Innovation',
                'Excellence',
                'Integrity',
                'Collaboration',
                'Security',
                'Customer Focus'
            ]))
            ->values();
    }

    public function render()
    {
        return view('livewire.about-livewire');
    }
}
