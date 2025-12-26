<?php

namespace App\Livewire\Admin\RolePermission;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $modalOpen = false;

    public $userId = null;
    public $selectedRoles = [];

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.role-permission.user-list', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->with('roles')
                ->paginate(10),

            'roles' => Role::orderBy('name')->get()
        ]);
    }

    /* ---------- Modal ---------- */

    public function openModal($id)
    {
        $user = User::with('roles')->findOrFail($id);

        $this->userId = $user->id;
        $this->selectedRoles = $user->roles->pluck('name')->toArray();
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->reset(['userId', 'selectedRoles', 'modalOpen']);
    }

    /* ---------- Save ---------- */

    public function save()
    {
        $user = User::findOrFail($this->userId);
        $user->syncRoles($this->selectedRoles);

        session()->flash('success', 'User roles updated successfully');

        $this->closeModal();
    }
}
