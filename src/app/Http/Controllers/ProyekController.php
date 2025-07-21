<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;
use App\Helper\EncryptionHelper;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(name="Proyeks")
 */
class ProyekController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/proyeks",
     *     summary="Get all proyeks",
     *     tags={"Proyeks"},
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="List of proyeks",
     *         @OA\JsonContent(type="object")
     *     )
     * )
     */
    public function index()
    {
        $data = Proyek::all();
        return $this->encryptedResponse($data);
    }

    /**
     * @OA\Get(
     *     path="/api/proyeks/{id}",
     *     summary="Get proyek by ID",
     *     tags={"Proyeks"},
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Proyek found"),
     *     @OA\Response(response=404, description="Proyek not found")
     * )
     */
    public function show($id)
    {
        $data = Proyek::find($id);
        if (!$data) return $this->notFoundResponse();
        return $this->encryptedResponse($data);
    }

    /**
     * @OA\Post(
     *     path="/api/proyeks",
     *     summary="Create new proyek",
     *     tags={"Proyeks"},
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nama_proyek", "tanggal_mulai", "tanggal_selesai"},
     *             @OA\Property(property="nama_proyek", type="string"),
     *             @OA\Property(property="deskripsi", type="string"),
     *             @OA\Property(property="tanggal_mulai", type="string", format="date"),
     *             @OA\Property(property="tanggal_selesai", type="string", format="date")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Proyek created")
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $proyek = Proyek::create($request->only([
            'nama_proyek', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai'
        ]));

        return $this->encryptedResponse($proyek, 201);
    }

    /**
     * @OA\Put(
     *     path="/api/proyeks/{id}",
     *     summary="Update proyek",
     *     tags={"Proyeks"},
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="nama_proyek", type="string"),
     *             @OA\Property(property="deskripsi", type="string"),
     *             @OA\Property(property="tanggal_mulai", type="string", format="date"),
     *             @OA\Property(property="tanggal_selesai", type="string", format="date")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Proyek updated"),
     *     @OA\Response(response=404, description="Proyek not found")
     * )
     */
    public function update(Request $request, $id)
    {
        $proyek = Proyek::find($id);
        if (!$proyek) return $this->notFoundResponse();

        $request->validate([
            'nama_proyek' => 'sometimes|required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'sometimes|required|date',
            'tanggal_selesai' => 'sometimes|required|date|after_or_equal:tanggal_mulai',
        ]);

        $proyek->update($request->only([
            'nama_proyek', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai'
        ]));

        return $this->encryptedResponse($proyek);
    }

    /**
     * @OA\Delete(
     *     path="/api/proyeks/{id}",
     *     summary="Delete proyek",
     *     tags={"Proyeks"},
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Deleted"),
     *     @OA\Response(response=404, description="Not found")
     * )
     */
    public function destroy($id)
    {
        $proyek = Proyek::find($id);
        if (!$proyek) return $this->notFoundResponse();

        $proyek->delete();
        return $this->encryptedResponse(['deleted' => true]);
    }

    private function encryptedResponse($data, $status = 200)
    {
        return response()->json([
            'data' => EncryptionHelper::encrypt(json_encode([
                'message' => 'success',
                'data' => $data
            ]))
        ], $status);
    }

    private function notFoundResponse()
    {
        return response()->json([
            'data' => EncryptionHelper::encrypt(json_encode([
                'message' => 'Data not found',
                'data' => null
            ]))
        ], 404);
    }
        /**
     * @OA\Post(
     *     path="/api/proyeks/decrypt",
     *     summary="Decrypt encrypted response payload",
     *     tags={"Proyeks"},
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"payload"},
     *             @OA\Property(property="payload", type="string", example="encrypted_base64_string_here")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Decrypted content",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     )
     * )
     */
    public function decrypt(Request $request)
    {
        $request->validate([
            'payload' => 'required|string'
        ]);

        try {
            $decrypted = EncryptionHelper::decrypt($request->payload);
            return response()->json([
                'message' => 'success',
                'data' => json_decode($decrypted, true)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'decryption failed',
                'error' => $e->getMessage()
            ], 400);
        }
    }

}
