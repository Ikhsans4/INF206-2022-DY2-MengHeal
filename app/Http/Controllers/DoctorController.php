<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Patient;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a dashbord
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor.layout.dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    /**
     * Display a Schedule
     *
     * @return \Illuminate\Http\Response
     */
    public function schedule()
    {
        return view('doctor.layout.jadwal', [
            'title' => 'Schedule',
        ]);
    }

    /**
     * Display a Online Consultation
     *
     * @return \Illuminate\Http\Response
     */
    public function onlineConsultation()
    {
        return view('doctor.layout.konsul', [
            'title' => 'Online Consultation',
        ]);
    }

    /**
     * Display a patients page
     *
     * @return \Illuminate\Http\Response
     */
    public function patients()
    {
        return view('doctor.layout.patients', [
            'patients' => Patient::all(),
            'title' => 'Patients',
        ]);
    }
}
