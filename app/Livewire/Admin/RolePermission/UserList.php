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

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'password' => 'nullable|min:8|confirmed',
        ];
    }

    public $search = '';
    public $modalOpen = false;
    public $editModalOpen = false;

    public $userId = null;
    public $selectedRoles = [];

    // Edit User Properties
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

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

    /* ---------- Edit User Modal ---------- */

    public function openEditModal($id)
    {
        $user = User::findOrFail($id);

        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->editModalOpen = true;
    }

    public function closeEditModal()
    {
        $this->reset(['userId', 'name', 'email', 'password', 'password_confirmation', 'editModalOpen']);
        $this->resetValidation();
    }

    /* ---------- Update User ---------- */

    public function updateUser()
    {
        $this->validate();

        $user = User::findOrFail($this->userId);
        
        $data = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        // Update password only if provided
        if (!empty($this->password)) {
            $data['password'] = bcrypt($this->password);
        }

        $user->update($data);

        session()->flash('success', 'User details updated successfully');

        $this->closeEditModal();
    }
}
