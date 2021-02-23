<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarkRequest;
use App\Http\Requests\UpdateMarkRequest;
use App\Repositories\MarkRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Gate;

class MarkController extends AppBaseController
{
    /** @var  MarkRepository */
    private $markRepository;

    public function __construct(MarkRepository $markRepo)
    {
        $this->markRepository = $markRepo;
    }

    /**
     * Display a listing of the Mark.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        Gate::authorize('haveaccess', 'marks.index');
        $marks = $this->markRepository->all();

        return view('marks.index')
            ->with('marks', $marks);
    }

    /**
     * Show the form for creating a new Mark.
     *
     * @return Response
     */
    public function create()
    {
        Gate::authorize('haveaccess', 'marks.create');
        return view('marks.create');
    }

    /**
     * Store a newly created Mark in storage.
     *
     * @param CreateMarkRequest $request
     *
     * @return Response
     */
    public function store(CreateMarkRequest $request)
    {
        Gate::authorize('haveaccess', 'marks.store');
        $input = $request->all();
        $mark = $this->markRepository->create($input);

        Flash::success('Mark saved successfully.');

        return redirect(route('marks.index'));
    }

    /**
     * Display the specified Mark.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess', 'marks.show');

        $mark = $this->markRepository->find($id);

        if (empty($mark)) {
            Flash::error('Mark not found');

            return redirect(route('marks.index'));
        }

        return view('marks.show')->with('mark', $mark);
    }

    /**
     * Show the form for editing the specified Mark.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess', 'marks.edit');
        $mark = $this->markRepository->find($id);

        if (empty($mark)) {
            Flash::error('Mark not found');

            return redirect(route('marks.index'));
        }

        return view('marks.edit')->with('mark', $mark);
    }

    /**
     * Update the specified Mark in storage.
     *
     * @param int $id
     * @param UpdateMarkRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarkRequest $request)
    {
        Gate::authorize('haveaccess', 'marks.edit');
        $mark = $this->markRepository->find($id);

        if (empty($mark)) {
            Flash::error('Mark not found');

            return redirect(route('marks.index'));
        }

        $mark = $this->markRepository->update($request->all(), $id);

        Flash::success('Mark updated successfully.');

        return redirect(route('marks.index'));
    }

    /**
     * Remove the specified Mark from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess', 'marks.destroy');
        $mark = $this->markRepository->find($id);

        if (empty($mark)) {
            Flash::error('Mark not found');

            return redirect(route('marks.index'));
        }

        $this->markRepository->delete($id);

        Flash::success('Mark deleted successfully.');

        return redirect(route('marks.index'));
    }
}
