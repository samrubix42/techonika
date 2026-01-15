<div class="container-xl py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Portfolio Management</h3>
            <p class="text-muted small">Drag rows to reorder projects</p>
        </div>
        <button class="btn btn-primary" wire:click="openModal">
            Add Portfolio
        </button>
    </div>

    <!-- Search Bar -->
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
                    placeholder="Search portfolios by title or description..."
                >
            </div>
        </div>
    </div>

    <!-- Success Alert -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="ti ti-check me-1"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- TABLE -->
    <div class="card border-0 shadow-sm"
         x-data="sortableTable"
         x-init="init()">

        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="bg-light">
                <tr>
                    <th style="width:40px"></th>
                    <th style="width:80px">Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th class="text-end">Actions</th>
                </tr>
                </thead>

                <tbody x-ref="tbody">
                @foreach($portfolios as $p)
                    <tr data-id="{{ $p->id }}">
                        <td class="text-muted cursor-move">☰</td>
                        <td>
                            @if($p->image)
                                <img src="{{ asset('storage/' . $p->image) }}" 
                                     alt="{{ $p->title }}"
                                     class="rounded"
                                     style="width: 60px; height: 60px; object-fit: cover;">
                            @else
                                <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                     style="width: 60px; height: 60px;">
                                    <i class="ti ti-photo text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td class="fw-semibold">{{ $p->title }}</td>
                        <td>{{ $categories->find($p->category_id)?->name }}</td>
                        <td>
                            <label class="form-check form-switch mb-0">
                                <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    wire:click="toggleActive({{ $p->id }})"
                                    {{ $p->is_active ? 'checked' : '' }}>
                                <span class="form-check-label text-muted small">
                                    {{ $p->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </label>
                        </td>
                        <td>
                            <span class="badge bg-primary-lt">{{ $p->sequence }}</span>
                        </td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary"
                                    wire:click="edit({{ $p->id }})">
                                Edit
                            </button>

                            <button class="btn btn-sm btn-outline-danger ms-2"
                                    wire:click="confirmDelete({{ $p->id }})">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- CREATE / EDIT MODAL -->
    @if($showModal)
    <div class="modal fade show d-block" style="background:rgba(0,0,0,.6)">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">
                        {{ $editId ? 'Edit Portfolio' : 'Create Portfolio' }}
                    </h5>
                    <button class="btn-close" wire:click="closeModal"></button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="modal-body row g-3">

                        <div class="col-md-8">
                            <label class="form-label fw-semibold">Title</label>
                            <input type="text" class="form-control"
                                   wire:model.defer="title" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Sequence</label>
                            <input type="number" class="form-control"
                                   wire:model.defer="sequence">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Category</label>
                            <select class="form-select"
                                    wire:model.defer="category_id" required>
                                <option value="">Select</option>
                                @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Project URL</label>
                            <input type="url" class="form-control"
                                   wire:model.defer="project_url">
                        </div>

                        <div class="col-12">
                        <div class="col-12">
                            <label class="form-label fw-semibold">Portfolio Image</label>
                            
                            @if($existingImage && !$image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $existingImage) }}" 
                                         alt="Current Image"
                                         class="rounded border"
                                         style="max-height: 150px;">
                                    <p class="text-muted small mt-1">Current image</p>
                                </div>
                            @endif

                            @if($image)
                                <div class="mb-2">
                                    <img src="{{ $image->temporaryUrl() }}" 
                                         alt="Preview"
                                         class="rounded border"
                                         style="max-height: 150px;">
                                    <p class="text-muted small mt-1">New image preview</p>
                                </div>
                            @endif

                            <input type="file" 
                                   class="form-control @error('image') is-invalid @enderror"
                                   wire:model="image"
                                   accept="image/*">
                            
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            
                            <small class="text-muted">Max 2MB. Supported: JPG, PNG, GIF</small>
                            
                            <div wire:loading wire:target="image" class="text-primary mt-1">
                                <small>Uploading...</small>
                            </div>
                        </div>

                            <label class="form-label fw-semibold">Description</label>
                            <textarea class="form-control"
                                      wire:model.defer="description"
                                      rows="3"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-check form-switch">
                                <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    wire:model.defer="is_active">
                                <span class="form-check-label fw-semibold">
                                    Active Status
                                </span>
                            </label>
                            <small class="text-muted d-block">Enable to show this portfolio on the website</small>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Tags</label>
                            <input type="text" class="form-control"
                                   placeholder="Laravel, React"
                                   wire:model.defer="tags">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light"
                                wire:click="closeModal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endif

    <!-- DELETE MODAL -->
    @if($showDeleteModal)
    <div class="modal fade show d-block" style="background:rgba(0,0,0,.6)">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Delete Portfolio</h5>
                    <button class="btn-close"
                            wire:click="$set('showDeleteModal', false)"></button>
                </div>

                <div class="modal-body">
                    Are you sure you want to delete this portfolio?
                </div>

                <div class="modal-footer">
                    <button class="btn btn-light"
                            wire:click="$set('showDeleteModal', false)">
                        Cancel
                    </button>
                    <button class="btn btn-danger"
                            wire:click="delete">
                        Delete
                    </button>
                </div>

            </div>
        </div>
    </div>
    @endif

</div>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('sortableTable', () => ({
        sortable: null,

        init() {
            this.$nextTick(() => this.makeSortable())

            document.addEventListener('livewire:navigated', () => {
                this.makeSortable()
            })
        },

        makeSortable() {
            if (!this.$refs.tbody) return

            if (this.sortable) {
                this.sortable.destroy()
            }

            this.sortable = new Sortable(this.$refs.tbody, {
                animation: 150,
                handle: 'td:first-child',
                ghostClass: 'bg-light',
                onEnd: () => {
                    let ids = [...this.$refs.tbody.children]
                        .map(tr => tr.dataset.id)

                    Livewire.dispatch('updateOrder', { ids })
                }
            })
        }
    }))
})
</script>

