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
                'title' => 'Users',
                'icon' => 'ti ti-users',
                'url' => 'javascript:void(0)',
                'hasSubmenu' => true,
                'submenu' => [
                    (object)[
                        'title' => 'User List',
                        'icon' => 'ti ti-user',
                        'url' => route('admin.users'),
                        'hasSubmenu' => false,
                        'submenu' => [],
                    ],
                    (object)[
                        'title' => 'Permissions',
                        'icon' => 'ti ti-lock',
                        'url' => route('admin.permission'),
                        'hasSubmenu' => false,
                        'submenu' => [],
                    ],
                    (object)[
                        'title' => 'Roles & Permissions',
                        'icon' => 'ti ti-shield-check',
                        'url' => route('admin.role-permission'),
                        'hasSubmenu' => false,
                        'submenu' => [],
                    ],
                ],
            ],

            (object)[
                'title' => 'Page',
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
                'title' => 'FAQ',
                'icon' => 'ti ti-help-circle',
                'url' => route('admin.faq-management'),
                'hasSubmenu' => false,
                'submenu' => [],
            ],
            (object)[
                'title' => 'Blog',
                'icon' => 'ti ti-article',
                'url' => 'javascript:void(0)',
                'hasSubmenu' => true,
                'submenu' => [
                  
                    (object)[
                        'title'=> 'Blog Categories',
                        'icon' => 'ti ti-list',
                        'url' => route('admin.blog-category'),
                        'hasSubmenu' => false,
                        'submenu' => [],
                    ],
                    (object)[
                        'title' => 'Blog List',
                        'icon' => 'ti ti-list-details',
                        'url' => route('admin.blog-list'),
                        'hasSubmenu' => false,
                        'submenu' => [],
                    ],
                ],
            ],  
            (object)[
                'title' => 'Contacts',
                'icon' => 'ti ti-mail',
                'url' => route('admin.contact-list'),
                'hasSubmenu' => false,
                'submenu' => [],
            ],
            (object)[
                'title' => 'Portfolio',
                'icon' => 'ti ti-briefcase',
                'url' => route('admin.portfolio.list'),
                'hasSubmenu' => false,
                'submenu' => [],
            ],
            (object)[
                'title' => 'Package Enquiries',
                'icon' => 'ti ti-package',
                'url' => route('admin.package-enquiry'),
                'hasSubmenu' => false,
                'submenu' => [],
            ]

        ]);

        return $menu;
    }
}
