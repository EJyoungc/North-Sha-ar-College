<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Intake Candidates</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Intake</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex justify-content-end ">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="search...">
                        </div>
                        <div class="form-group">
                            {{-- <button class="btn btn-primary" wire:click="open_modal" >add <x-spinner target="open_modal" /> </button> --}}
                            <x-modal :status="$modal" title="Candidate Details">
                                @if (!empty($candidate))
                                    <ul class="scroll list-unstyled">
                                        <li>Full Name : {{ $candidate->first_name }} {{ $candidate->middle_name }}
                                            {{ $candidate->surname }} </li>
                                        <li>Title : {{ $candidate->title }}</li>
                                        <li>Age : {{ $candidate->age }}</li>
                                        <li>Gender : {{ $candidate->gender }}</li>
                                        <li>Nationanlity : {{ $candidate->nationality }}</li>
                                        <li>Mobile Number : {{ $candidate->mobile_number }}</li>
                                        <li>Email : {{ $candidate->email }}</li>
                                        <li>Physical Address : {{ $candidate->physical_address }}</li>
                                        <li>Next of kin Address : {{ $candidate->next_of_kin_address }}</li>
                                        <li>Next of Kin Mobile : {{ $candidate->next_of_kin_mobile }}</li>
                                        <li>Next of Kin Email : {{ $candidate->next_of_kin_email }}</li>
                                        <li>
                                            Programs Selected <br>
                                            @if(!empty($programs))
                                            <ul class="" >
                                                @foreach ($programs as $item )
                                                    <li class="text-primary" >
                                                        {{ $item }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        <li>Education Type : {{ $candidate->educational_type }}</li>

                                        <li>Transcript : <br>
                                            <img src="{{ asset('assets/uploads/' . $candidate->transcript_copy_file) }}"
                                                class="img-fluid" alt="">
                                        </li>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-inverse ">
                                                <thead class="thead-inverse">
                                                    <tr>
                                                        <th>Subject</th>
                                                        <th>Grade</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">{{ $candidate->subject_1 }}</td>
                                                        <td>{{ $candidate->grade_1 }}</td>

                                                    </tr>

                                                    <tr>
                                                        <td scope="row">{{ $candidate->subject_2 }}</td>
                                                        <td>{{ $candidate->grade_2 }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td scope="row">{{ $candidate->subject_2 }}</td>
                                                        <td>{{ $candidate->grade_3 }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td scope="row">{{ $candidate->subject_4 }}</td>
                                                        <td>{{ $candidate->grade_4 }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td scope="row">{{ $candidate->subject_5 }}</td>
                                                        <td>{{ $candidate->grade_5 }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td scope="row">{{ $candidate->subject_6 }}</td>
                                                        <td>{{ $candidate->grade_6 }}</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>





                                    </ul>
                                @endif
                            </x-modal>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($intake_candidates as $index=> $item)
                                            <tr>
                                                <td>{{ $index }}</td>
                                                <td scope="row">{{ $item->first_name }} {{ $item->middle_name }}
                                                    {{ $item->surname }}</td>
                                                <td class="text-capitalize">{{ $item->gender }}</td>

                                                <td>
                                                    <div
                                                        class="badge @if ($item->status == null) bg-secondary @elseif ($item->status == 'approved') bg-success  @else  bg-danger @endif ">
                                                        {{ $item->status =="" ? 'N/A' : $item->status }}</div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">


                                                        <a class="dropdown-item" wire:click='info({{ $item->id }})'
                                                            href="#">view details</a>
                                                        <a class="dropdown-item"
                                                            wire:click="toggle_status({{ $item->id }})"
                                                            href="#">{{ $item->status == 'approved' ? 'Approve' : 'Disapprove' }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty

                                            <tr>
                                                <td colspan="4" class=" text-muted text-center">
                                                    EMPTY
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
