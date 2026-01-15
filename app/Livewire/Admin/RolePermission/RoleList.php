<?php

namespace App\Livewire\Admin\RolePermission;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $modalOpen = false;

    public $roleId = null;
    public $name = '';
    public $selectedPermissions = [];

    // Delete confirmation
    public $confirmingDelete = false;
    public $deleteId = null;
    public $deleteName = '';

    protected function rules()
    {
        return [
            'name' => 'required|unique:roles,name,' . $this->roleId,
            'selectedPermissions' => 'array'
        ];
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.role-permission.role-list', [
            'roles' => Role::where('name', 'like', '%' . $this->search . '%')
                ->with('permissions')
                ->orderBy('id', 'desc')
                ->paginate(10),

            'permissions' => Permission::orderBy('name')->get()
        ]);
    }

    /* ---------------- Modal ---------------- */

    public function openModal()
    {
        $this->resetForm();
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->reset(['roleId', 'name', 'selectedPermissions']);
        $this->resetValidation();
    }

    /* ---------------- CRUD ---------------- */

    public function save()
    {
        $this->validate();

        $role = Role::updateOrCreate(
            ['id' => $this->roleId],
            ['name' => $this->name, 'guard_name' => 'web']
        );

        $role->syncPermissions($this->selectedPermissions);

               $this->dispatch('toast', type: 'success', message: $this->roleId ? 'Role updated successfully' : 'Role created successfully');


        $this->closeModal();
    }

    public function edit($id)
    {
        $role = Role::with('permissions')->findOrFail($id);

        $this->roleId = $role->id;
        $this->name = $role->name;
        $this->selectedPermissions = $role->permissions->pluck('name')->toArray();

        $this->modalOpen = true;
    }

    /* ---------------- Delete Confirmation ---------------- */

    public function confirmDelete($id)
    {
        $role = Role::find($id);
        $this->deleteId = $id;
        $this->deleteName = $role ? $role->name : '';
        $this->confirmingDelete = true;
    }

    public function cancelDelete()
    {
        $this->confirmingDelete = false;
        $this->deleteId = null;
        $this->deleteName = '';
    }

    public function deleteConfirmed()
    {
        if ($this->deleteId) {
            Role::findOrFail($this->deleteId)->delete();
                $this->dispatch('toast', type: 'success', message:  'Role deleted successfully');
        }

        $this->cancelDelete();
    }

    public function delete($id)
    {
        Role::findOrFail($id)->delete();
            $this->dispatch('toast', type: 'success', message:  'Role deleted successfully');
    }
}
