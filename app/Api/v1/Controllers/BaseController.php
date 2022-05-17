<?php

namespace Api\v1\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as LaravelController;

abstract class BaseController extends LaravelController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var string
     */
    public $pageSize = 20;

    public function __construct()
    {
        $this->apiResponse = new ApiResponse;

        // $this->middleware(function ($request, $next) {
        //     $this->api = new Api(null);
        //     return $next($request);
        // });
    }
}
