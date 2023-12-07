<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading ">
                    <h2>Enroll Now</h2>
                    <div class="card">
                        <div class="card-body">
                            @if($intake->count() > 0)
                            <form wire:submit='store'>
                                <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="">First Name</label>
                                        <input type="text" wire:model='first_name' class="form-control">
                                        <x-error for="first_name" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="">Middle Name</label>
                                        <input type="text" wire:model='middle_name' class="form-control">
                                        <x-error for="middle_name" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="">Surname</label>
                                        <input type="text" wire:model='surname'  class="form-control">
                                        <x-error for="surname" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="">Age</label>
                                        <input type="text" wire:model='age'  class="form-control">
                                        <x-error for="age" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="">Gender</label>
                                        <select class="form-control" wire:model='gender' > 
                                            <option value="">Select</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select>
                                        <x-error for="gender" />
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="">Title</label>
                                        <select class="form-control" wire:model='title' > 
                                            <option value="">Select</option>
                                            <option value="mr">Mr</option>
                                            <option value="mrs">Mrs</option>
                                            <option value="ms">Ms</option>
                                        </select>
                                        <x-error for="title" />
                                    </div>

                                    <div class="form-group col-lg-3">
                                        <label for="">Nationality</label>
                                        <select class="form-control" wire:model='nationality'>
                                            <option value="">Select</option>
                                            @foreach (country::all() as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                        <x-error for="nationality" />
                                    </div>

                                    <div class="form-group col-lg-3 ">
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" wire:model='mobile_number' >
                                        <x-error for="mobile_number" />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" wire:model='email' >
                                        <x-error for="email" />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="">Physical Address</label>
                                        <input type="text" class="form-control" wire:model='physical_address' >
                                        <x-error for="physical_address" />
                                    </div>

                                    <div class="form-group col-lg-4 ">
                                        <label for="">Next Of Kin Address</label>
                                        <input type="text" class="form-control" wire:model='next_of_kin_address' >
                                        <x-error for="next_of_kin_address" />
                                    </div>
                                    <div class="form-group col-lg-4 ">
                                        <label for="">Next Of kin Mobile</label>
                                        <input type="text" class="form-control" wire:model='next_of_kin_mobile' >
                                        <x-error for="next_of_kin_mobile" />
                                    </div>
                                    <div class="form-group col-lg-4 ">
                                        <label for="">Next Of Kin Email</label>
                                        <input type="text" class="form-control" wire:model='next_of_kin_email' >
                                        <x-error for="next_of_kin_email" />
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="">Education Type</label>
                                        <select class="form-control" wire:model='educational_type' >
                                            <option value="">select</option>
                                            <option value="msce">MSCE</option>
                                            <option value="olevel">OLEVEL</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <x-error for="educational_type" />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="" class="" >Transcript Copy File</label>
                                        <br>
                                        <input type="file" hidden style="display:none !important;" wire:model='transcript_copy_file'  id="file">
                                        <button class="btn btn-dark" onclick="document.getElementById('file').click()"  >file</button>
                                        <div class="div">
                                            <x-error for="transcript_copy_file" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table  table-inverse ">
                                                <thead class="thead-inverse">
                                                    <tr>
                                                        <th class="text-light" >Subject</th>
                                                        <th class="text-light" >Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="text" class="form-control" wire:model='subject_1' >
                                                            <x-error for="subject_1" />
                                                        </td>
                                                        <td> <input type="text" class="form-control" wire:model='grade_1' >
                                                            <x-error for="grade_1" />
                                                        </td>
                                                        
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="text" class="form-control" wire:model='subject_2' >
                                                            <x-error for="subject_2" />
                                                        </td>
                                                        <td> <input type="text" class="form-control" wire:model='grade_2' >
                                                            <x-error for="grade_2" />
                                                        
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="text" class="form-control" wire:model='subject_3' >
                                                            <x-error for="subject_3" />
                                                        </td>
                                                        <td> <input type="text" class="form-control" wire:model='grade_3' > 
                                                            <x-error for="grade_3" />
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="text" class="form-control" wire:model='subject_4' >
                                                            <x-error for="subject_4" />
                                                        </td>
                                                        <td> <input type="text" class="form-control" wire:model='grade_4' >
                                                            <x-error for="grade_4" />
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <input type="text" class="form-control" wire:model='subject_5' >
                                                            <x-error for="subject_5" />
                                                        </td>
                                                        <td> <input type="text" class="form-control" wire:model='grade_5' >
                                                            <x-error for="grade_5" />
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">
                                                            <input type="text" class="form-control" wire:model='subject_6' >
                                                            <x-error for="subject_6" />
                                                        </td>
                                                        <td> <input type="text" class="form-control" wire:model='grade_6' >
                                                            <x-error for="grade_6" />
                                                        </td>
                                                        
                                                    </tr>
                                                    
                                                   
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="col-lg-12">
                                        <h4 class="text-white" >Programs Available</h4>
                                        @foreach ( $programs as $item )
                                        <div class="form-check">
                                            <input class="form-check-input" wire:model.live='program_list'  type="checkbox" value="{{$item->id}}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $item->name }}
                                            </label>
                                          </div>
                                          <x-error for="program_list" />
                                        @endforeach
                                        {{-- @dump(count($program_list)) --}}
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-dark mt-5">Apply <x-spinner target="store" /> </button>
                                    </div>
                                </div>
                            </form>
                            @else
                            
                            <div class="d-flex justify-content-center">

                                <h4 class="text-white" >INTAKE CURRENTY NOT AVAILABLE </h4>
                                
                            </div>

                            @endif
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
