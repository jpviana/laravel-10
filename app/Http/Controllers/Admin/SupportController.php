<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupportRequest;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function __construct(
        protected SupportService $service
    ) {
    }

    public function index(Request $request)
    {
        $supports = $this->service->paginate(page: $request->get('page', 1), totalPerPage: $request->get('per_page', 3), filter: $request->filter);

        $filters = ['filter' => $request->get('filetr', '')];

        return view('admin.supports.index', compact('supports', 'filters'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(SupportRequest $request)
    {
        $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return redirect()->route('supports.index');
    }

    public function show($id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin.supports.show', compact('support'));
    }

    public function edit($id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin.supports.edit', compact('support'));
    }

    public function update(SupportRequest $request, $id)
    {
        $support = $this->service->update(UpdateSupportDTO::makeFromRequest($request));

        if (!$support) {
            return back();
        }

        return redirect()->route('supports.index');
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }
}
