<?php

namespace App\Livewire\Admin\RolePermission;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Spatie\Permission\Models\Permission;

class PermissionList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $permissionId = null;
    public $name = '';
    public $modalOpen = false;

    protected $rules = [
        'name' => 'required|unique:permissions,name',
    ];

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $permissions = Permission::where('name', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.admin.role-permission.permission-list', [
            'permissions' => $permissions
        ]);
    }

    public function openModal()
    {
        $this->resetInput();
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->permissionId = null;
        $this->name = '';
        $this->resetValidation();
    }

    public function save()
    {
        $this->rules['name'] = 'required|unique:permissions,name,' . $this->permissionId;
        $this->validate();

        Permission::updateOrCreate(
            ['id' => $this->permissionId],
            ['name' => $this->name, 'guard_name' => 'web']
        );
        $this->dispatch('toast', type: 'success', message: $this->permissionId ? 'Permission updated' : 'Permission created');
        $this->closeModal();
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        $this->permissionId = $permission->id;
        $this->name = $permission->name;
        $this->modalOpen = true;
    }

    public function delete($id)
    {
        Permission::findOrFail($id)->delete();
        session()->flash('success', 'Permission deleted');
    }
}
