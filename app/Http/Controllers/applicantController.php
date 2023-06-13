<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ApplicationService;

class applicantController extends Controller
{
    public function applicaton_form(
        Request $request,
        ApplicationService $application
    )
    {
        $info = $application->load_application_form();
        return $info;
    }

    public function list(
        Request $request,
        ApplicationService $application
    )
    {
        $info = $application->load_applicant_list();
        return $info;
    }

    public function item(
        Request $request,
        ApplicationService $application,
        $id
    )
    {
        $info = $application->load_single_applicant($id);
        return $info;
    }
}