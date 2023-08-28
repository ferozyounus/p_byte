<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\linkedin_job;
use App\Traits\SlugTrait;
use App\Traits\UploadTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class JobController extends Controller
{

    use SlugTrait;
    use UploadTrait;

    public function index()
    {
        $user = Auth::user()->skills;
        $userSkils = explode(',', Auth::user()->skills);
        $data['page_title'] = "Jobs List";
         $data['apiData'] = linkedin_job::orderByDesc('created_at')->get();
        $perPage = 25;
            // Calculate the current page from the query string or default to 1
            $page = Paginator::resolveCurrentPage('page');
            // Slice the collection based on the current page and number of items per page
            $slicedData = $data['apiData']->slice(($page - 1) * $perPage, $perPage);
            // Create a new paginator instance
            $data['apiData'] = new LengthAwarePaginator($slicedData, $data['apiData']->count(), $perPage, $page, [
                'path' => Paginator::resolveCurrentPath(),]);
        return view('admin.jobs.listing', $data);
    }


    public function recommend_job()
    {
        $user = Auth::user()->skills;
     
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'https://data.usajobs.gov/api/search?ResultsPerPage=500&page=20',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'GET',
        //   CURLOPT_HTTPHEADER => array(
        //     'User-Agent: feroz.younus@koderlabs.com',
        //     'Authorization-Key: kQX9XLe34/fUXs3S0kz9aEcuKeg9EfsCr9hlT/6hg04=',
            
        //   ),
        // ));
        
        // $response = curl_exec($curl);
        
        // curl_close($curl);
        //  $result = json_decode($response);
        //  $search_results = $result->SearchResult;
        
        //  foreach($search_results->SearchResultItems as $key => $single){
        //      $salary = '$'.round($single->MatchedObjectDescriptor->PositionRemuneration[0]->MinimumRange).' - $'.round($single->MatchedObjectDescriptor->PositionRemuneration[0]->MaximumRange).' '.$single->MatchedObjectDescriptor->PositionRemuneration[0]->RateIntervalCode;
        //      $code = $single->MatchedObjectDescriptor->PositionSchedule[0]->Code;
        //      if($code == '1'){
        //         $job_type = 'Full-Time';
        //      }else if($code == '2'){
        //       $job_type = 'Part-Time';
        //     }else  if($code == '3'){
        //       $job_type = 'Shift Work';
        //     }else  if($code == '4'){
        //         $job_type = 'Intermittent';
        //     } if($code == '5'){
        //         $job_type = 'Job Sharing';
        //     }else  if($code == '6'){
        //         $job_type = 'Multiple Schedules';
        //     }
        //     //  $job_type = (strlen($single->MatchedObjectDescriptor->PositionSchedule[0]->Name) < 20) ? $single->MatchedObjectDescriptor->PositionSchedule[0]->Name : '' ;
        //     // dd($single->MatchedObjectDescriptor->PositionSchedule);
        //      $data = DB::table('linkedin_jobs')->where('job_id', $single->MatchedObjectDescriptor->PositionID)->get();
        //     //  dd($data[0]);
        //     // die();
        // //         DB::table("linkedin_jobs")->insert([
        // //                 'job_id' => $single->MatchedObjectDescriptor->PositionID,
        // //                 'job_url' => $single->MatchedObjectDescriptor->PositionURI,
        // //                 'company_name' => $single->MatchedObjectDescriptor->OrganizationName,
        // //                 'job_title' => $single->MatchedObjectDescriptor->PositionTitle,
        // //                 'job_location' => $single->MatchedObjectDescriptor->PositionLocationDisplay,
        // //                 'posted_date' => $single->MatchedObjectDescriptor->PublicationStartDate,
                          
        // //             ]);
        // if(!empty($data[0])){
        //     $job = linkedin_job::find($data[0]->id);
        //     $job->job_salary = ($salary) ? $salary : null;
        //     $job->job_type  = ($job_type) ? $job_type : null;

        //     $job->save();
        // }
      
        //  }
        //  dd('successfully transfered!');
        $data['page_title'] = "Recommended Jobs";
        $userSkils = explode(',', Auth::user()->occupation);
        $data['apiData'] = linkedin_job::where(function ($query) use ($userSkils) {
            foreach ($userSkils as $term) {
                $query->orWhere('job_summary', 'like', "%$term%");
                // ->orWhere('qualification_summary', 'like', "%$term%")
                // ->orWhere('major_duties', 'like', "%$term%");
            };
        })->get();

        // Broadcast Announcers  Radio Disc Jockeys,Choreographers,Clergy,Communications Teachers, Postsecondary,Music Directors  Composers,News Analysts, Reporters,  Journalists,Philosophy  Religion Teachers, Postsecondary,Political Science Teachers, Postsecondary,Preschool Teachers,Public Relations Specialists,Recreational Therapists,Secondary School Teachers,Self-Enrichment Teachers,Writers  Authors,Actors,Adult Basic Education, Adult Secondary Education,  English as a Second Language Instructors,Art Therapists,Art, Drama,  Music Teachers, Postsecondary,Career/Technical Education Teachers, Middle School,Child, Family,  School Social Workers
        //  $data['apiData'] = linkedin_job::orderByDesc('created_at')->get();
        // $new_data = $search_results->SearchResultItems;
        //  $data['apiData'] = $search_results->SearchResultItems;
        //  dd($data['apiData']);
        $perPage = 25;

            // Calculate the current page from the query string or default to 1
            $page = Paginator::resolveCurrentPage('page');

            // Slice the collection based on the current page and number of items per page
            $slicedData = $data['apiData']->slice(($page - 1) * $perPage, $perPage);

            // Create a new paginator instance
            $data['apiData'] = new LengthAwarePaginator($slicedData, $data['apiData']->count(), $perPage, $page, [
                'path' => Paginator::resolveCurrentPath(),]);
        return view('admin.jobs.listing', $data);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // public function paginate($items, $perPage = 5, $page = null, $options = [])
    // {
    //     $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    //     $items = $items instanceof Collection ? $items : Collection::make($items);
    //     return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    // }

    public function create()
    {
        $data['page_title'] = "New Job";

        return view('admin.jobs.create', $data);
    }

    public function get_data(Request $request)
    {

        dd($request->all());

    }
    public function store(Request $request)
    {
        
        try {
            DB::beginTransaction();
            $job = new linkedin_job();
            $job->job_url = ($request->linkedin_job_url_cleaned) ? $request->linkedin_job_url_cleaned : "''" ;
            $job->linkedin_job_url_cleaned = ($request->linkedin_job_url_cleaned) ? $request->linkedin_job_url_cleaned : "''";
            $job->company_name = ($request->company_name) ? $request->company_name : "''";
            $job->company_url = ($request->company_url) ? $request->company_url : "''";
            $job->created_by_admin = '1';
            $job->job_title = ($request->job_title) ? $request->job_title : "''" ;
            $job->job_location = ($request->job_location) ? $request->job_location : "''";
            $job->linkedin_company_url_cleaned = ($request->linkedin_company_url_cleaned) ? $request->linkedin_company_url_cleaned :"''";
            $job->posted_date = ($request->posted_date) ? $request->posted_date :  date('Y-m-d');
            $job->normalized_company_name = ($request->normalized_company_name) ? $request->normalized_company_name : "''";
            $job->job_type = ($request->job_type) ? $request->job_type : "''";
            $job->job_salary = ($request->job_salary) ? $request->job_salary : "''";
            $job->job_summary = ($request->job_description) ? $request->job_description : "''";
            $job->major_duties = ($request->job_responsibility) ? $request->job_responsibility : "''";
        //  dd("INSERT INTO linkedin_jobs (job_url, linkedin_job_url_cleaned,company_name,company_url,created_by_admin,job_title,job_location,linkedin_company_url_cleaned,posted_date,normalized_company_name) VALUES ('$job->job_url',    '$job->linkedin_job_url_cleaned',  '$job->company_name' ,  '$job->company_url' , '$job->created_by_admin', '$job->job_title','$job->job_location' ,  $job->linkedin_company_url_cleaned ,  '$job->posted_date' , $job->normalized_company_name)");
            // DB::insert('INSERT INTO linkedin_jobs (job_url, linkedin_job_url_cleaned,company_name,company_url,created_by_admin,job_title,job_location,linkedin_company_url_cleaned,posted_date,normalized_company_name) VALUES (?,?,?,?,?,?,?,?,?,?)', [ $job->job_url,    $job->linkedin_job_url_cleaned,  $job->company_name ,  $job->company_url , $job->created_by_admin, $job->job_title,$job->job_location ,  $job->linkedin_company_url_cleaned ,  $job->posted_date , $job->normalized_company_name]);
            // DB::enableQueryLog();
            $job->save();
            // Log::info(DB::getQueryLog());
            $notification = array(
                'message' => 'Job created!',
                'alert-type' => 'success',
            );
            DB::commit();
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Error Occured!',
                'alert-type' => 'error',
            );
            DB::rollback();
        }
        return redirect()->route('jobs.listing')->with($notification);
    }

    public function edit($id)
    {
        // $data['page_title'] = "Edit Job";
        // $data['job'] = $job;
        // return view('admin.jobs.edit', $data);
        $job = linkedin_job::find($id);
        return view('admin.jobs.create', ['data' => $job]);

    }

    public function show(Job $job)
    {
        $data['page_title'] = "Job Detail";
        $data['job'] = $job;
        return view('admin.jobs.show', $data);
    }

    public function update(Request $request, Job $job)
    {

        // $this->validate($request, [
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        // ]);

        // $input = $request->all();
        // unset($input['_token']);

        // $input['image'] = isset($input['image']) ? $input['image'] : null;
        // if ($input['image'] != null) {
        //     $checkName = strtotime(date("Y-m-d h:i:sa"));
        //     $input['image'] = $this->uploadImage($input['image'], $checkName, 'uploads/jobs/', 'public');
        // } else {
        //     $input['image'] = $job->image;
        // }

        // try {
        //     DB::beginTransaction();

        //     // if($request->working_skills){
        //     //     $input['working_skills'] = implode(',', $request->working_skills);
        //     // }

        //     if ($request->job_references) {
        //         $input['job_references'] = 1;
        //     } else {
        //         $input['job_references'] = 0;
        //     }
        //     // job_references

        //     $job = $job->update($input);
        //     $notification = array(
        //         'message' => 'Job updated!',
        //         'alert-type' => 'success',
        //     );
        //     DB::commit();
        // } catch (\Throwable $th) {
        //     // dd($th);
        //     $notification = array(
        //         'message' => 'Error Occured!',
        //         'alert-type' => 'error',
        //     );
        //     DB::rollback();
        //     return redirect()->back()->with($notification);
        // }

        // return redirect()->route('jobs.listing')->with($notification);

        $job = linkedin_job::find($request->id);
        $job->job_url = $request->linkedin_job_url_cleaned;
        $job->linkedin_job_url_cleaned = $request->linkedin_job_url_cleaned;
        $job->company_name = $request->company_name;
        $job->company_url = $request->company_url;
        $job->linkedin_company_url_cleaned = $request->linkedin_company_url_cleaned;
        $job->job_title = $request->job_title;
        $job->job_location = $request->job_location;
        $job->normalized_company_name = $request->normalized_company_name;
        $job->job_type = ($request->job_type) ? $request->job_type : "''";
        $job->job_salary = ($request->job_salary) ? $request->job_salary : "''";
        $job->job_summary = ($request->job_description) ? $request->job_description : "''";
        $job->major_duties = ($request->job_responsibility) ? $request->job_responsibility : "''";
        // dd($job);
        if($job->created_by_admin == 1){
            $job->posted_date = date('Y-m-d H:i:s');
        }
        $job->save();
        return redirect()->route('jobs.listing');
    }

    public function delete($id)
    {
        // $job->delete();
        linkedin_job::find($id)->delete();
        $notification = array(
            'message' => 'Job has been deleted!',
            'alert-type' => 'success',
        );
        return redirect()->route('jobs.listing')->with($notification);
    }

    public function change_status(Job $job, string $status)
    {
        $notification = array(
            'message' => 'Status changed successfully!',
            'alert-type' => 'success',
        );

        return redirect()->route('jobs.listing')->with($notification);

    }

}
