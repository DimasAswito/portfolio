<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        // Kita ambil data profile pertama (asumsinya hanya ada 1 data profile)
        $profile = Profile::first(); 
        
        // Mengambil data lain dan diurutkan berdasarkan order_number
        $skills = Skill::orderBy('order_number', 'asc')->get();
        $experiences = Experience::orderBy('order_number', 'asc')->get();
        
        // Memanggil project beserta dengan relasi tags-nya
        $projects = Project::orderBy('order_number', 'asc')->get();
        
        $educations = Education::orderBy('order_number', 'asc')->get();
        $socialLinks = SocialLink::orderBy('order_number', 'asc')->get();

        // Mengirim data ke view 'welcome'
        return view('welcome', compact(
            'profile', 
            'skills', 
            'experiences', 
            'projects', 
            'educations', 
            'socialLinks'
        ));
    }
}
