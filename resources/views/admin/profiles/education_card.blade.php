@php
    $check_months = array( 
        'January' => '01',
        'February' => '02', 
        'March' => '03', 
        'April' => '04', 
        'May' => '05', 
        'June' => '06', 
        'July' => '07', 
        'August' => '08', 
        'September' => '09', 
        'October'=> '10', 
        'November' => '11', 
        'December' => '12'
    );


@endphp

<ul type="circle">

    @forelse ($educationExperiences as $data)

        @php
            $startMonth = explode('-' ,$data->education_start_month);
            $endMonth = explode('-' ,$data->education_end_month);
            $startFullMonth = array_search($startMonth[1], $check_months);
            $endFullMonth = array_search($endMonth[1], $check_months);

            // var_dump($startMonth);
        @endphp
        <li class="mb-5">
            <label class="form-label">{{ $data->education_title }}</label>
             <span>{{ $startMonth[0]}}-{{ $startFullMonth }} --- {{ $endMonth[0] }}-{{ $endFullMonth }} </span>  
             
             <span>
                <a href="javascript:;" class="icon d-none d-md-inline-block ml-3 delete" data-url="{{ route('educations.delete', $data->id) }}">
                    <i class="fe fe-trash fs-16 text-icon"></i>
                </a>
            </span>

            <span>
                <a href="javascript:;" class="icon d-none d-md-inline-block ml-3 educationEdit" dataId="{{ $data->id }}">
                    <i class="fe fe-edit fs-16 text-icon"></i>
                </a>
            </span>

        </li>

    @empty
    <li class="mb-5">
        <label class="form-label">No Data Found</label>
        
    </li>
    @endforelse

</ul>