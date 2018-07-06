<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;
use App\Vacancy;
use App\Application;

class ManageController extends Controller
{
  public function index()
  {
    return redirect()->route('manage.dashboard');
  }

  public function dashboard()
  {
    $users = User::all();
    $roles = Role::all();
    $permissions = Permission::all();
    $vacancies = Vacancy::all();
    $applications = Application::all();
    return view('manage.dashboard')->withUsers($users)->withRoles($roles)->withPermissions($permissions)->withVacancies($vacancies)->withApplications($applications);
  }
}
