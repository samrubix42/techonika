<div class="container-xl mt-4">

    <!-- HEADER -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Portfolio List</h3>
            <button class="btn btn-primary" wire:click="openModal">
                + Add Portfolio
            </button>
        </div>

        <div class="card-body">

            <!-- SEARCH -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control"
                           placeholder="Search..."
                           wire:model.debounce.500ms="search">
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th width="130">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($portfolios as $portfolio)
                            <tr>
                                <td>{{ $portfolio->id }}</td>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $categories->find($portfolio->category_id)?->name }}</td>
                                <td>{{ Str::limit($portfolio->description, 50) }}</td>
                                <td>
                                    @if($portfolio->image)
                                        <img src="{{ asset('storage/'.$portfolio->image) }}"
                                             width="50" class="rounded">
                                    @endif
                                </td>
                                <td>
                                    {{ is_array($portfolio->tags)
                                        ? implode(', ', $portfolio->tags)
                                        : $portfolio->tags }}
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-info"
                                            wire:click="edit({{ $portfolio->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger"
                                            wire:click="confirmDelete({{ $portfolio->id }})">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    No portfolios found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $portfolios->links() }}
        </div>
    </div>

    <!-- ================= MODAL ================= -->
    @if($showModal)
    <div class="modal fade show d-block" tabindex="-1"
         style="background: rgba(0,0,0,.6)">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-4">

                <div class="modal-header">
                    <h5 class="modal-title">
                        {{ $editId ? 'Edit Portfolio' : 'Add Portfolio' }}
                    </h5>
                    <button class="btn-close" wire:click="closeModal"></button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control"
                                       wire:model.defer="title">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Category</label>
                                <select class="form-select"
                                        wire:model.defer="category_id">
                                    <option value="">Select</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3"
                                          wire:model.defer="description"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control"
                                       wire:model="imageFile">
                                <div wire:loading wire:target="imageFile"
                                     class="text-muted mt-1">
                                    Uploading...
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Preview</label>
                                <div class="border rounded p-2 text-center bg-light">
                                    @if ($imageFile)
                                        <img src="{{ $imageFile->temporaryUrl() }}"
                                             class="img-fluid rounded"
                                             style="max-height:120px">
                                    @elseif ($image)
                                        <img src="{{ asset('storage/'.$image) }}"
                                             class="img-fluid rounded"
                                             style="max-height:120px">
                                    @else
                                        <small class="text-muted">No image</small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Tags</label>
                                <input type="text" class="form-control"
                                       placeholder="UI, Laravel, App"
                                       wire:model.defer="tags">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light"
                                wire:click="closeModal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            {{ $editId ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endif

    <!-- ================= DELETE MODAL ================= -->
    @if($showDeleteModal)
    <div class="modal fade show d-block" tabindex="-1"
         style="background: rgba(0,0,0,.6)">
        <div class="modal-dialog">
            <div class="modal-content rounded-4">

                <div class="modal-header">
                    <h5 class="modal-title">Delete Portfolio</h5>
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
                    <button class="btn btn-danger" wire:click="delete">
                        Delete
                    </button>
                </div>

            </div>
        </div>
    </div>
    @endif

</div>
