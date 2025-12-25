<?php

namespace App\View\Builders;

use Illuminate\Support\Collection;

class AdminSidebar
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public static function menu($user): self
    {
        return new self($user);
    }

    public function get(): Collection
    {
        $menu = collect([
            (object)[
                'title' => 'Dashboard',
                'icon' => 'ti ti-home',
                'url' => route('admin.dashboard'),
                'hasSubmenu' => false,
                'submenu' => [],
            ],
            (object)[
                'title' => 'Page Management',
                'icon' => 'ti ti-file-text',
                'url' => route('admin.page-management'),
                'hasSubmenu' => false,
                'submenu' => [],
            ],
            (object)[
                'title' => 'Service Categories',
                'icon' => 'ti ti-list',
                'url' => route('admin.service-category'),
                'hasSubmenu' => false,
                'submenu' => [],
            ],
            (object)[
                'title' => 'FAQ Management',
                'icon' => 'ti ti-help-circle',
                'url' => route('admin.faq-management'),
                'hasSubmenu' => false,
                'submenu' => [],
            ],
            
           
        ]);
        return $menu;
    }
}
