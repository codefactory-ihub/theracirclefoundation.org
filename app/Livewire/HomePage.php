<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    public $section = "about";
    public $objectives = [
        [
            'title' => 'Circular Economy',
            'description' => 'Promote sustainable, community-centric waste to wealth and valorisation knowledge, attitudes, and practices outcomes by leveraging the 5Rs (Refuse, Reduce, Reuse, Re-purpose or Recycle) as viable circular economy and climate literacy pillars, utilising and adapting established or emerging technologies, strategies, innovations, interventions, or solutions guided by the tenets of circularity and sustainability.',
            'sdg_icons' => [1, 2, 3, 4, 7, 11, 12, 13, 17]
        ],
        [
            'title' => 'Strengthened Health outcomes',
            'description' => 'Contribute to the welfare of vulnerable populations by improving their health (Physical, social, and mental), hygiene (access to sustainable WASH facilities, products, and information) and climate-associated (ESG-compliant) outcomes. This cohort is described but not limited to the elderly, the infirmed, the differently abled, internally displaced persons, marginalized groups, the economically challenged, vulnerable genders and children (Under and over 5 years).',
            'sdg_icons' => [3, 6, 10, 13]
        ],
        [
            'title' => 'Human rights advocacy',
            'description' => 'Assist social groups in coming together as pressure groups and finding ways to influence policy on matters that concern them, through alternative dispute resolution strategies, dialogue, peaceful and non-violent or threatening means such as dedicated discourse platform, public and internal advocacy, or capacity/behavioural remodelling programs.',
            'sdg_icons' => [1, 4, 5, 8, 10, 16, 17]
        ],
        [
            'title' => 'Economic',
            'description' => 'Support and facilitate the economic development, and empowerment of hitherto underserved, vulnerable groups (as detailed in objective b above) on socio-political and socio-economic rights, through the raising awareness of their rights and promoting activities that uphold basic human rights and necessities as ascribed by the Human Developmental Index.',
            'sdg_icons' => [1, 4, 5, 8, 9, 10]
        ],
        [
            'title' => 'Economic Empowerment and Sustainable development ',
            'description' => 'Support scientific research in areas that promote healthy, resilient, environmentally sustainable populations globally. Primary focus would be on health, and wellbeing, the shared environment, Sustainable development goals, Basic Human Rights and Environmental, Social, Governance (ESG) compliance.',
            'sdg_icons' => [4, 8, 9, 11, 16, 17]
        ],
        [
            'title' => 'Access to developmental and climate finance',
            'description' => 'Facilitate the access to finance business intelligence and support for nano, micro, small and medium-scale enterprises in Africa for projects, solutions, services, and products that support the outlined objectives of the NGO .',
            'sdg_icons' => [1, 4, 5, 8, 9, 10, 16, 17]
        ]
    ];


    #[Layout('layouts.landing')]
    #[Title("Home")]
    public function render()
    {
        return view('livewire.home-page');
    }
    public function setSection(string $section)
    {
        $this->section = $section;
    }
}
