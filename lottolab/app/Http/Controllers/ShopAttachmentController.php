<?php


namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Attachment;
use App\Repository\AttachmentRepository;
use App\Exceptions\PickbazarException;
use App\Http\Requests\ShopAttachmentRequest;
use Prettus\Validator\Exceptions\ValidatorException;


class ShopAttachmentController extends Controller
{
    public $repository;

    public function __construct(AttachmentRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Collection|Attachment[]
     */
    public function index(Request $request)
    {
        return $this->repository->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AttachmentRequest $request
     * @return mixed
     * @throws ValidatorException
     */
    public function store(AttachmentRequest $request)
    {
        $urls = [];
        foreach ($request->attachment as $media) {
            $attachment = new Attachment;
            $attachment->save();
            $attachment->addMedia($media)->toMediaCollection();
            foreach ($attachment->getMedia() as $image) {
                $converted_url = [
                    'thumbnail' => $image->getUrl('thumbnail'),
                    'original' => $image->getUrl(),
                    'id' => $attachment->id
                ];
            }
            $urls[] = $converted_url;
        }
        return $urls;
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
            $this->repository->findOrFail($id);
        } catch (\Exception $e) {
            throw new PickbazarException('PICKBAZAR_ERROR.NOT_FOUND');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AttachmentRequest $request
     * @param int $id
     * @return bool
     */
    public function update(AttachmentRequest $request, $id)
    {
        return false;
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
