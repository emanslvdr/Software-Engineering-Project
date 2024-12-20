<x-admin-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show my-1" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between p-2">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Job listing') }}
                        </h2>

                        {{-- @if ($jobs->isEmpty())
                            <a href="{{ route('jobs.create') }}" type="button" class="btn btn-primary">Create Jobs</a>
                        @else
                            <p>Total: {{ $totalJobs }}</p>
                            <a href="{{ route('jobs.create') }}" type="button" class="btn btn-primary">Post</a>
                        @endif --}}

                    </div>
                    <hr>
                    <div>
                        @if ($jobs->isEmpty())
                            <p class="text-center p-6" colspan="5">No Listings Found.</p>
                        @else
                            <table class="table table-hover table-responsive">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Title</th>
                                        <th>Company</th>
                                        <th>Organization</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $form)
                                        <tr>
                                            <td class="align-middle">
                                                <p>{{ $form->job_title }}</p>
                                            </td>
                                            <td class="align-middle">{{ $form->company }}</td>
                                            <td class="align-middle">{{ $form->organization->organization_name }}</td>
                                            <td class="align-middle">{{ $form->job_type }}</td>
                                            <td class="align-middle">{{ $form->status }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('jobs.view', $form->id) }}" type="button"
                                                        class="btn btn-success">Open Pipeline</a>

                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
