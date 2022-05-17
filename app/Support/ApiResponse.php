<?php

namespace Support;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;

class ApiResponse
{
    public function success($data = [], $message = '', $code = JsonResponse::HTTP_OK)
    {
        return response()->json([
            'status_code' => $code,
            'status_message' => $message,
            'data' => $data
        ], $code);
    }

    public function notFound()
    {
        return response()->json([
            'status_code' => JsonResponse::HTTP_NOT_FOUND,
            'status_message' => __('message.no_data'),
            'data' => [],
        ], JsonResponse::HTTP_NOT_FOUND);
    }

    public function inputError(array $errors)
    {
        return response()->json([
            'status_code' => JsonResponse::HTTP_UNPROCESSABLE_ENTITY,
            'status_message' => __('message.invalid_data'),
            'errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function serverError($message)
    {
        return response()->json([
            'status_code' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
            'status_message' => App::environment('production') || empty($message) ? __('message.internal_server_error') : $message,
            'data' => [],
        ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function error($data = [], $message = '', $code = JsonResponse::HTTP_BAD_REQUEST)
    {
        return response()->json([
            'status_code' => $code,
            'status_message' => $message,
            'data' => $data
        ], $code);
    }

    public function unauthorized()
    {
        return $this->error([], __('message.unauthorized'), JsonResponse::HTTP_UNAUTHORIZED);
    }

    public function forbiddenAccess()
    {
        return $this->error([], __('message.no_permission_access'), JsonResponse::HTTP_FORBIDDEN);
    }

    public function forbiddenManage()
    {
        return $this->error([], __('message.no_permission_manage'), JsonResponse::HTTP_FORBIDDEN);
    }

    public function forbiddenAction()
    {
        return $this->error([], __('message.no_permission_perform_action'), JsonResponse::HTTP_FORBIDDEN);
    }

    public function forbiddenLogin()
    {
        return $this->error([], __('message.no_permission_login'), JsonResponse::HTTP_FORBIDDEN);
    }
}
