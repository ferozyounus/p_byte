<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LindedInJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'LindedInJobs:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table("linkedin_jobs")->delete();
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://linkedin-jobs-search.p.rapidapi.com/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'search_terms' => '',
                'location' => '',
                'page' => '',
            ]),
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: linkedin-jobs-search.p.rapidapi.com",
                "X-RapidAPI-Key: 7b10zFpF5Imshv9xnT2T8z9VH8ivp1YMcqbjsnYq6O4o019WGj",
                "content-type: application/json"
            ],
        ]);

        $data['apiDataJSON'] = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $dateJson = json_decode($data['apiDataJSON']);
        // $data['apiData'] = collect($dateJson)->sortBy('posted_date')->reverse()->toArray();

        foreach ($dateJson as $key => $data) {
            DB::table("linkedin_jobs")
                ->insert([
                    'job_url' => $data->job_url,
                    'company_name' => $data->company_name,
                    'company_url' => $data->company_url,
                    'linkedin_company_url_cleaned' => $data->linkedin_company_url_cleaned,
                    'job_title' => $data->job_title,
                    'job_location' => $data->job_location,
                    'posted_date' => $data->posted_date,
                    'normalized_company_name' => $data->normalized_company_name,
                ]);
        }
    }
}
