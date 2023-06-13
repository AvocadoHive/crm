<?php

    namespace App\Http\Services;

    class ApplicationService extends BaseService {

        /**
         *  Initialize Required Repositories
         */
        public function __construct(
        ){
        }

        public function load_application_form()
        {
            return view('pages.applicants.join');
        }

        public function load_applicant_list()
        {
            return view('pages.applicants.main');
        }

        public function load_single_applicant($id)
        {
            return view('pages.applicants.single');
        }
    }