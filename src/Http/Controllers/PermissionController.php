<?php
namespace Mwaqaskhan925\LaravelPermissionEditor\Http\Controllers;
 
use Illuminate\Routing\Controller;
 
class PermissionController extends Controller
{
 
    public function index()
    {
        return view('permission-editor::permissions.index');
    }
 
}