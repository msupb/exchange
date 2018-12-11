<?php

namespace exchange\Http\Controllers\api;

use Illuminate\Http\Request;
use exchange\Models\University;
use exchange\Models\Programme;
use exchange\Models\Package;
use exchange\Models\Course;
use exchange\Models\Course_package;
use exchange\Models\Country;
use exchange\Http\Controllers\Controller;
use exchange\Http\Resources\University as UniversityResource;
use exchange\Http\Resources\Programme as ProgrammeResource;
use exchange\Http\Resources\Package as PackageResource;
use exchange\Http\Resources\Course as CourseResource;
use exchange\Http\Resources\CoursePackage as Course_PackageResource;
use exchange\Http\Resources\Country as CountryResource;


class APIController extends Controller
{
    public function university() {
        
        $universities = University::all();

        //Return universities as JSON resource
        return UniversityResource::collection($universities);
    }

    public function programme() {
        
        $programmes = Programme::all();

        return ProgrammeResource::collection($programmes);
    }

    public function package() {
        $packages = Package::all();

        return PackageResource::collection($packages);
    }

    public function course() {
        $course = Course::all();

        return CourseResource::collection($course);
    }

    public function coursePackage() {
        $course_package = Course_package::all();

        return Course_PackageResource::collection($course_package);
    }

    public function country() {
        $country = Country::all();

        return CountryResource::collection($country);
    }
}
