<div>
    <div class="card m-5 p-5 shadow">
        <div class="row ">
                <div class="col container-sm">
                    <input type="text" wire:model.live="search" class="form-control">
                </div>
                <div class="col container-sm">
                    <button class="btn btn-primary rounded" id="add-new-account">Add New Account</button>
                </div>

            <div class="row m-2">
                <div class="container-sm">
                    <div class="table-responsive-md">
                        <table class="table table-bordered w-100 text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Account ID</th>
                                    <th>Account Name</th>
                                    <th>Bank Name</th>
                                    <th>Current Balance</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    // Get the current page and the number of items per page
                                    $currentPage = $datas->currentPage();
                                    $perPage = $datas->perPage();

                                    // Calculate the starting number for the current page
                                    $i = ($currentPage - 1) * $perPage + 1;
                                @endphp
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $data->accountid }}</td>
                                        <td>{{ $data->accountname }}</td>
                                        <td>{{ $data->bankname }}</td>
                                        <td>{{ $data->currentbalance }}</td>
                                        <td>{{ $data->dateopened }}</td>
                                        <td>
                                            <!-- Update button -->
                                            {{-- <button class="btn btn-sm btn-warning" onclick="updateAccount({{ $data->id }})">
                                                Update
                                            </button> --}}
                                           <button class="material-symbols-outlined rounded bg-warning" id="update-data-account" data-accountid="{{ $data->accountid }} ">update</button>

                                            <!-- Delete button -->
                                            {{-- <button class="btn btn-sm btn-danger" onclick="deleteAccount({{ $data->id }})">
                                                Delete
                                            </button> --}}
                                            <button class="material-symbols-outlined rounded bg-danger" id="delete-data-account" data-accountid="{{ $data->accountid }}">
                                                delete
                                            </button>
                                        </td>
                                        @include('modal.updateaccountmodal')
                                        @include('modal.deleteaccountmodal')
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        {{ $datas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal.addnewaccountmodal')
</div>


{{-- the main page --}}
