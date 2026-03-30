<?php

namespace App\Livewire\Public\Home;

use Livewire\Component;
use App\Models\Testimonial;
use App\Models\VideoSlider;
use App\Models\Post;
use Illuminate\Support\Facades\Schema;

class Home extends Component
{
    public function render()
    {
        $latestPosts = collect();
        if (Schema::hasTable('posts')) {
            $latestPosts = Post::query()
                ->where('status', true)
                ->latest()
                ->take(3)
                ->get();
        }

        return view('livewire.public.home.home', [
            'testimonials' => Testimonial::where('is_active', true)
                ->orderBy('sequence')
                ->get(),
            'videoSliders' => VideoSlider::query()
                ->latest()
                ->take(12)
                ->get(),
            'latestPosts' => $latestPosts,
        ]);
    }
}
