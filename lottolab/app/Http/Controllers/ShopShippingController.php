<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests\ShopCreateShippingRequest;
use App\Http\Requests\ShopUpdateShippingRequest;
use App\Repositories\ShippingRepository;
use App\Exceptions\PickbazarException;
use Prettus\Validator\Exceptions\ValidatorException;

class ShopShippingController extends Controller
{
    public $repository;

    public function __construct(ShippingRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|Type[]
     */
    public function index(Request $request)
    {
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateShippingRequest $request
     * @return LengthAwarePaginator|Collection|mixed
     * @throws ValidatorException
     */
    public function store(CreateShippingRequest $request)
    {
        $validateData = $request->validated();
        return $this->repository->create($validateData);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id)
    {
        try {
            return $this->repository->findOrFail($id);
        } catch (\Exception $e) {
            throw new PickbazarException('PICKBAZAR_ERROR.NOT_FOUND');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateShippingRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateShippingRequest $request, $id)
    {
        try {
            $validateData = $request->validated();
            return $this->repository->findOrFail($id)->update($validateData);
        } catch (\Exception $e) {
            throw new PickbazarException('PICKBAZAR_ERROR.NOT_FOUND');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        try {
            return $this->repository->findOrFail($id)->delete();
        } catch (\Exception $e) {
            throw new PickbazarException('PICKBAZAR_ERROR.NOT_FOUND');
        }
    }
}