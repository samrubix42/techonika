<div
    x-data="clientSortable()"
    x-init="init()"
>
    <!-- PAGE HEADER -->
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Clients</h3>
            <button class="btn btn-primary" wire:click="openModal">
                <i class="ti ti-plus me-1"></i> Add Client
            </button>
        </div>
    </div>

    <!-- SEARCH BAR -->
    <div class="card mb-3">
        <div class="card-body p-2">
            <div class="input-icon">
                <span class="input-icon-addon">
                    <i class="ti ti-search"></i>
                </span>
                <input
                    wire:model.live.debounce.300ms="search"
                    type="text"
                    class="form-control"
                    placeholder="Search by ID or filter..."
                >
            </div>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th width="40"></th>
                        <th>Image</th>
                        <th>Sequence</th>
                        <th>Status</th>
                        <th class="text-end" width="160">Actions</th>
                    </tr>
                </thead>

                <tbody x-ref="list">
                    @forelse ($items as $item)
                        <tr data-id="{{ $item->id }}">
                            <td class="cursor-move drag text-muted">
                                <i class="ti ti-menu-2"></i>
                            </td>

                            <td>
                                @if($item->client_img)
                                    <img src="{{ Storage::url($item->client_img) }}" alt="Client" class="rounded shadow-sm" style="height: 40px; width: 80px; object-fit: contain; background: #f8f9fa;">
                                @else
                                    <span class="text-muted small">No Image</span>
                                @endif
                            </td>

                            <td>
                                <span class="badge bg-azure-lt">{{ $item->sequence }}</span>
                            </td>

                            <td>
                                <label class="form-check form-switch mb-0">
                                    <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        wire:click="toggleActive({{ $item->id }})"
                                        {{ $item->is_active ? 'checked' : '' }}>
                                    <span class="form-check-label text-muted small">
                                        {{ $item->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </label>
                            </td>

                            <td class="text-end">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-primary"
                                        wire:click="openModal({{ $item->id }})">
                                        <i class="ti ti-edit"></i> Edit
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger"
                                        wire:click="confirmDelete({{ $item->id }})">
                                        <i class="ti ti-trash"></i> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">No clients found.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

    <!-- CREATE / EDIT MODAL -->
    @if($showModal)
    <div class="modal modal-blur fade show d-block" style="background:rgba(0,0,0,.6)" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">
                        {{ $editId ? 'Edit Client' : 'Add Client' }}
                    </h5>
                    <button type="button" class="btn-close" wire:click="$set('showModal', false)"></button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Client Image</label>
                            <input type="file" class="form-control @error('client_img') is-invalid @enderror" 
                                   wire:model="client_img">
                            @error('client_img') 
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                @if ($client_img)
                                    <div class="text-muted small mb-1">Preview:</div>
                                    <img src="{{ $client_img->temporaryUrl() }}" class="rounded border" style="max-height: 100px;">
                                @elseif ($existingImage)
                                    <div class="text-muted small mb-1">Current Image:</div>
                                    <img src="{{ Storage::url($existingImage) }}" class="rounded border" style="max-height: 100px;">
                                @endif
                            </div>
                        </div>

                        <div>
                            <label class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       wire:model.defer="is_active">
                                <span class="form-check-label fw-semibold">Active Status</span>
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" wire:click="$set('showModal', false)">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                            <span wire:loading class="spinner-border spinner-border-sm me-1"></span>
                            <i class="ti ti-device-floppy me-1"></i>
                            Save
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif

    <!-- DELETE CONFIRMATION MODAL -->
    @if($showDeleteModal)
    <div class="modal modal-blur fade show d-block" style="background:rgba(0,0,0,.6)" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content border-0 shadow">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Confirm Delete</h5>
                    <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                </div>

                <div class="modal-body text-center py-4">
                    <i class="ti ti-alert-triangle text-danger mb-2" style="font-size: 2rem;"></i>
                    <p class="mb-0">Are you sure you want to delete this client?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" wire:click="$set('showDeleteModal', false)">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-danger" wire:click="delete">
                        <i class="ti ti-trash me-1"></i>
                        Delete
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>

    <script>
    function clientSortable() {
        return {
            init() {
                new Sortable(this.$refs.list, {
                    animation: 150,
                    handle: '.drag',
                    onEnd: () => {
                        let order = [...this.$refs.list.children]
                            .map(row => row.dataset.id)
                        Livewire.dispatch('updateOrder', {order})
                    }
                })
            }
        }
    }
    </script>
</div>
