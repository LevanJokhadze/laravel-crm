<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // GET /api/companies
    public function index()
    {
        return response()->json(Company::all());
    }

    // POST /api/companies
    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return response()->json($company, 201);
    }

    // PUT /api/companies/{id}
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());
        return response()->json($company);
    }

    // DELETE /api/companies/{id}
    public function destroy($id)
    {
        Company::destroy($id);
        return response()->json(['message' => 'Company deleted successfully']);
    }
}
